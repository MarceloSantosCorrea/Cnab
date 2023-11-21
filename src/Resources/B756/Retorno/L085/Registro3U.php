<?php

namespace Cnab\Resources\B756\Retorno\L085;

use Cnab\AbstractRegistroRetorno;

class Registro3U extends AbstractRegistroRetorno
{
    protected $meta = [
        'codigo_banco' => ['tamanho' => 3, 'default' => 756, 'tipo' => 'int', 'required' => true],
        'codigo_lote' => ['tamanho' => 4, 'default' => 1, 'tipo' => 'int', 'required' => true],
        'tipo_registro' => ['tamanho' => 1, 'default' => '3', 'tipo' => 'int', 'required' => true],
        'numero_registro' => ['tamanho' => 5, 'default' => '0', 'tipo' => 'int', 'required' => true],
        'seguimento' => ['tamanho' => 1, 'default' => 'U', 'tipo' => 'alfa', 'required' => true],
        'filler1' => ['tamanho' => 1, 'default' => ' ', 'tipo' => 'int', 'required' => true],
        'codigo_movimento' => ['tamanho' => 2, 'default' => '', 'tipo' => 'int', 'required' => true],
        'vlr_juros_multa' => ['tamanho' => 13, 'default' => '', 'tipo' => 'decimal', 'precision' => 2, 'required' => true],
        'vlr_desconto' => ['tamanho' => 13, 'default' => '', 'tipo' => 'decimal', 'precision' => 2, 'required' => true],
        'vlr_abatimento' => ['tamanho' => 13, 'default' => '', 'tipo' => 'decimal', 'precision' => 2, 'required' => true],
        'vlr_iof' => ['tamanho' => 13, 'default' => '', 'tipo' => 'decimal', 'precision' => 2, 'required' => true],
        'vlr_pago' => ['tamanho' => 13, 'default' => '', 'tipo' => 'decimal', 'precision' => 2, 'required' => true],
        'vlr_liquido' => ['tamanho' => 13, 'default' => '', 'tipo' => 'decimal', 'precision' => 2, 'required' => true],
        'outras_despesas' => ['tamanho' => 13, 'default' => '', 'tipo' => 'decimal', 'precision' => 2, 'required' => true],
        'outros_creditos' => ['tamanho' => 13, 'default' => '', 'tipo' => 'decimal', 'precision' => 2, 'required' => true],
        'data_arquivo' => ['tamanho' => 8, 'default' => '', 'tipo' => 'date', 'required' => true],
        'data_credito' => ['tamanho' => 8, 'default' => '', 'tipo' => 'date', 'required' => true],
        'ocorrencia_pagador_codigo' => ['tamanho' => 4, 'default' => ' ', 'tipo' => 'alfa', 'required' => true],
        'ocorrencia_pagador_data' => ['tamanho' => 8, 'default' => '0', 'tipo' => 'int', 'required' => true],
        'ocorrencia_pagador_vlr' => ['tamanho' => 13, 'default' => '0', 'tipo' => 'decimal', 'precision' => 2, 'required' => true],
        'ocorrencia_pagador_compl' => ['tamanho' => 30, 'default' => ' ', 'tipo' => 'alfa', 'required' => true],
        'codigo_banco_correspondente' => ['tamanho' => 3, 'default' => '756', 'tipo' => 'int', 'required' => true],
        'numero_banco_correspondente' => ['tamanho' => 20, 'default' => '', 'tipo' => 'int', 'required' => true],
        'filler5' => ['tamanho' => 7, 'default' => ' ', 'tipo' => 'alfa', 'required' => true],
    ];
}


