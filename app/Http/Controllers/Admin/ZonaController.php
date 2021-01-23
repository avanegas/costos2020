<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Zona;

class ZonaController extends Controller
{
    public function index()
    {
        return view('admin.zonas.index');
    }

    public function create()
    {
        return view('admin.zonas.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Zona $zona)
    {
        return view('admin.zonas.show', compact('zona'));
    }

    public function edit(Zona $zona)
    {
        return view('admin.zonas.edit', compact('zona'));
    }

    public function update(Request $request, Zona $zona)
    {
        //
    }

    public function destroy(Zona $zona)
    {
        //
    }
}
