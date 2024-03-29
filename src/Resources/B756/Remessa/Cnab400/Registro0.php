<?php

namespace Cnab\Resources\B756\Remessa\Cnab400;

use Cnab\Resources\Generico\Remessa\Cnab400\Generico0;

class Registro0 extends Generico0
{
    protected $meta = [
        'tipo_registro' => [
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'operacao' => [
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true,
        ],
        'literal_remessa' => [
            'tamanho' => 7,
            'default' => 'remessa',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'tipo_servico' => [
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true,
        ],
        'literal_servico' => [
            'tamanho' => 8,
            'default' => 'COBRANÇA',
            'tipo' => 'alfa2',
            'required' => true,
        ],
        'filler0' => [
            'tamanho' => 7,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'agencia' => [
            'tamanho' => 4,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'agencia_dv' => [
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_beneficiario' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'codigo_beneficiario_dv' => [
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'numero_convenio' => [
            'tamanho' => 6,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'nome_empresa' => [
            'tamanho' => 30,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_banco' => [
            'tamanho' => 3,
            'default' => '756',
            'tipo' => 'int',
            'required' => true,
        ],
        'nome_banco' => [
            'tamanho' => 15,
            'default' => 'BANCOOBCED',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'data_gravacao' => [
            'tamanho' => 6,
            'default' => '', // nao informar a data na instanciação - gerada dinamicamente
            'tipo' => 'date',
            'required' => true,
        ],
        'numero_sequencial_arquivo' => [
            'tamanho' => 7,
            'default' => '1',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler3' => [
            'tamanho' => 287,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'numero_sequencial' => [
            'tamanho' => 6,
            'default' => '1',
            'tipo' => 'int',
            'required' => true,
        ],
    ];
}
