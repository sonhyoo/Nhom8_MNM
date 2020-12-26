<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review;
class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::join('users','reviews.user_id','=','users.id')->join('products','reviews.product_id','=','products.id')->get();
        return view('backend.review.index')->with([
            'reviews' => $reviews
        ]);
    }

    public function destroy($id, Request $request)
    {
        Review::destroy($id);
        return redirect(route('review.index'));
    }
}
