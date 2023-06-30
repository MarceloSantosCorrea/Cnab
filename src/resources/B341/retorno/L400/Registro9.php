<?php

namespace Cnab\resources\B341\retorno\L400;

use Cnab\resources\generico\retorno\L400\Generico9;

class Registro9 extends Generico9
{
    protected $meta = [
        'tipo_registro' => [
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_retorno' => [
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_servico' => [
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_banco' => [
            'tamanho' => 3,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'brancos' => [
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'qtd_titulos' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'valor_total' => [
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'aviso_bancario' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'brancos1' => [
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'qtd_titulos_vinculada' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'valor_total_vinculada' => [
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'aviso_bancario2' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'brancos3' => [
            'tamanho' => 90,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'qtd_titulos_direta' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'valor_total_direta' => [
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'aviso_bancario3' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'controle_arquivo' => [
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'qtd_detalhes' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'valor_total_informado' => [
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true,
        ],
        'brancos4' => [
            'tamanho' => 160,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'numero_sequencial_registro' => [
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
    ];
}