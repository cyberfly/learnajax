<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submitForm(Request $request) {

        $request->validate([
            'nama' => 'required|min:3',
            'emel' => 'required|email',
            'umur' => 'required|numeric',
            'username' => 'required|alpha_num',
        ]);

        return $request->all();
    }
}
