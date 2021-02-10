<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getNew()
    {
        return view('admin.newClient');
    }

    public function getEdit()
    {
        return view('admin.editClient');
    }
}
