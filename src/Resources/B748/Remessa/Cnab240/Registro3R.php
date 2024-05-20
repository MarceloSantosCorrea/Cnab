<?php

namespace Cnab\Resources\B748\Remessa\Cnab240;

use Cnab\Resources\Generico\Remessa\Cnab240\Generico3;

class Registro3R extends Generico3
{
    protected $meta = [
        'codigo_banco' => [ // 1.3R
            'tamanho' => 3,
            'default' => '748',
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
        // - ------------------ até aqui é igual para todos registro tipo 3
        'codigo_desconto2' => [ // 8.3R
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
        'codigo_desconto3' => [ // 11.3R
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
        'informacao_pagador' => [ //17.3R
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'mensagem_3' => [ // 18.3
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'mensagem_4' => [ //19.3R
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler4' => [ //21.3R
            'tamanho' => 20,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'data_limite_pagamento' => [
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true,
        ],
        'banco_debito' => [
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'agencia_debito' => [
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'agencia_dv_debito' => [
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'conta_debito' => [
            'tamanho' => 12,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'conta_dv_debito' => [
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'conta_dac_debito' => [
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'aviso_debito_automatico' => [
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler5' => [
            'tamanho' => 9,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
    ];
}