<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoSoNhanVien extends Model
{
    use HasFactory;
    protected $table = 'HoSoNhanVien';

    public function NguoiDung(){
        return $this->belongsTo('App\Model\NguoiDung','idND','idHS');
    }

}
