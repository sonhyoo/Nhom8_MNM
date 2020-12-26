<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImg;
use App\Models\Review;
use App\Models\User;
class ProductController extends Controller
{

    public function show($id)
    {
    	$product = Product::find($id);
        if(!$product) {
            abort(404);
        }

    	$category = Category::select('categories.name')->join('products','categories.id','=','category_id')->where(['products.id' => $id])->get();
        $imgDetails = ProductImg::select('image_detail')->where('product_id',$id)->get();
        $products = Category::join('products','categories.id','=','products.category_id')->inRandomOrder()->take(4)->get();
        $reviews = User::join('reviews','users.id','=','reviews.user_id')->where(['reviews.product_id' => $id])->get();
        $count = Review::join('users','reviews.user_id','=','users.id')->where(['reviews.product_id' => $id])->count();
        return view('frontend.product.show')->with([
    		'product' => $product,
    		'category' => $category,
            'imgDetails' => $imgDetails,
            'products' => $products,
            'reviews' => $reviews,
            'count' => $count
    	]);
    }
}
