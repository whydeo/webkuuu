<?php

namespace App\Exports;

use App\Models\nilai;
use Maatwebsite\Excel\Concerns\FromCollection;

class nilaiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return nilai::all();
    }
}
