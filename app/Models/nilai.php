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
     
    public function detailnilai(){
        return $this->hasMany(detailnilai::class); 
    }


}
