<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Organizations;

class AddOrganizationController extends Controller
{
    function add(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'inn' => 'required',
        ]);

        $Organization = new Organizations;
        $Organization->name = $request->input('name');
        $Organization->inn = $request->input('inn');
        $Organization->save();

        //dd($name, $inn);
        //DB::insert('insert into organizations (name, inn) values (?, ?)', [$name, $inn]);
    }

}
