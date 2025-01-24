<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminBlogController extends Controller
{
    
    public function index()
    {
        $blogs = Blog::latest()->get();
        $publishedBlogsCount = Blog::where('status', 1)->count();
        $pendingBlogsCount = Blog::where('status', 0)->count();
        // $deletedBlogsCount = Blog::onlyTrashed()->count();

        $totalBlogs = Blog::count();
        $publishedBlogsPercentage = $totalBlogs > 0 ? round(($publishedBlogsCount / $totalBlogs) * 100, 2) : 0;
        // $deletedBlogsPercentage = $totalBlogs > 0 ? round(($deletedBlogsCount / $totalBlogs) * 100, 2) : 0;

        return view('admin.blogs.index', compact(
            'blogs',
            'publishedBlogsCount',
            'pendingBlogsCount',
            // 'deletedBlogsCount',
            // 'totalViews',
            'publishedBlogsPercentage',
            // 'deletedBlogsPercentage'
        ));
    }
    
    public function create()
    {
        return view('admin.blogs.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:0,1',
        ]);

        $imageUrl = null;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $url = Storage::url($path);
            $imageUrl = $url;
        }

        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_url' => $imageUrl,
            'status' => $request->status,
        ]);

        return redirect()->route('blogs.index')->with('success', 'تم إنشاء المقالة بنجاح.');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function edit($id)
    {
        $post = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:0,1',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($blog->image) {
                $oldImagePath = str_replace('/storage', 'public', $blog->image_url);
                Storage::delete($oldImagePath);
            }
    
            $path = $request->file('image')->store('images', 'public');
            $blog->image_url = Storage::url($path);
        }

        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
            'quote' => $request->quote,
            'reading_time' => $request->reading_time ?? 5,
            'status' => $request->status,
        ]);

        return redirect()->route('blogs.index')->with('success', 'تم تحديث المقالة بنجاح.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->image) {
            $oldImagePath = str_replace('/storage', 'public', $blog->image_url);
        }

        $blog->delete();

        Storage::delete($oldImagePath);
        return redirect()->route('blogs.index')->with('success', 'تم حذف المقالة بنجاح.');
    }
}