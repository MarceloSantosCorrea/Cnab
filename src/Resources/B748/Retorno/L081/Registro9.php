<?php

namespace Cnab\Resources\B748\Retorno\L081;

use Cnab\AbstractRegistroRetorno;

class Registro9 extends AbstractRegistroRetorno
{
    protected $meta = [
        'codigo_banco' => [
            'tamanho' => 3,
            'default' => 748,
            'tipo' => 'int',
            'required' => true
        ],
        'codigo_lote' => [
            'tamanho' => 4,
            'default' => 9999,
            'tipo' => 'int',
            'required' => true
        ],
        'tipo_registro' => [
            'tamanho' => 1,
            'default' => 9,
            'tipo' => 'int',
            'required' => true
        ],
        'filler1' => [
            'tamanho' => 9,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
        'qtd_lotes' => [
            'tamanho' => 6,
            'default' => '1',
            'tipo' => 'int',
            'required' => true
        ],
        'qtd_registros' => [
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ],
        'qtd_contas' => [
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ],
        'filler3' => [
            'tamanho' => 205,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
    ];
}


