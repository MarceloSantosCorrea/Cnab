<?php

namespace Cnab\Resources\B748\Remessa\Cnab240;

use Cnab\AbstractRemessa;
use Cnab\Resources\Generico\Remessa\Cnab240\Generico3;

class Registro3P extends Generico3
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
            'default' => 'P',
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
            'default' => '01',
            'tipo' => 'int',
            'required' => true,
        ],
        // - ------------------ até aqui é igual para todo registro tipo 3
        'agencia' => [
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'agencia_dv' => [
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'conta' => [
            'tamanho' => 12,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'conta_dv' => [
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'conta_dac' => [
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'nosso_numero' => [
            'tamanho' => 20,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'carteira' => [ // Posição 58-58 Num
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true,
        ],
        'cadastramento' => [
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true,
        ],
        'documento' => [
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true,
        ],
        'emissão_boleto' => [
            'tamanho' => 1,
            'default' => '2',
            'tipo' => 'int',
            'required' => true,
        ],
        'distribuicao_boleto' => [
            'tamanho' => 1,
            'default' => '2',
            'tipo' => 'int',
            'required' => true,
        ],
        'seu_numero' => [
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'data_vencimento' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true,
        ],
        'valor' => [
            'tamanho' => 13,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'agencia_cobradora' => [
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'agencia_cobradora_dv' => [
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'especie_titulo' => [
            'tamanho' => 2,
            'default' => 3,
            'tipo' => 'int',
            'required' => true,
        ],
        'aceite' => [
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'data_emissao' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true,
        ],
        'cod_juros' => [
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'data_juros' => [
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true,
        ],
        'vlr_juros' => [
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'cod_desconto' => [
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'data_desconto' => [
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'date',
            'required' => true,
        ],
        'vlr_desconto' => [
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'vlr_IOF' => [
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'vlr_abatimento' => [
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'seu_numero2' => [
            'tamanho' => 25,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'protestar' => [
            'tamanho' => 1,
            'default' => '3',
            'tipo' => 'int',
            'required' => true,
        ],
        'prazo_protesto' => [
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'baixar' => [
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true,
        ],
        'prazo_baixar' => [
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'cod_moeda' => [
            'tamanho' => 2,
            'default' => '09',
            'tipo' => 'int',
            'required' => true,
        ],
        'num_contrato' => [
            'tamanho' => 10,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler6' => [
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

    public function inserirDetalhe($data): void
    {
        $class = 'Cnab\Resources\\' . AbstractRemessa::$banco . '\Remessa\\' . AbstractRemessa::$layout . '\Registro3Q';
        $this->children[] = new $class($data);
        if (isset($data['codigo_desconto2']) || isset($data['codigo_desconto3']) || isset($data['vlr_multa']) || isset($data['informacao_pagador'])) {
            $class = 'Cnab\Resources\\' . AbstractRemessa::$banco . '\Remessa\\' . AbstractRemessa::$layout . '\Registro3R';
            $this->children[] = new $class($data);
        }
    }
}
