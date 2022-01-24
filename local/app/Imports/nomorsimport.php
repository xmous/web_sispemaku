<?php

namespace App\Imports;

use App\nomors;
use Maatwebsite\Excel\Concerns\ToModel;

class nomorsimport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new nomors([
            'nama' => $row[1],
            'nomor' => $row[2], 
            'pesan' => $row[3],
        ]);
    }
}
