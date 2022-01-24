<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    //
    protected $table='kelas';

    protected $fillable = ['nama_kelas','dosen','jam_mulai','jam_akhir','ruangan'];

    public function get_dosen()
    {
        return $this->belongsTo('App\User','dosen','id');
    }

    public function get_mulai()
    {
        return $this->belongsTo('App\jam','jam_mulai','id');
    }

    public function get_akhir()
    {
        return $this->belongsTo('App\jam','jam_akhir','id');
    }
    
    public function get_ruang()
    {
        return $this->belongsTo('App\ruang','ruangan','id');
    }
    
}
