<?php

namespace Cnab\Resources\B748\Remessa\Cnab240;

use Cnab\Resources\Generico\Remessa\Cnab240\Generico1;

class Registro1 extends Generico1
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
            'default' => 1,
            'tipo' => 'int',
            'required' => true,
        ],
        'operacao' => [
            'tamanho' => 1,
            'default' => 'C',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'tipo_servico' => [
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true,
        ],
        'forma_lancamento' => [
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true,
        ],
        'versa_layout' => [
            'tamanho' => 3,
            'default' => '042',
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
        'codigo_convenio' => [
            'tamanho' => 20,
            'default' => '',
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
            'tipo' => 'alfa',
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
        'mensagem' => [
            'tamanho' => 40,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'logradouro' => [
            'tamanho' => 30,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'numero' => [
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'complemento' => [
            'tamanho' => 15,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'cidade' => [
            'tamanho' => 20,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'cep' => [
            'tamanho' => 8,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'estado' => [
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'exclusivo_banco' => [
            'tamanho' => 8,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_ocorrencia' => [
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
    ];
}