<?php

namespace Cnab\Resources\B756\Retorno\L400;

use Cnab\Resources\Generico\Retorno\L400\Generico9;

class Registro9 extends Generico9
{
    protected $meta = [
        'tipo_registro' => [
            'tamanho' => 1,
            'default' => '9',
            'tipo' => 'int',
            'required' => true
        ],
        'tipo_servico' => [
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ],
        'codigo_banco' => [      //01.5
            'tamanho' => 3,
            'default' => '756',
            'tipo' => 'int',
            'required' => true
        ],
    ];
}