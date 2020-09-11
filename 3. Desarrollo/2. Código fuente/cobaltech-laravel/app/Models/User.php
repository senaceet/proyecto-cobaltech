<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //protected $primaryKey='id';
    //protected $table='users';
    protected $fillable = ['document', 'name', 'lastname', 'email', 'password', 'address', 'phone', 'mobile', 'roles_id', 'cities_id', 'doctypes_id', 'products_id'];
}