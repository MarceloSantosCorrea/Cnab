<?php

namespace Cnab\Resources\B756\Remessa\Cnab240;

use Cnab\Resources\Generico\Remessa\Cnab240\Generico5;

class Registro5 extends Generico5
{
    protected $meta = [
        'codigo_banco' => [
            'tamanho' => 3,
            'default' => '756',
            'tipo' => 'int',
            'required' => true,
        ],
        'codigo_lote' => [
            'tamanho' => 4,
            'default' => 1,
            'tipo' => 'int',
            'required' => true,
        ],
        'tipo_registro' => [
            'tamanho' => 1,
            'default' => '5',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler1' => [
            'tamanho' => 9,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'qtd_registros' => [
            'tamanho' => 6,
            'default' => ' ',
            'tipo' => 'int',
            'required' => true,
        ],
        'qtd_titulos_simples' => [
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'vrl_titulos_simples' => [
            'tamanho' => 15,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => '2',
            'required' => true,
        ],
        'qtd_titulos_vinculada' => [
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'vrl_titulos_vinculada' => [
            'tamanho' => 15,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => '2',
            'required' => true,
        ],
        'qtd_titulos_caucionada' => [
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'vlr_titulos_caucionada' => [
            'tamanho' => 15,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => '2',
            'required' => true,
        ],
        'qtd_titulos_descontada' => [
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'vlr_titulos_descontada' => [
            'tamanho' => 15,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => '2',
            'required' => true,
        ],
        'filler2' => [
            'tamanho' => 8,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler3' => [
            'tamanho' => 117,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
    ];
}