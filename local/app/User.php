<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    //di isi jika tidak ada s belakangnya/ nama model beda dengan tabel
    protected $table='akun';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     //yang bisa di isi di table
    protected $fillable = [
        'nim', 'password', 'nama','nomor','alamat', 'api_key', 'level'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
