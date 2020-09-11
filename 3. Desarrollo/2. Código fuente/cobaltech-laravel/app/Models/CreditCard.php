<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    //protected $primaryKey='id';
    //protected $table='creditcards';
    protected $fillable = ['name', 'number', 'duedate', 'cvv'];
}
