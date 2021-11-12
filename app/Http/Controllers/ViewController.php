<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showPraktikum2()
    {
        return view('prak2web');
    }
    function showFormets()
    {
        return view('formets');
    }
    function result(Request $request)
    {
        return view('resultftoc');
    }
    function showForm()
    {
        return view('ftoc');
    }
    function showMe()
    {

    }
}
