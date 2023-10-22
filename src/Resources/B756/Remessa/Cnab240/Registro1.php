<?php

namespace Cnab\Resources\B756\Remessa\Cnab240;

use Cnab\Resources\Generico\Remessa\Cnab240\Generico1;

class Registro1 extends Generico1
{
    protected $meta = [
        'codigo_banco' => [
            'tamanho' => 3,
            'default' => '756',
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
            'default' => 1,
            'tipo' => 'int',
            'required' => true,
        ],
        'operacao' => [
            'tamanho' => 1,
            'default' => 'R',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'tipo_servico' => [
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler1' => [
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'versa_layout' => [
            'tamanho' => 3,
            'default' => '040',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler2' => [
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
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
        'filler22' => [
            'tamanho' => 20,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'agencia' => [
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'agencia_dv' => [
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
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
        'nome_empresa' => [
            'tamanho' => 30,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler26' => [
            'tamanho' => 80,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'numero_remessa' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'data_gravacao' => [
            'tamanho' => 8,
            'default' => '', // nao informar a data na instanciação - gerada dinamicamente
            'tipo' => 'date',
            'required' => true,
        ],
        'data_credito' => [
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler4' => [
            'tamanho' => 33,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
    ];
}