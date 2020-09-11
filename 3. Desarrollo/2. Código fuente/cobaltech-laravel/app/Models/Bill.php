<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //protected $primaryKey='id';
   //protected $table='bills';
    protected $fillable = ['sale', 'total', 'users_id', 'products_id'];
}
