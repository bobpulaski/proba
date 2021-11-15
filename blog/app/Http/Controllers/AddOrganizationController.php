<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddOrganizationController extends Controller
{
    function add(Request $request){

        $this->validate($request, [
            'name' => 'required|max:255',
            'inn' => 'required',
        ]);

        $name = $request->input('name');
        $inn = $request->input('inn');
        dd($name);
    }

}
