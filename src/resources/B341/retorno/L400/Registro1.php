<?php

namespace Cnab\resources\B341\retorno\L400;

use Cnab\resources\generico\retorno\L400\Generico1;
use Cnab\AbstractRetorno;

class Registro1 extends Generico1
{
    public $trailler;

    protected $meta = [
        'tipo_registro'            => [
            'tamanho'  => 1,
            'default'  => '1',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'tipo_inscricao_empresa'   => [
            'tamanho'  => 2,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'numero_inscricao_empresa' => [
            'tamanho'  => 14,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'agencia'                  => [
            'tamanho'  => 4,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler1'                  => [
            'tamanho'  => 2,
            'default'  => '0',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'conta'                    => [
            'tamanho'  => 5,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'conta_dv'                 => [
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler2'                  => [
            'tamanho'  => 8,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'seu_numero'               => [
            'tamanho'  => 25,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'nosso_numero'             => [
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler3'                  => [
            'tamanho'  => 12,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'carteira'                 => [// 13.3P
            'tamanho'  => 3,
            'default'  => '0',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler34'                 => [
            'tamanho'  => 8,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'nosso_numero_dv'          => [
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler4'                  => [
            'tamanho'  => 13,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'cod_carteira'             => [// 13.3P
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'codigo_movimento'         => [// codigo da ocorrencia no manual itau
            'tamanho'  => 2,
            'default'  => '01', // entrada de titulo
            'tipo'     => 'int',
            'required' => true,
        ],
        'data_ocorrencia'          => [// codigo da ocorrencia no manual itau
            'tamanho'  => 6,
            'default'  => '0', // entrada de titulo
            'tipo'     => 'date',
            'required' => true,
        ],
        'seu_numero2'              => [// 20.3
            'tamanho'  => 10,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler41'                 => [// 20.3
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler42'                 => [// 20.3
            'tamanho'  => 12,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'data_vencimento'          => [// 26.3P
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'date',
            'required' => true,
        ],
        'valor'                    => [// 21.3P
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true,
        ],
        'codigo_banco'             => [
            'tamanho'  => 3,
            'default'  => '341',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'agencia_cobradora'        => [// 22.3P
            'tamanho'  => 4,
            'default'  => '0',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'agencia_cobradora_dv'     => [// 22.3P
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'especie_titulo'           => [// 24.3P
            'tamanho'  => 2,
            'default'  => '2',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'vlr_tarifas'              => [// 25.3P
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true,
        ],
        'filler43'                 => [// 20.3
            'tamanho'  => 26,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'vlr_iof'                  => [// 11.3Q
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true,
        ],
        'vlr_abatimento'           => [// 10.3Q
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true,
        ],
        'vlr_desconto'             => [// 9.3Q
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true,
        ],
        'vlr_pago'                 => [// 12.3Q
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true,
        ],
        'vlr_juros_multa'          => [// 8.3Q
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true,
        ],
        'vlr_outros'               => [// 8.3Q
            'tamanho'   => 11,
            'default'   => '',
            'tipo'      => 'decimal',
            'precision' => 2,
            'required'  => true,
        ],
        'boleto_dda'               => [// 26.3P
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler44'                 => [// 24.3P
            'tamanho'  => 2,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'data_credito'             => [// 26.3P
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'date',
            'required' => true,
        ],
        'cod_instrucao_cancelada'  => [// 24.3P
            'tamanho'  => 4,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler45'                 => [// 24.3P
            'tamanho'  => 6,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler46'                 => [// 29.3P
            'tamanho'  => 13,
            'default'  => '0',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'nome_pagador'             => [// 10.3Q
            'tamanho'  => 30,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler47'                 => [
            'tamanho'  => 23,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'erros_mensagens'          => [// 11.3Q
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'filler5'                  => [// 12.3Q
            'tamanho'  => 7,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'cod_liquidacao'           => [// 13.3Q   
            'tamanho'  => 2,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'numero_registro'          => [// 4.3R
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'alfa',
            'required' => true,
        ],
    ];

    public function __construct($linhaTxt)
    {
        parent::__construct($linhaTxt);
        AbstractRetorno::$linesCounter++;
    }
}