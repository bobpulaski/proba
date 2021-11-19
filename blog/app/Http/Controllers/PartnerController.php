<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Partners;

class PartnerController extends Controller
{
    //Partners list
    public function partner_list()
    {
        //return('k');

        //foreach (Partners::where('name', 'ООО Ромашка')->get()->sortBy('inn') as $Partner) {
        $Partner = Partners::simplePaginate(10);
        //echo $Partner->name;
        //echo $Partner->inn;
        //return view('partners', ['data' => $Partner->sortBy('id')]);
        return view('partners', compact('Partner'));

    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'org' => 'required|max:255',
            'inn' => 'required',
        ]);

        $Partner = new Partners;
        $Partner->name = $request->input('org');
        $Partner->inn = $request->input('inn');
        $Partner->save();
        //return redirect('partners')->with('success','Item created successfully!');
        return back()->with('success', 'Контрагент добавлен.');

        //dd($name, $inn);
        //DB::insert('insert into organizations (name, inn) values (?, ?)', [$name, $inn]);
    }

    function delete($id)
    {
        Partners::find($id)->delete();
        return redirect('partners')->with('success', 'Контрагент удален.');


    }
}
