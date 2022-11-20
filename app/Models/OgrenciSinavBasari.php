<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class OgrenciSinavBasari extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'ogrenci_sinav_basari';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kid','sinav_id', 'basari_puani'
    ];

    protected $hidden = [
        'kid'
    ];
}
