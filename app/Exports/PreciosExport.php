<?php

namespace App\Exports;

use App\Models\Precio;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PreciosExport implements FromView
{

    public function view(): View
    {
        return view('exports.precios', [
            'precios' => Precio::all()
        ]);
    }
}