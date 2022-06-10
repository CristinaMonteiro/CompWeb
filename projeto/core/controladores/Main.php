<?php

namespace core\controladores;

use core\classes\Store;

class Main{


    public function index(){

        $dados = [
            'titulo' => 'Este é o título',
            'clientes' => ['Andreia', 'Alex', 'Nuno', 'David', 'Ana', 'Maria']
        ];

        Store::Layout([
            'layouts/html_header',
            'pagina_inicial',
            'layouts/html_footer',
        ], $dados);

    }

    public function loja(){
        echo 'Loja!!!!';
    }

}