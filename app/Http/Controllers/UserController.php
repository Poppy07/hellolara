<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserForm(Request $request) {
        return view('user-form');
    }
}
