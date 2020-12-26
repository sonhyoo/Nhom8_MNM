<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review;
class ReviewController extends Controller
{
   
    public function store(Request $request)
    {
        Review::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request->id,
            'review' => $request->review
        ]);
        return redirect(route('frontend.product.show',['id'=>$request->id]));
        
    }

    public function edit($id)
    {
        $review = Review::find($id);
        if(!$review){
            abort(404);
        }
        return view('frontend.review.update')->with([
            'review' => $review
        ]);
    }

    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        if(!$review){
            abort(404);
        }
        $review->update([
            'review' => $request->review            
        ]);
        return redirect(route('frontend.product.show',['id'=>$review->product_id]));
    }

    public function destroy($id, Request $request)
    {
        Review::destroy($id);
        return redirect(route('frontend.product.show',['id'=>$request->product_id]));
    }
}
