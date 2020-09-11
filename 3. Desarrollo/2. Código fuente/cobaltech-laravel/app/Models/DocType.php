<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocType extends Model
{
    //protected $primaryKey='id';
    //protected $table='doctypes';
    protected $fillable = ['abbreviation', 'doctype'];
}