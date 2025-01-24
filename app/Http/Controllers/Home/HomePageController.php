<?php 

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;


class HomePageController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }
}