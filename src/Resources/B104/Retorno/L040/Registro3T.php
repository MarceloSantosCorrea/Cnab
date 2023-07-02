<?php

namespace Cnab\Resources\B104\Retorno\L040;

use Cnab\Resources\generico\Retorno\L040\Generico3;

class Registro3T extends Generico3
{
    protected $meta = [
        'codigo_banco' => [ //1.3T
            'tamanho' => 3,
            'default' => '104',
            'tipo' => 'int',
            'required' => true,
        ],
        'codigo_lote' => [ //2.3T
            'tamanho' => 4,
            'default' => 1,
            'tipo' => 'int',
            'required' => true,
        ],
        'tipo_registro' => [ //3.3T
            'tamanho' => 1,
            'default' => '3',
            'tipo' => 'int',
            'required' => true,
        ],
        'numero_registro' => [ //4.3T
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'seguimento' => [ //5.3T
            'tamanho' => 1,
            'default' => 'T',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler1' => [ //6.3T
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_movimento' => [ //7.3T
            'tamanho' => 2,
            'default' => '01', //entrada de titulo
            'tipo' => 'int',
            'required' => true,
        ],
        // - ------------------ até aqui é igual para todo registro tipo 3
        'agencia' => [ //8.3T
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'agencia_dv' => [ //9.3T
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_convenio' => [ //10.3T
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler2' => [ // 11.3T
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'num_banco_pagadores' => [ //11.3T
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler3' => [ //12.3T
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler4' => [ //12.3T
            'tamanho' => 3,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'carteira' => [ //13.3T
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'nosso_numero' => [ //13.3T
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'dv_nosso_numero' => [ //13.3T
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'codigo_carteira' => [ //14.3T
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true,
        ],
        'seu_numero' => [ //15.3T
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler5' => [ //15.3T
            'tamanho' => 4,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'data_vencimento' => [ //16.3
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true,
        ],
        'vlr_nominal' => [ //18.3T
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'cod_banco_receb' => [ //19.3T
            'tamanho' => 3,
            'default' => ' ', // este espaço foi colocado para passa a validação para os seters do generico
            'tipo' => 'alfa',
            'required' => true,
        ],
        'agencia_recebedora' => [ //19.3T
            'tamanho' => 5,
            'default' => ' ',
            'tipo' => 'int',
            'required' => true,
        ],
        'dv_agencia_receb' => [ //20.3
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'seu_numero2' => [ //21.3T
            'tamanho' => 25,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_moeda' => [ //22.3T
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'tipo_inscricao' => [ //23.3T
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int', // originalmente no manual esta alfa mas foi mudado para int para funcionar
            'required' => true,
        ],
        'numero_inscricao' => [ //24.3T
            'tamanho' => 15,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'nome_pagador' => [ //25.3T
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler6' => [ //26.3T
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'vlr_tarifas' => [ //27.3T
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'codigo_ocorrencia' => [ //28.3T
            'tamanho' => 10,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler7' => [ //29.3T
            'tamanho' => 17,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true,
        ],
    ];
}