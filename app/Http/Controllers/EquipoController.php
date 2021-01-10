<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;


class EquipoController extends Controller
{
    public function index(){
        $equipos = Equipo::with(['grupo_equipo'])
            ->latest('id')
            ->paginate(6);

        return view('equipos.index', compact('equipos'));
    }
}
