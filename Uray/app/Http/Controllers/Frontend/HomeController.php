<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
class HomeController extends Controller
{
    public function index(Request $request) 
    {
        
    	$products = Category::join('products','categories.id','=','products.category_id')->inRandomOrder()->take(6)->get();
        $productCarts = $request->session()->get('carts');
        return view('frontend.home.index')->with([
            'products' => $products,
            'productcarts' => $productCarts
        ]);
    }
    public function show($id)
    {
        $category = Category::find($id);
        if(!$category) {
            abort(404); 
        }

        $categories = Category::all();
        $productPo = Product::inRandomOrder()->take(3)->get();
        $products = Product::where('category_id',$id)->get();
        return view('frontend.category.show')->with([
            'products' => $products,
            'categories' => $categories,
            'popular' => $productPo,
        ]);
    }
}
