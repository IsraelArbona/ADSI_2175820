<?php

namespace App\Imports;

use App\Pais;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PaisImport implements ToModel,WithHeadingRow{

    public function model(array $row)
    {
        return new Pais([
            'id' => $row['id'],
            'nombre' => $row['nombre'],
            'abrev'=> $row['abrev'],
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
} 