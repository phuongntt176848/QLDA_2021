<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HopDong extends Model
{
    use HasFactory;
    protected $table = 'HopDong';

    public function NguoiDung(){
        return $this->belongsTo('App\Models\HopDong','idND','idHD');
    }
}
