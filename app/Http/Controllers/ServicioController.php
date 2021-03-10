<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        $group = Group::first();
        $users = $group->users()->latest('id')->paginate(10);

        return view('servicios.index', compact('groups', 'users'));
    }

    public function show($id)
    {
        $groups = Group::all();
        $group = Group::find($id);
        $users = $group->users()->latest('id')->paginate(10);

        return view('servicios.show', compact('groups', 'users'));
    }
}
