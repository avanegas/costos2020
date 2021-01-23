<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        return view('admin.groups.index');
    }

    public function create()
    {
        return view('admin.groups.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Group $group)
    {
        return view('admin.groups.index', compact('group'));
    }

    public function edit(Group $group)
    {
        return view('admin.groups.edit', compact('group'));
    }

    public function update(Request $request, Group $group)
    {
        //
    }

    public function destroy(Group $group)
    {
        //
    }
}
