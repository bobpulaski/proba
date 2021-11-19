<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    public function confirmation($id)
    {
        return view('confirmation_form', ["id"=>$id]);
    }
}
