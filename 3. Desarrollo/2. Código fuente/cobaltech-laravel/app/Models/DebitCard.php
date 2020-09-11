<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DebitCard extends Model
{
    //protected $primaryKey='id';
    //protected $table='debitcards';
    protected $fillable = ['transaction'];
}