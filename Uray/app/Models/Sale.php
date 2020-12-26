<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Product;
class Sale extends Model
{
    protected $fillable = [
    	'sale_name',
    	'sale_value',
    	'date_start',
    	'date_end'
    ];
    public function products()
    {
    	return $this->hasMany(Product::class,'sale_id','id');
    }
}
