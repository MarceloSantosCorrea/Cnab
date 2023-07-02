<?php

namespace Cnab\Resources\B237\Remessa\Cnab400;

use Cnab\Resources\Generico\Remessa\Cnab400\Generico1;

class Registro9 extends Generico1
{
    protected $meta = [
        'tipo_registro' => [
            'tamanho' => 1,
            'default' => '9',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler1' => [ //32.3P
            'tamanho' => 393,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'numero_registro' => [ //4.3R
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
    ];
}