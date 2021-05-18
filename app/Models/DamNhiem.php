<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DamNhiem extends Model
{
    use HasFactory;
    protected $table = 'DamNhiem';
    
    public function NguoiDung(){
        return $this->belongsTo('App\Models\NguoiDung','idND');
    }

    public function ChucVu(){
        return $this->belongsTo('App\Models\ChucVu','idCV');
    }
}
