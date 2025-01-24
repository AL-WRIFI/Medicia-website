<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    
    public function index(Request $request)
    {    
        $posts = Blog::all();
        return view('blog', compact('posts'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        $recentBlogs = Blog::where('id', '!=', $id)
            ->latest()
            ->take(4)
            ->get();

        return view('blog-deteils', compact('blog', 'recentBlogs'));
    }

}