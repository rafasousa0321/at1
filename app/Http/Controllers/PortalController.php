<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public function index (){
        return view ('entrada');
    }

    public function listarEquipas () {
        $equipas = [
            'FCPorto',
            'FCBarcelona',
            'ManCity',
            'ManUnited',
            'BorussiaDortmund'
        ];
        return view ('equipas', ['equipas' => $equipas]);
    }
}
