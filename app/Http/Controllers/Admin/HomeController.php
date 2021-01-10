<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::latest('id')->paginate(10);

    return view('admin.index', compact('users'));
    }
}
