<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    use HasFactory;
     
    public static function siswa($query, $searchTerm, $id_kelas)
    {
        return $query->where('id_kelas', 'like', '%' .$searchTerm. '%')
            ->join('cities', 'jobs.city_id', '=', 'cities.id')
            ->where('cities.name', 'like', '%' . $cityName . '%');
    }
}
