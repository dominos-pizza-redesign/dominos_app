<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function edit()
    {
        return view('profile.edit');
    }

    public function edit_password()
    {
        return view('profile.edit-password');
    }

    public function destroy($id)
    {
        //
    }
}
