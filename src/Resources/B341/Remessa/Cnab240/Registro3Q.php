<?php

namespace Cnab\Resources\B341\Remessa\Cnab240;

use Cnab\Resources\Generico\Remessa\Cnab240\Generico3;

class Registro3Q extends Generico3
{
    protected $meta = [
        'codigo_banco' => [ // 1.3Q
            'tamanho' => 3,
            'default' => '341',
            'tipo' => 'int',
            'required' => true,
        ],
        'codigo_lote' => [ // 2.3Q
            'tamanho' => 4,
            'default' => 1,
            'tipo' => 'int',
            'required' => true,
        ],
        'tipo_registro' => [ // 3.3Q
            'tamanho' => 1,
            'default' => '3',
            'tipo' => 'int',
            'required' => true,
        ],
        'numero_registro' => [ // 4.3Q
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'seguimento' => [ // 5.3Q
            'tamanho' => 1,
            'default' => 'Q',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler1' => [ // 6.3Q
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_movimento' => [ // 7.3Q
            'tamanho' => 2,
            'default' => '01', // entrada de titulo
            'tipo' => 'int',
            'required' => true,
        ],
        // - ------------------ até aqui é igual para todo registro tipo 3
        'tipo_inscricao' => [ // 8.3Q
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'numero_inscricao' => [ // 9.3Q
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'nome_pagador' => [ //10.3Q
            'tamanho' => 30,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler12' => [ // 6.3Q
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'endereco_pagador' => [ // 11.3Q
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'bairro_pagador' => [ //12.3Q
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'cep_pagador' => [ //13.3Q
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'cep_sufixo' => [ //14.3Q
            'tamanho' => 3,
            'default' => ' ',
            'tipo' => 'int',
            'required' => true,
        ],
        'cidade_pagador' => [ //15.3Q
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'uf_pagador' => [ //16.3Q
            'tamanho' => 2,
            'default' => '',  // combrança com registro
            'tipo' => 'alfa',
            'required' => true,
        ],
        'tipo_incricao_avalista' => [ //17.3Q
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'numero_incricao_avalista' => [ // 18.3
            'tamanho' => 15,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'nome_avalista' => [ //18.3Q
            'tamanho' => 30,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler13' => [ // 6.3Q
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler14' => [ //18.3Q
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler15' => [ //19.3Q   Campo de preenchimento obrigatório; preencher com Seu Número de controle do título
            'tamanho' => 28,
            'default' => ' ', // este espaço foi colocado para passa a validação para os seters do generico
            'tipo' => 'alfa',
            'required' => true,
        ],
    ];
}