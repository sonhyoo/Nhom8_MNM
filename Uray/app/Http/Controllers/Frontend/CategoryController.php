<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
	public function index()
    {
		$categories = Category::all();
        $productPo = Product::inRandomOrder()->take(3)->get();
        $productsList = Category::join('products','categories.id','=','products.category_id')->paginate(9);
        
    	return view('frontend.category.show')->with([
            'categories' => $categories,
    		'products' => $productsList,
            'popular' => $productPo,  		
    	]);
	}
    public function filter(Request $request){
        $categories = Category::all();
        $productPo = Product::inRandomOrder()->take(3)->get();
        $filter = $request->filter;
        if($filter == 1) {
            $productsList = DB::table('categories')
                            ->join('products','categories.id','=','products.category_id')
                            ->where('price','<',50)->paginate(9);
        }
        elseif($filter == 2) {
            $productsList = Category::join('products','categories.id','=','products.category_id')->whereBetween('price',[50, 100])->paginate(9);
        }
        else {
            $productsList = Category::join('products','categories.id','=','products.category_id')->where('price','>',100)->paginate(9);
        } 

        return view('frontend.category.show')->with([
            'categories' => $categories,
            'products' => $productsList,
            'popular' => $productPo,        
        ]);
    }
    public function search(Request $request){
        $categories = Category::all();
        $productPo = Product::inRandomOrder()->take(3)->get();
        $search = $request->search;
        $sort = $request->sort;
        if($sort == 1) {
            $productsList = DB::table('categories')
                            ->join('products','categories.id','=','products.category_id')->where( 'product_name','like', "%$search%")->paginate(9);
        }
        if($sort == 2) {
            $productsList = Category::join('products','categories.id','=','products.category_id')->where('product_name','like', '%'.$search.'%')->orderBy('products.id','desc')->paginate(9);
        }
        if($sort == 3) {
            $productsList = Category::join('products','categories.id','=','products.category_id')->where('product_name','like', '%'.$search.'%')->orderBy('price','asc')->paginate(9);
        }
        else {
            $productsList = Category::join('products','categories.id','=','products.category_id')->where('product_name','like', '%'.$search.'%')->orderBy('price','desc')->get();
        }
        
        return view('frontend.category.show')->with([
            'categories' => $categories,
            'products' => $productsList,
            'popular' => $productPo,        
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
        $products = Product::where('category_id', $id)->paginate(9);
        return view('frontend.category.show')->with([
            'products' => $products,
            'categories' => $categories,
            'popular' => $productPo,
        ]);
    }
}
