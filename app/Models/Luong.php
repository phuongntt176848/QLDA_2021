<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luong extends Model
{
    use HasFactory;
    protected $table = 'Luong';
    
    public function NguoiDung(){
        return $this->belongsTo('App\Models\NguoiDung','idND','idND');
    }
}
