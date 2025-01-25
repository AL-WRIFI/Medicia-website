<?php 

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class HomePageController extends Controller
{
    public function index(Request $request)
    {
        $posts = Blog::all();
        $products = null;
        $categoryId = $request->query('category_id');
        if ($categoryId) {
            $sub_categories = SubCategory::where('category_id', $categoryId)->value('id');
            Log::info('sub_categories ====>', [$sub_categories]);
            $products = Product::whereIn('sub_category_id', [$sub_categories])->get();
            Log::info('Products by category ====>', [$products]);

        } else {
            $products = Product::all();
        }

        return view('index', compact('products', 'posts'));
    }


    public function getProductsByCategory(Request $request)
    {
        $categoryId = $request->category_id;

        if ($categoryId) {
            $sub_categories = SubCategory::where('category_id', $categoryId)->value('id');
            Log::info('sub_categories ====>', [$sub_categories]);
            $products = Product::whereIn('sub_category_id', [$sub_categories])->get();
            Log::info('Products by category ====>', [$products]);

        } else {
            $products = Product::all();
        }

        return response()->json(['products' => $products]);
    }


    public function productDitails($id)
    {
        $product = Product::find($id);

        return view('product-deteils', compact('product'));
    }


    public function products() {
        $products = Product::all();
        return view('products', compact('products'));
    }

}