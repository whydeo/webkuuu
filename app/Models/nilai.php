<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    use HasFactory;
     
    public function siswa(){
        return $this->belongsTo(siswa::class); 
    }
     
    public function kelas(){
        return $this->belongsTo(kelas::class); 
    }
    public function guru(){
        return $this->belongsTo(guru::class); 
    }

}
