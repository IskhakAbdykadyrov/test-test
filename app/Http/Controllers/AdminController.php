<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $states = State::all();

        return view('admin/admin', compact('states'));
    }
}
