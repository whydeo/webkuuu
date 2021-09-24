<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    
    public function kelas(){
        return $this->belongsTo(kelas::class); 
    }
    // public function nilai(){
    //     return $this->hasOne(nilai::class); 
    // }

}
