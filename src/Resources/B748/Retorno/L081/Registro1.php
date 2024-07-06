<?php

namespace Cnab\Resources\B748\Retorno\L081;

use Cnab\AbstractRegistroRetorno;

class Registro1 extends AbstractRegistroRetorno
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
        'tipo_registro' => [
            'tamanho' => 1,
            'default' => 1,
            'tipo' => 'int',
            'required' => true
        ],
        'operacao' => [
            'tamanho' => 1,
            'default' => 'T',
            'tipo' => 'alfa',
            'required' => true
        ],
        'tipo_servico' => [
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true
        ],
        'filler1' => [
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'int',
            'required' => true
        ],
        'versao_layout' => [
            'tamanho' => 3,
            'default' => '044',
            'tipo' => 'alfa',
            'required' => true
        ],
        'filler2' => [
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ],
        'tipo_inscricao' => [
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ],
        'numero_inscricao' => [
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ],
        'codigo_beneficiario' => [
            'tamanho' => 20,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
        'agencia' => [
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ],
        'agencia_dv' => [
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ],
        'conta' => [
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ],
        'conta_dv' => [
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ],
        'conta_dac' => [
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ],
        'nome_empresa' => [
            'tamanho' => 30,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ],
        'mensagem_fixa1' => [
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
        'mensagem_fixa2' => [
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
        'numero_retorno' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ],
        'data_gravacao' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true
        ],
        'data_credito' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true
        ],
        'filler4' => [
            'tamanho' => 33,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ],
    ];
}


