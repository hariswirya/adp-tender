<?php

namespace App\Exports;

use App\Models\InformasiTender;
use Maatwebsite\Excel\Concerns\FromCollection;

class InformasiTenderExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return InformasiTender::all();
    }

    public function export() 
    {
    return Excel::download(new InformasiTenderExport, 'laporan.xlsx');
    }
}
