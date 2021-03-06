<?php

namespace App\Imports;

use App\Pais;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PaisImport implements ToModel,WithHeadingRow
{

    //use Importable;
    /**
     * @param array $row
     * 
     * @return \Illuminate\Database\Eloquent\Model\null
     */
    public function model(array $row)
    {
        
        if (!isset($row['id'])) {
            return null;
        }
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