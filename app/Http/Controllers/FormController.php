<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Negeri;
use App\Models\Daerah;

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

    public function dropdown_example(Request $request) {

        $negeris = Negeri::all();

        return view('forms.dropdown_example', compact('negeris'));
    }

    public function search_daerah(Request $request) {
        // return 123;
        $negeri_id = $request->negeri_id;
        $daerahs = Daerah::where('negeri_id', $negeri_id)->get();

        // return $daerahs;

        return view('forms.search_daerah', compact('daerahs'));
    }
}
