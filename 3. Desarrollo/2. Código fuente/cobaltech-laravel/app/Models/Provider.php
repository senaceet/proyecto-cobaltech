<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //protected $primaryKey='id';
    //protected $table='providers';
    protected $fillable = ['businessname', 'contact', 'position', 'phone', 'extension', 'mobile', 'address', 'warehouse', 'website', 'email'];
}