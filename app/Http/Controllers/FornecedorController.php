<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedor = [
            0=>['nome' => 'Fornecedor 1', 
                'status' => 'N', 
                'cnpj' => '38.312.993/0001-00',
                'ddd' => '11',
                'telefone' => '99999-9999'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => '38.313.000/0001-00',
                'ddd' => '85',
                'telefone' => '99999-9999'
            ],
            2 => [
                'nome' => 'Fornecedor 2',
                'status' => 'N',
                'cnpj' => '65.312.223/0001-00',
                'ddd' => '32',
                'telefone' => '99999-9999'
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedor'));
    }
}
