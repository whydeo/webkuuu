<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    
    public function kelas(){
        return $this->belongsTo('app\Models\kelas','id_kelas','id'); 
    }

}
