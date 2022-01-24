<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas_mhs extends Model
{
    //
    protected $table='kelas_mhs';

    protected $fillable = ['id_kelas','id_mhs'];

    public function get_kelas()
    {
        return $this->belongsTo('App\kelas','id_kelas','id');
    }

    public function get_mhs()
    {
        return $this->belongsTo('App\User','id_mhs','id');
    }

}
