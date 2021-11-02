<?php

namespace App\Imports;

use App\Models\siswa;
use App\models\kelas;   
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class siswaimport implements ToModel, WithHeadingRow
{
    
    public function model(array $row)
    {
        return new siswa([
             'absen'=> $row['absen'],
             'nama'=>$row['nama'],
             'jk'=>$row['jk'],
             'id_kelas' => kelas::where('kelas', $row['kelas'])->firstOrFail()->id,
        ]);
    }
}
