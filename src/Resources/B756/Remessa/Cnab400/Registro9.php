<?php

namespace Cnab\Resources\B756\Remessa\Cnab400;

use Cnab\Resources\Generico\Remessa\Cnab400\Generico9;

class Registro9 extends Generico9
{
    protected $meta = [
        'tipo_registro' => [
            'tamanho' => 1,
            'default' => '9',
            'tipo' => 'int',
            'required' => true
        ],
        'filler1' => [ //32.3P
            'tamanho' => 193,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
        'mensagem_1' => [ //32.3P
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
        'mensagem_2' => [ //32.3P
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
        'mensagem_3' => [ //32.3P
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
        'mensagem_4' => [ //32.3P
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
        'mensagem_5' => [ //32.3P
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
        'numero_registro' => [ //4.3R
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ],
    ];
}