<?php

namespace App\Exports;

use App\Librerias\InvProductos;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductosExport implements FromCollection
{
    public function collection()
    {
        return InvProductos::all();
    }
}
