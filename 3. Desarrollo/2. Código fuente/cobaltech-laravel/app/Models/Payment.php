<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //protected $primaryKey='id';
    //protected $table='payments';
    protected $fillable = ['bills_id', 'creditcards_id', 'debitcards_id', 'cash_id'];
}