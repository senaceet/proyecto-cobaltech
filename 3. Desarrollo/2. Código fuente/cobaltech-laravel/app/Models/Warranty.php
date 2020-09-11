<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    //protected $primaryKey='id';
    //protected $table='warranty';
    protected $fillable = ['entry', 'description', 'bills_id', 'warrantystatus_id'];
}