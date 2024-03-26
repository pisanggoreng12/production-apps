<?php

namespace App\Exports;

use App\Models\Preparation;
use Maatwebsite\Excel\Concerns\FromCollection;

class PreparationExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Preparation::all();
    }
}
