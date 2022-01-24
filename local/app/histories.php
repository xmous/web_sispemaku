<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class histories extends Model
{
    //
   // protected $table='historis';
    protected $fillable = ['id_account','tgl_mulai','tgl_akhir','id_marketing','id_paket','approved','bukti'];

    public function get_paket()
    {
        return $this->belongsTo('App\landings','id_paket','id');
    }

    public function get_user()
    {
        return $this->belongsTo('App\User','id_account','id');
    }

    public function get_marketing()
    {
        return $this->belongsTo('App\User','id_marketing','id');
    }

}
