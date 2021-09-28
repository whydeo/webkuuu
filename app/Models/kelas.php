<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
   

    public function siswa(){
        return $this->hasMany(siswa::class); 
    }
    public function nilai(){
        return $this->hasMany(nilai::class); 
    }

}
