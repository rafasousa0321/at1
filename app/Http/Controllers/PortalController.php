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

    public function listarEquipa(Request $request){
        $teams = [
            'FCPorto',
            'FCBarcelona',
            'ManCity',
            'ManUnited',
            'BorussiaDortmund'
        ];
        $contar=count($teams);
        if($request -> chave >=0 && $request -> chave <$contar){
            $equipa = $teams[$request->chave];
        }
        else{
            $equipa = 'Erro';
        }
        return view('equipas',['equipa'=>$equipa]);
    }

    public function mostrarForm(){
        return view('contacto');
    }

    public function processarForm(Request $request){
        $nome = $request->nome;
        $morada = $request->morada;
        $automovel = $request->automovel;
        return view('enviado', [
            'nome'=>$nome,
            'morada'=>$morada,
            'automovel'=>$automovel
        ]);
    }
}
