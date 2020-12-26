<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Carbon\Carbon;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Mail\MailOrderConfirm;
use Mail;
class OrderController extends Controller
{ 
	public function index()
	{
		return view('frontend.order.order');
	}

    public function store(Request $request)
    {
    	$carts = $request->session()->get('carts') ?? collect();
     	Order::create([
            
            'user_name' => $request->user_name,
            'totalMoney' => $carts->total,
            'Date'=>Carbon::now('Asia/Ho_Chi_Minh'),
            'user_id' => auth()->user()->id,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 'Chưa xử lý'
        ]);
        $orderId = Order::where('user_id', auth()->user()->id )->max('id'); 
        foreach ($carts as $cart) {
        	OrderDetail::create([
        		'order_id' => $orderId,
        		'product_id' => $cart->id,
        		'product_name' => $cart->product_name,
        		'product_price' => $cart->price,
        		'qty' => $cart->qty,
        		'note' => $request->note

        	]);

            $product = Product::find($cart->id);
            $qtyNew = $product->qty_nhap - $cart->qty;

            $product->qty_nhap = $qtyNew;
            $product->save();
            
        }
        
        
        $order = new Order();
        $order = Order::findOrFail($orderId);
        Mail::to($request->email)->send(new MailOrderConfirm($order));

        $request->session()->forget('carts');
        return redirect('/');
               
    }
}
