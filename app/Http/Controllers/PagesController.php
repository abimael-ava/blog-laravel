<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $id = request('id');
        $costo = request('cost');
        /*$params = array(
            'id' => $id,
            'cost' => $costo
        );*/
        //return 'Services with id = '. $id. ' and cost = ' . $costo;
        return view('pages.services',[
            'id' => $id,
            'cost' => $costo
        ]);
    }
}
