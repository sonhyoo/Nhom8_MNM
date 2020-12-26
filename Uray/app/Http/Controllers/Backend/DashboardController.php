<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;

class DashboardController extends Controller
{
	public function index()
	{
		//tổng tháng
		$month = Carbon::now()->month;
        //tổng đơn tháng
        $countMonth = DB::table('orders')
                    ->select(DB::raw('COUNT(*) as orderM'))
                    ->where(DB::raw('month(Date)'), '=', $month)
                    ->get();
        //tổng thu tháng           
		$totalMonth = DB::table('orders')
                    ->where(DB::raw('month(Date)'), '=', $month)
                    ->sum('totalMoney');

        
        $day = Carbon::now()->day;
        //tổng đơn ngày
        $countDay = DB::table('orders')
                    ->select(DB::raw('COUNT(*) as orderD'))
                    ->where(DB::raw('day(Date)'), '=', $day)
                    ->get();
        // tổng thu ngày
		$totalDay = DB::table('orders')
                    ->where(DB::raw('day(Date)'), '=', $day)
                    ->sum('totalMoney');
		//order year
		$range = Carbon::now()->subYears(5);
        $orderYear = DB::table('orders')
                    ->select(DB::raw('year(Date) as getYear'), DB::raw('COUNT(*) as value'))
                    ->where('Date', '>=', $range)
                    ->groupBy('getYear')
                    ->orderBy('getYear', 'ASC')
                    ->get();
        //order month
        $rangeM = Carbon::now()->subMonths(12);
        $orderMonth = DB::table('orders')
                    ->select(DB::raw('month(Date) as getMonth'), DB::raw('COUNT(*) as value'))
                    ->where('Date', '>=', $rangeM)
                    ->groupBy('getMonth')
                    ->orderBy('getMonth', 'ASC')
                    ->get();

        //order month
        $rangeD = Carbon::now()->subDays(31);
        $orderDay = DB::table('orders')
                    ->select(DB::raw('day(Date) as getDay'), DB::raw('COUNT(*) as value'))
                    ->where('Date', '>=', $rangeD)
                    ->groupBy('getDay')
                    ->orderBy('getDay', 'ASC')
                    ->get();

        //order now
        $rangeDay = Carbon::now();
        $get_range = date_format($rangeDay,"Y/m/d");
        $date_range = date_format($rangeDay,"d/m/Y");
        $sumProductDay = DB::table('orders')
                    ->select(DB::raw('SUM(order_details.qty) as countProduct'))
                    ->join('order_details', 'orders.id', '=', 'order_details.order_id')
                    ->join('products', 'order_details.product_id', '=', 'products.id')
                    ->where('Date', '=', $get_range)
                    ->groupBy('Date')
                    ->first();
        if ($sumProductDay != null)
        {
           	$totalProduct = (INT)($sumProductDay->countProduct);
	        $percentProduct = round((100 / $totalProduct), 3);

	        $productBuy = DB::table('orders')
	                    ->select('products.product_name as name', DB::raw("SUM(qty) * $percentProduct as y"))
	                    ->join('order_details', 'orders.id', '=', 'order_details.order_id')
	                    ->join('products', 'order_details.product_id', '=', 'products.id')
	                    ->where('Date', '=', $get_range)                    
	                    ->groupBy('product_id')
	                    ->get();
	    } else {
	    	$productBuy = null;
	    }

		return view('backend.dashboard.index')->with([
			'orderYear' => $orderYear,
			'orderMonth' => $orderMonth,
			'orderDay' => $orderDay,
			'totalMonth' => $totalMonth,
			'totalDay' => $totalDay,
            'countMonth' => $countMonth,
            'countDay' => $countDay,
			'productBuy' => json_encode($productBuy)

		]);
	}
    
    
}
