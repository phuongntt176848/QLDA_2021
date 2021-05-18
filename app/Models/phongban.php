<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phongban extends Model
{
    use HasFactory;
    protected $table = 'phongban';
    public $timestamps = false;

    
    protected $primaryKey  = 'idPB';

    protected $fillable = [
        'Ten', 'DiaChi', 'sdt',
    ];

    public function NguoiDung(){
        return $this->hasMany('App\Models\NguoiDung','idPB','idPB');
    }
   
}
