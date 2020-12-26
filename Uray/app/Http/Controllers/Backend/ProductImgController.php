<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ProductImg\CreateProductImgRequest;
use App\Models\ProductImg;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
class ProductImgController extends Controller
{
    public function index()
    {
        $productimg = ProductImg::all();
        $productIds = Product::select('id')->get();
        return view('backend.productimg.index')->with([
            'productimgs' => $productimg,
            'productIds' => $productIds
        ]);
    }

    public function create()
    {
        $productIds = Product::select('id')->get();
        return view('backend.productimg.index')->with([
            'products_id' => $productIds
        ]);
    }

    public function store(CreateProductImgRequest $request)
    {
        try {
            $fileName = $request->image_detail->getClientOriginalName();
            $request->image_detail->move('Uploads/Product_detail',$fileName);
            ProductImg::create([
                'product_id' => $request->product_id,
                'image_detail' => $fileName
            ]);
        }
        catch(Exception $e) {
            unlink('Uploads/Product_detail/'.$fileName);
        }
        return redirect(route('productimg.index'))->with('status', 'Thêm ảnh thành công');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $imgDetail = ProductImg::find($id);
        $productIds = Product::select(['id'])->get();
        if(!$imgDetail) {
            abort(404);
        }
        return view('backend.productimg.index')->with([
            'imgDetail' => $imgDetail,
            'productIds' => $productIds

        ]);
    }

    public function update(CreateProductImgRequest $request, $id)
    {
        $imgDetail = ProductImg::find($id);
        if(!$imgDetail) {
            abort(404);
        }
        try {
            $fileName = $request->image_detail->getClientOriginalName();
            $request->image_detail->move('Uploads/Product_detail',$fileName);
            $imgDetail->update([
                'product_id' => $request->product_id,
                'image_detail' => $fileName
            ]);
        }
        catch(Exception $e) {
            unlink('Uploads/Product_detail/'.$fileName);
        }
        return redirect(route('productimg.index'))->with('status', 'Cập nhật ảnh thành công');
    }

    public function destroy($id)
    {
        ProductImg::destroy($id);
        return redirect(route('productimg.index'))->with('status', 'Xóa ảnh thành công');
    }
}
