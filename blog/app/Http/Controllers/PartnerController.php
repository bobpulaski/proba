<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Partners;

class PartnerController extends Controller
{
    //Partners list
    public function partner_list(){
        //return('k');

        //foreach (Partners::where('name', 'ООО Ромашка')->get()->sortBy('inn') as $Partner) {
        $Partner = new Partners;
            //echo $Partner->name;
            //echo $Partner->inn;
            return view('partners', ['data' => $Partner->all()->sortBy('name')]);
        }


        //$partners = DB::table('Partners')->get();
        //foreach($partners as $key => $partner);
        //dd($partner->all()); //Выводит все записи из таблицы
        //return compact('partner');


}