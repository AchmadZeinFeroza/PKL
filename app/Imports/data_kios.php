<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\m_kios;

class data_kios implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $row){
            m_kios::create([
                'kecamatan' => $row[0],
                'nama_kios' => $row[1],
                'pemilik' => $row[2],
                'alamat' => $row[3],
                'desa' => $row[4],
                'no_telpon' => $row[6]
                
            ]);
        }
    }
}
