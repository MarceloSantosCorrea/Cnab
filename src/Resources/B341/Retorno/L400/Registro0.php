<?php

namespace Cnab\Resources\B341\Retorno\L400;

use Cnab\AbstractRetorno;
use Cnab\Resources\Generico\Retorno\L400\Generico0;

class Registro0 extends Generico0
{
    public $trailler;

    protected $meta = [
        'tipo_registro' => [
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'operacao' => [
            'tamanho' => 1,
            'default' => '2',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'literal_remessa' => [
            'tamanho' => 7,
            'default' => 'RETORNO',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'tipo_servico' => [
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'literal_servico' => [
            'tamanho' => 15,
            'default' => 'COBRANCA',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'agencia' => [
            'tamanho' => 4,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler1' => [
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'conta' => [
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'conta_dv' => [
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler2' => [
            'tamanho' => 8,
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
            'default' => '341',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'nome_banco' => [
            'tamanho' => 15,
            'default' => 'BANCO ITAU SA',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'data_gravacao' => [
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true,
        ],
        'densidade' => [
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'unidade_densidade' => [
            'tamanho' => 3,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'numero_sequencial_arquivo' => [
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'data_credito' => [
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true,
        ],
        'filler3' => [
            'tamanho' => 275,
            'default' => ' ',
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

    public function __construct($linhaTxt)
    {
        parent::__construct($linhaTxt);
        AbstractRetorno::$linesCounter++;
        $this->inserirDetalhe();
    }

    public function inserirDetalhe()
    {
        while (AbstractRetorno::$linesCounter < (count(AbstractRetorno::$lines) - 2)) {
            $class = 'Cnab\Resources\\' . AbstractRetorno::$banco . '\Retorno\\' . AbstractRetorno::$layout . '\Registro1';
            $this->children[] = new $class(AbstractRetorno::$lines[AbstractRetorno::$linesCounter]);
        }
    }
}