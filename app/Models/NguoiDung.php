<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class NguoiDung extends Model
{
    use HasFactory,Notifiable;

    protected $table = 'NguoiDung';

    public function PhongBan(){
        return $this->belongsTo('App\Models\PhongBan','idPB','idND');
    }

    public function HopDong(){
        return $this->hasMany('App\Models\HopDong','idHD','idND');
    }

    public function Luong(){
        return $this->belongsTo('Add\Models\Luong','idND','idND');
    }

    public function DaoTao(){
        return $this->hasMany('App\Models\DaoTao','idDT','idND');
    }

    public function ThamGia(){
        return $this->hasMany('App\Models\ThamGia','idND','idND');
    }

    public function HoSoNhanVien(){
        return $this->belongsTo('App\Models\HoSoNhanVien','idND','idND');
    }

    public function DamNhiem(){
        return $this->hasMany('App\Models\DamNhiem','idND','idND');
    }
}
