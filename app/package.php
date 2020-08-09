<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    //
    protected $table='packages';
    protected $primaryKey='id';
    public $timestamps=false;
}
