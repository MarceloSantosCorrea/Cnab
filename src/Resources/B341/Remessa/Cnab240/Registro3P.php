<?php

namespace Cnab\Resources\B341\Remessa\Cnab240;

use Cnab\AbstractRemessa;
use Cnab\Resources\Generico\Remessa\Cnab240\Generico3;

class Registro3P extends Generico3
{
    protected $meta = [
        'codigo_banco' => [ // 1.3P
            'tamanho' => 3,
            'default' => '341',
            'tipo' => 'int',
            'required' => true,
        ],
        'codigo_lote' => [ // 2.3P
            'tamanho' => 4,
            'default' => 1,
            'tipo' => 'int',
            'required' => true,
        ],
        'tipo_registro' => [ // 3.3P
            'tamanho' => 1,
            'default' => '3',
            'tipo' => 'int',
            'required' => true,
        ],
        'numero_registro' => [ // 4.3P
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'seguimento' => [ // 5.3P
            'tamanho' => 1,
            'default' => 'P',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler1' => [ // 6.3P
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_movimento' => [ // 7.3P
            'tamanho' => 2,
            'default' => '01', // entrada de titulo
            'tipo' => 'int',
            'required' => true,
        ],
        // - ------------------ até aqui é igual para todo registro tipo 3
        'agencia' => [ // 8.3P
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler12' => [ // 9.3P
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'codigo_convenio' => [ //10.3P
            'tamanho' => 7,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'conta' => [ // 11.3P
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler3' => [ //12.3P
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'conta_dac' => [ //12.3P
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'carteira' => [ //13.3P
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'nosso_numero' => [ //13.3P
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'nosso_numero_dac' => [ //14.3P
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler32' => [ //15.3P
            'tamanho' => 8,
            'default' => ' ',  // combrança com registro
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler33' => [ //16.3P
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'seu_numero' => [ //19.3P   Campo de preenchimento obrigatório; preencher com Seu Número de controle do título
            'tamanho' => 10,
            'default' => ' ', // este espaço foi colocado para passa a validação para os seters do generico
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler34' => [ // 17.3
            'tamanho' => 5,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'data_vencimento' => [ //20.3
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true,
        ],
        'valor' => [ //21.3P
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'agencia_cobradora' => [ //22.3P
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'agencia_cobradora_dv' => [ //23.3P
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int', // originalmente no manual esta alfa mas foi mudado para int para funcionar
            'required' => true,
        ],
        'especie_titulo' => [ //24.3P
            'tamanho' => 2,
            'default' => '2',
            'tipo' => 'int',
            'required' => true,
        ],
        'aceite' => [ //25.3P
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'data_emissao' => [ //26.3P
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true,
        ],
        'filler35' => [ //27.3P
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'data_juros' => [ //28.3P
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true,
        ],
        'vlr_juros' => [ //29.3P
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'filler36' => [ //30.3P
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'data_desconto' => [ //31.3P
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true,
        ],
        'vlr_desconto' => [ //32.3P
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'vlr_IOF' => [ //33.3P
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'vlr_abatimento' => [ //34.3P
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'seu_numero2' => [ //35.3P
            'tamanho' => 25,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'protestar' => [ //36.3P
            'tamanho' => 1,
            'default' => '3',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'prazo_protesto' => [ //37.3P
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'baixar' => [ //38.3P
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true,
        ],
        'prazo_baixar' => [ //39.3P
            'tamanho' => 3,
            'default' => '90',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler5' => [ //41.3P
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler6' => [ //42.3P
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
    ];

    public function __construct($data = null)
    {
        if (empty($this->data)) parent::__construct($data);
        $this->inserirDetalhe($data);
    }

    public function inserirDetalhe($data)
    {
        $class = 'Cnab\Resources\\' . AbstractRemessa::$banco . '\Remessa\\' . AbstractRemessa::$layout . '\Registro3Q';
        $this->children[] = new $class($data);
        if (isset($data['codigo_desconto2']) ||
            isset($data['codigo_desconto3']) ||
            isset($data['vlr_multa']) ||
            isset($data['informacao_pagador'])
        ) {
            $class = 'Cnab\Resources\\' . AbstractRemessa::$banco . '\Remessa\\' . AbstractRemessa::$layout . '\Registro3R';
            $this->children[] = new $class($data);
        }
    }
}