<?php

namespace App\Http\Controllers;


class ProdutoController extends Controller
{
    public function lista()
    {

        $base_uri = 'https://carbono.digital/wp-content/themes/carbono/files/json-test.json';

        $produtos = json_decode(file_get_contents($base_uri));
        return view('produto.lista')->with('produtos',$produtos);
    }
}
