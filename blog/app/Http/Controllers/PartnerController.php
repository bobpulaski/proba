<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use Illuminate\Http\Request;


class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Partner = Partners::simplePaginate(30);
        return view('partners.index', compact('Partner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'org' => 'required|max:255',
            'inn' => 'required',
        ]);

        $Partner = new Partners;
        $Partner->name = $request->input('org');
        $Partner->inn = $request->input('inn');
        $Partner->save();
        return redirect('partners')->with('success', 'Контрагент ' . $Partner->name. ' добавлен.');
        //return back()->with('success', 'Контрагент добавлен.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currentRecord = Partners::where ('id', $id)->get();
        return view ('partners.edit', compact ('currentRecord'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Partner = Partners::find ($id);
        if ($request->isMethod ('put'))
        {
            $Partner->name = $request->input('name');
            $Partner->inn = $request->input('inn');
            $Partner->save();
        }
        return redirect ('partners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Partners::find($id)->delete();
        return redirect('partners')->with('success', 'Контрагент ' . $Partner->name. ' удален.');
    }
}
