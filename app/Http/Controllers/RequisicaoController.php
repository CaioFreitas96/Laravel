<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RequisicaoController extends Controller{

    public function phrase(string $phrase, string $author){

        date_default_timezone_set('America/Sao_Paulo');

        $data = date('d/m/y');
        $hora = date('H:i:s');

        return view('requisicao', 
        [
            'phrase' => $phrase, 
            'author' => $author, 
            'data' => $data, 
            'hora' => $hora
        ]);
        
    }
}
