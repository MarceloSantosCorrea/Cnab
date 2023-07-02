<?php

namespace Cnab\Resources\B341\Remessa\Cnab240;

use Cnab\Resources\Generico\Remessa\Cnab240\Generico3;

class Registro3R extends Generico3
{
    protected $meta = [
        'codigo_banco' => [ // 1.3R
            'tamanho' => 3,
            'default' => '341',
            'tipo' => 'int',
            'required' => true,
        ],
        'codigo_lote' => [ // 2.3R
            'tamanho' => 4,
            'default' => 1,
            'tipo' => 'int',
            'required' => true,
        ],
        'tipo_registro' => [ // 3.3R
            'tamanho' => 1,
            'default' => '3',
            'tipo' => 'int',
            'required' => true,
        ],
        'numero_registro' => [ // 4.3R
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'seguimento' => [ // 5.3R
            'tamanho' => 1,
            'default' => 'R',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler1' => [ // 6.3R
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_movimento' => [ // 7.3R
            'tamanho' => 2,
            'default' => '01', // entrada de titulo
            'tipo' => 'int',
            'required' => true,
        ],
        // - ------------------ até aqui é igual para todo registro tipo 3
        'filler12' => [ // 8.3R
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'data_desconto2' => [ // 9.3R
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true,
        ],
        'vlr_desconto2' => [ //10.3R
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'filler14' => [ // 8.3R
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'data_desconto3' => [ //12.3R
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true,
        ],
        'vlr_desconto3' => [ //13.3R
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'codigo_multa' => [ //14.3R
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'data_multa' => [ //15.3R
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true,
        ],
        'vlr_multa' => [ //16.3R
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'filler15' => [ //17.3R
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'informacao_pagador' => [ // 18.3
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler16' => [ //19.3R
            'tamanho' => 60,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'cod_ocor_pagador' => [ //20.3R
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler4' => [ //21.3R
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler5' => [ //21.3R
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler6' => [ //21.3R
            'tamanho' => 12,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler7' => [ //21.3R
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler8' => [ //21.3R
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler9' => [ //21.3R
            'tamanho' => 9,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
    ];
}