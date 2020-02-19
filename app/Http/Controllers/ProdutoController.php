<?php

namespace App\Http\Controllers;


class ProdutoController extends Controller
{
    public function lista()
    {
        //atribuo a variavel o json da url
        $base_uri = 'https://carbono.digital/wp-content/themes/carbono/files/json-test.json';

        //atribuo a variavel produtos o json convertido em um array
        $produtos = json_decode(file_get_contents($base_uri));

        //envio o objeto para a view com as informações
        return view('produto.lista')->with('produtos',$produtos);
    }
}
