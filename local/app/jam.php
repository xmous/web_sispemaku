<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jam extends Model
{
    //
    protected $table='jam';

    protected $fillable = ['jamke','masuk','keluar'];

}
