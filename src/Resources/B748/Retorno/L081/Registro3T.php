<?php

namespace Cnab\Resources\B748\Retorno\L081;

use Cnab\AbstractRegistroRetorno;

class Registro3T extends AbstractRegistroRetorno
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
            'default' => 1,
            'tipo' => 'int',
            'required' => true
        ],
        'tipo_registro' => ['tamanho' => 1, 'default' => '3', 'tipo' => 'int', 'required' => true],
        'numero_registro' => ['tamanho' => 5, 'default' => '0', 'tipo' => 'int', 'required' => true],
        'seguimento' => ['tamanho' => 1, 'default' => 'T', 'tipo' => 'alfa', 'required' => true],
        'boleto_dda' => ['tamanho' => 1, 'default' => ' ', 'tipo' => 'alfa', 'required' => true],
        'codigo_movimento' => ['tamanho' => 2, 'default' => '01', 'tipo' => 'int', 'required' => true],
        'filler1' => ['tamanho' => 1, 'default' => '0', 'tipo' => 'int', 'required' => true],
        'agencia' => ['tamanho' => 4, 'default' => '', 'tipo' => 'int', 'required' => true],
        'agencia_dv' => ['tamanho' => 1, 'default' => '', 'tipo' => 'int', 'required' => true],
        'conta' => ['tamanho' => 12, 'default' => '', 'tipo' => 'int', 'required' => true],
        'conta_dv' => ['tamanho' => 1, 'default' => '', 'tipo' => 'int', 'required' => true],
        'conta_dac' => ['tamanho' => 1, 'default' => ' ', 'tipo' => 'alfa', 'required' => true],
        'nosso_numero' => ['tamanho' => 20, 'default' => '', 'tipo' => 'int', 'required' => true],
        'carteira' => ['tamanho' => 1, 'default' => '', 'tipo' => 'int', 'required' => true],
        'seu_numero' => ['tamanho' => 15, 'default' => '', 'tipo' => 'alfa', 'required' => true],
        'data_vencimento' => ['tamanho' => 8, 'default' => '', 'tipo' => 'date', 'required' => true],
        'valor' => ['tamanho' => 13, 'default' => '', 'tipo' => 'decimal', 'precision' => 2, 'required' => true],
        'banco_cobrador' => ['tamanho' => 3, 'default' => '', 'tipo' => 'int', 'required' => true],
        'agencia_cobradora' => ['tamanho' => 5, 'default' => '', 'tipo' => 'int', 'required' => true],
        'agencia_cobradora_dv' => ['tamanho' => 1, 'default' => '', 'tipo' => 'int', 'required' => true],
        'seu_numero2' => ['tamanho' => 25, 'default' => '', 'tipo' => 'alfa', 'required' => true],
        'codigo_moeda' => ['tamanho' => 2, 'default' => '', 'tipo' => 'int', 'required' => true],
        'tipo_inscricao_pagador' => ['tamanho' => 1, 'default' => '', 'tipo' => 'int', 'required' => true],
        'numero_inscricao_pagador' => ['tamanho' => 15, 'default' => '0', 'tipo' => 'int', 'required' => true],
        'nome_pagador' => ['tamanho' => 40, 'default' => '', 'tipo' => 'alfa', 'required' => true],
        'numero_contrato' => ['tamanho' => 10, 'default' => '', 'tipo' => 'int', 'required' => true],
        'vlr_tarifas' => ['tamanho' => 13, 'default' => '0', 'tipo' => 'decimal', 'precision' => 2, 'required' => true],
        'codigo_ocorrencia' => ['tamanho' => 10, 'default' => ' ', 'tipo' => 'alfa', 'required' => true],
        'filler8' => ['tamanho' => 17, 'default' => ' ', 'tipo' => 'alfa', 'required' => true],
    ];
}


