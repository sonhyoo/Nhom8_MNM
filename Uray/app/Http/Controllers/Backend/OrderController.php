<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use App\Mail\MailShip;
use Mail;
class OrderController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')
                    ->orderBy('id', 'DESC')
                    ->get();
        return view('backend.order.index')->with([
            'orders' => $orders,
        ]);
    }
    public function show($id)
    {
        $order = Order::find($id);
        if(!$order) {
            abort(404);
        }
        $details = OrderDetail::where('order_id',$id)->get();
        return view('backend.orderDetail.index')->with([
            'details' => $details,
            'order' => $order
        ]);
    }
    public function update(Request $request, $id){

        $order = Order::find($id);

        if(!$order) {
            abort(404);
        }
        $order->status = 'Giao hàng';
        $order->save();
        Mail::to($request->email)->send(new MailShip($order));
        return redirect('/admin/orderBackend');
    }
}
