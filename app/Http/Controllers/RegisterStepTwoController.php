<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class RegisterStepTwoController extends Controller
{
    public function index()
    {
        return view('auth.register-step-2');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'required|string|max:255',
            'address'      => 'required|string|max:80',
            'province'     => 'required|string|max:255',
            'city'         => 'required|string|max:255',
            'postal_code'  => 'required|numeric|digits:5|regex:/^[0-9]{5}$/',
            'phone_number' => 'required|numeric',
        ]);

        User::where('id', auth()->user()->id)->update([
            'first_name'   => $request->first_name,
            'last_name'    => $request->last_name,
            'address'      => $request->address,
            'province'     => $request->province,
            'city'         => $request->city,
            'postal_code'  => $request->postal_code,
            'phone_number' => $request->phone_number,
        ]);

        return to_route('home');
    }
}
