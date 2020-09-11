<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    //protected $primaryKey='id';
    //protected $table='shippings';
    protected $fillable = ['trackingcode', 'bills_id', 'deliverystatus_id'];
}