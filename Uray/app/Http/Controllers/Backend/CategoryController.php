<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\Backend\Category\CreateCategoryRequest;
use App\Http\Requests\Backend\Category\UpdateCategoryRequest; 
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.categories.index')->with([
            'categories' => $categories
        ]);
    }
    public function store(CreateCategoryRequest $request)
    {
        
        Category::create($request->all());
        return redirect(route('category.index'))->with('status', 'Thêm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        $categories = Category::select(['id'])->get();
        if(!$category) {
            abort(404);
        }
        $products = Product::where('category_id',$id)->get();
        return view('backend.product.index')->with([
            'products' => $products,
            'categories' => $categories
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::find($id);
        if(!$category) {
            abort(404);
        }
        $category->update($request->all());
        return redirect(route('category.index'))->with('status', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect(route('category.index'))->with('status', 'Xóa thành công!!!');
    }
}
