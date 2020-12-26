<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Product\CreateProductRequest;
use App\Http\Requests\Backend\Product\UpdateProductRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\Sale;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $categories = Category::select(['id'])->get();
        $sales = Sale::select(['id'])->get();
        return view('backend.product.index')->with([
            'products' => $products,
            'categories' => $categories,
            'sales' => $sales
        ]);
    }

    public function create()
    {
        
           
    }

    public function store(CreateProductRequest $request)
    {
        $fileName = $request->image->getClientOriginalName();
        $request->image->move('Uploads',$fileName); 
        try {
            Product::create([
                'product_name' => $request->product_name,
                'price' => $request->price,
                'image' => $fileName,
                'category_id'=>$request->category_id,
                'prdescriptions' => $request->prdescriptions,
                'prkeywords'=> $request->prkeywords,
                'status' => $request->status,
                'qty_nhap' => $request->qty_nhap,
                'sale_id' => $request->sale_id
            ]);
        }
        catch(Exception $e) {
            unlink('Uploads/'.$fileName);
        }
        return redirect(route('product.index'))->with('status', 'Thêm sản phẩm thành công');
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::select(['id'])->get();
        if(!$product){
            abort(404);
        }
        return view('backend.product.update')->with([
            'product' => $product,
            'categories' => $categories
        ]); 
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::find($id);
        if(!$product){
            abort(404);
        }
        try {
            
            $fileName = $request->image->getClientOriginalName();
            $request->image->move('Uploads',$fileName);
            $product->update([
                'product_name' => $request->product_name,
                'price' => $request->price,
                'image' => $fileName,
                'prdescriptions' => $request->prdescriptions,
                'prkeywords'=> $request->prkeywords,
                'category_id'=>$request->category_id,
                'status' => $request->status,
                'qty_nhap' => $request->qty_nhap,
                'sale_id' => $request->sale_id
            ]);
        }
        catch(Exception $e) {
            unlink('Uploads/'.$fileName);
        }
        return redirect(route('product.index'))->with('status','Cập nhật thành công');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect( route('product.index'))->with('status','Xóa sản phẩm thành công');
    }

}
