<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustomersExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Customer::with('project')->get()->map(function ($c) {
            return [
                'DNI'        => $c->dni,
                'Nombre'     => $c->firstname,
                'Apellido'   => $c->lastname,
                'Nombres'    => $c->names,
                'Celular'    => $c->cellphone,
                'Mensaje'    => $c->message,
                'Proyecto'   => $c->project?->description ?? '—',
            ];
        });
    }

    public function headings(): array
    {
        return [
            'DNI',
            'Nombre',
            'Apellido',
            'Nombres',
            'Celular',
            'Mensaje',
            'Proyecto',
        ];
    }
}
