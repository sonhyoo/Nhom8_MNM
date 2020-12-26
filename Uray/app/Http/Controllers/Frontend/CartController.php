<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
class CartController extends Controller
{
	public function insert(Request $request, $id)
	{
		$product = Product::find($id);
		$carts = $request->session()->get('carts') ?? collect();
		if($carts->count() == 0){
			$product->qty = 1;
			$carts->push($product);
		}
		else{
			if($carts->where('id', $id)->count() == 0){
				$product->qty = 1;
				$carts->push($product);
			}
			else{
				$product = $carts->where('id',$id)->first();

				$qty = $product->qty + 1;
				foreach ($carts as $key => $item) {
					if($item->id == $id){
						$carts[$key]->qty = $qty;
					}
				}
			}
		}
		$request->session()->put('carts',$carts);
		return redirect(route('frontend.cart.list'));
	}
	public function update(Request $request)
	{
		$carts = $request->session()->get('carts');
		if(isset($request->submit))
		{
			foreach($request->qty as $key=>$value)
 			{
 				$i = $carts->search(function($item) use($key){
					return $item->id == $key;
				});
				if( ($value <= 0) and (is_numeric($value)))
  				{  					
   					$carts->pull($i);
  				}
  				elseif(($value > 0) and (is_numeric($value)))
  				{
   					$carts[$i]->qty = $value;
  				}
 			}
 		}
 		$request->session()->put('carts',$carts);
 		return redirect(route('frontend.cart.list'));
	}
	public function delete(Request $request, $id)
	{
		$carts = $request->session()->get('carts');
		$key = $carts->search(function($item) use($id){
			return $item->id == $id;
		});
		$carts->pull($key);
		$request->session()->put('carts',$carts);
		return redirect(route('frontend.cart.list'));
	}
    public function show(Request $request)
    {
    	$products = $request->session()->get('carts');
    	$total = 0;
    	$totalQty = 0;
    	foreach ($products as $key => $item) 
    	{
			$total += $products[$key]->price * $products[$key]->qty;
			$totalQty += $products[$key]->qty;
		}
		$products->total = $total;
		$products->totalQty = $totalQty;
    	return view('frontend.cart.cart')->with([
    		'products' => $products
    	]);
    }
}
