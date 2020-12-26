<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Product;
class ProductImg extends Model
{
    protected $fillable = [
    	'product_id',
    	'image_detail'
    ];
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
