<?php

namespace App\Imports;

use App\Models\Precio;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PreciosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Precio([
            'name'   => $row[0],
            'unidad' => $row[1],
            'detalle'=> $row[2],
            'directo'=> $row[3],
        ]);
    }
}
