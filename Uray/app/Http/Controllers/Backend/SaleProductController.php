<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\Backend\Sale\SaleProductCreateRequest;
use App\Models\Sale;
class SaleProductController extends Controller
{
    public function index()
    {
        $sales = Sale::all();
        return view('backend.sale.index')->with([
            'sales' => $sales
        ]);
    }

    public function create()
    {
        
    }

    public function store(SaleProductCreateRequest $request)
    {
        Sale::create($request->all());
        return redirect(route('sale.index'))->with('status', 'Thêm sản phẩm thành công');
    }

    public function show($id)
    {
        $sale = Sale::find($id);
        $sales = Sale::select(['id'])->get();
        if(!$sale) {
            abort(404);
        }
        $products = Product::where('sale_id',$id)->get();
        return view('backend.product.index')->with([
            'products' => $products,
            'sales' => $sales
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(SaleProductCreateRequest $request, $id)
    {
        $sale = Sale::find($id);
        if(!$sale) {
            abort(404);
        }
        $sale->update($request->all());
        return redirect(route('sale.index'))->with('status', 'Cập nhật thành công');
    }

    public function destroy($id)
    {
        Sale::destroy($id);
        return redirect(route('sale.index'))->with('status', 'Xóa thành công');
    }
}
