<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThamGia extends Model
{
    use HasFactory;
    protected $table = 'ThamGia';

    public function DaoTao(){
        return $this->belongsTo('App\Models\DaoTao','idDT');
    }

    public function NguoiDung(){
        return $this->belongsTo('App\Models\NguoiDung','idND');
    }

}
