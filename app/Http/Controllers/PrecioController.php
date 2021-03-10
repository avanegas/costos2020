<?php

namespace App\Http\Controllers;

use App\Models\Precio;
use Illuminate\Http\Request;

class PrecioController extends Controller
{
    public function index()
    {
        return view('precios.index');
    }

    public function show(Precio $precio)
    {
        return view('precios.show', compact('precio'));
    }  
}
