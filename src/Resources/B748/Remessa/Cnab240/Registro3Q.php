<?php

namespace Cnab\Resources\B748\Remessa\Cnab240;

use Cnab\Resources\Generico\Remessa\Cnab240\Generico3;

class Registro3Q extends Generico3
{
    protected $meta = [
        'codigo_banco' => [
            'tamanho' => 3,
            'default' => '748',
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
            'default' => '3',
            'tipo' => 'int',
            'required' => true,
        ],
        'numero_registro' => [
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'seguimento' => [
            'tamanho' => 1,
            'default' => 'Q',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler1' => [
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_movimento' => [
            'tamanho' => 2,
            'default' => '01', // entrada de titulo
            'tipo' => 'int',
            'required' => true,
        ],
        // - ------------------ até aqui é igual para todo registro tipo 3
        'tipo_inscricao' => [
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'numero_inscricao' => [
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'nome_pagador' => [
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'endereco_pagador' => [
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'bairro_pagador' => [
            'tamanho' => 15,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => false,
        ],
        'cep_pagador' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'cidade_pagador' => [
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'uf_pagador' => [
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'tipo_incricao_avalista' => [
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'numero_incricao_avalista' => [
            'tamanho' => 15,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'nome_avalista' => [
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler14' => [
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler15' => [
            'tamanho' => 28,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
    ];

    protected function set_bairro_pagador($value)
    {
        $this->data['bairro_pagador'] = null;
    }

    protected function set_cep_pagador($value)
    {
        $cep = $this->data['cep_pagador'];
        $cep_array = explode('-', $cep);
        $this->data['cep_pagador'] = $cep_array[0] . $cep_array[1];
    }
}