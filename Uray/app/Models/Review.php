<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Product;
use User;
class Review extends Model
{
    protected $fillable = [
    	'product_id',
    	'user_id',
    	'review'
    ];
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
