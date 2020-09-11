<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $primaryKey='id';
    //protected $table='products';
    protected $fillable = ['name', 'description', 'stock', 'picture', 'price', 'providers_id', 'categories_id', 'brands_id'];
}