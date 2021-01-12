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
        'stock',
        'subCategory_id'
    ];
    public function sub_categroy(){
        return $this->belongsTo(SubCategory::class);
    }
    public function orders(){
        return $this->belongsToMany(Order::class,'product_order');
    }
}

