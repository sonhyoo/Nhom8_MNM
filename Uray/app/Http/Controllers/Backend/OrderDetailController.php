<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
class OrderDetailController extends Controller
{
    public function index()
    {
        $details = Order::all();
        dd($details);
        return view('backend.orderDetail.index')->with([
            'details' => $details
        ]);
    }
}
