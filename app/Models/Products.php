<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'description',
        'category_id',
        'purchase_price',
        'sale_price',
        'stock',// the number in the store
        'subCategory_id',
        //disable
    ];
    public function sub_categroy(){
        return $this->belongsTo('App\Models\SubCategory','subCategory_id');
    }
    public function orders(){
        return $this->belongsToMany('App\Models\Order','product_order_table','product_id','order_id')->withPivot('quantity');
    }

    public function cart(){
        return $this->hasMany('App\Models\Cart','product_id');
    }

}

