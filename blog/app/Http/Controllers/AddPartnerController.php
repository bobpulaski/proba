<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Partners;

class AddPartnerController extends Controller
{
    function add(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'inn' => 'required',
        ]);

        $Partner = new Partners;
        $Partner->name = $request->input('name');
        $Partner->inn = $request->input('inn');
        $Partner->save();
        //return redirect('partners')->with('success','Item created successfully!');
        return back()->with('success','Item created successfully!');

        //dd($name, $inn);
        //DB::insert('insert into organizations (name, inn) values (?, ?)', [$name, $inn]);
    }

}
