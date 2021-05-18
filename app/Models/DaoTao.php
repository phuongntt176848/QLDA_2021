<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaoTao extends Model
{
    use HasFactory;
    protected $table = 'DaoTao';
    
    public function NguoiDung(){
        return $this->belongsTo('App\Models\NguoiDung','idND','idDT');
    }

    public function ThamGia(){
        return $this->hasMany('App\Models\ThamGia','idDT','idDT');
    }
}
