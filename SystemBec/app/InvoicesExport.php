<?php


namespace App\Exports;

class InvoicesExport implements FromCollection
{
    public function collection()
    {
        return Invoice::all();
    }
}