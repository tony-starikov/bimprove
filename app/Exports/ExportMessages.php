<?php

namespace App\Exports;

use App\Models\Message;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportMessages implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Message::select('name', 'surname', 'email', 'phone', 'company', 'message')->get();
    }

    public function headings(): array
    {
        return ['name', 'surname', 'email', 'phone', 'company', 'message'];
    }
}
