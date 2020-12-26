<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Category;
use ProductImg;
use OrderDetail;
use Sale;
class Product extends Model
{
    protected $fillable = [
    	'product_name',
    	'prdescriptions',
    	'prkeywords',
    	'image',
    	'price',
    	'category_id',
        'status',
        'qty_nhap',
        'sale_id'
    ];
    public function category(){
    	return $this->belongsTo(Category::class);
    }
    public function sale(){
        return $this->belongsTo(Sale::class);
    }
    public function productImgs(){
        return $this->hasMany(ProductImg::class,'product_id','id');
    }
    public function reviews(){
        return $this->hasMany(Review::class,'product_id','id');
    }
    public function orderDetails(){
        return $this->hasMany(OrderDetail::class,'product_id','id');
    }
}
