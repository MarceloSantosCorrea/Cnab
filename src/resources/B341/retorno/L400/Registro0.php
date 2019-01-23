<?php

namespace Cnab\resources\B341\retorno\L400;

use Cnab\resources\generico\retorno\L400\Generico0;
use Cnab\AbstractRetorno;

class Registro0 extends Generico0
{
    public $trailler;

    protected $meta = [
        'tipo_registro'             => [
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true,
        ],
        'operacao'                  => [
            'tamanho'  => 1,
            'default'  => '2',
            'tipo'     => 'int',
            'required' => true,
        ],
        'literal_remessa'           => [
            'tamanho'  => 7,
            'default'  => 'RETORNO',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'tipo_servico'              => [
            'tamanho'  => 2,
            'default'  => '01',
            'tipo'     => 'int',
            'required' => true,
        ],
        'literal_servico'           => [
            'tamanho'  => 15,
            'default'  => 'COBRANCA',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'agencia'                   => [
            'tamanho'  => 4,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true,
        ],
        'filler1'                   => [
            'tamanho'  => 2,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true,
        ],
        'conta'                     => [
            'tamanho'  => 5,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true,
        ],
        'conta_dv'                  => [
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true,
        ],
        'filler2'                   => [
            'tamanho'  => 8,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'nome_empresa'              => [
            'tamanho'  => 30,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'codigo_banco'              => [
            'tamanho'  => 3,
            'default'  => '341',
            'tipo'     => 'int',
            'required' => true,
        ],
        'nome_banco'                => [
            'tamanho'  => 15,
            'default'  => 'BANCO ITAU SA',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'data_gravacao'             => [
            'tamanho'  => 6,
            'default'  => '',// nao informar a data na instanciaÃ§Ã£o - gerada dinamicamente
            'tipo'     => 'date',
            'required' => true,
        ],
        'filler3'                   => [
            'tamanho'  => 294,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true,
        ],
        'numero_sequencial_arquivo' => [
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'int',
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
            $class            = 'Cnab\resources\\' . AbstractRetorno::$banco . '\retorno\\' . AbstractRetorno::$layout . '\Registro1';
            $this->children[] = new $class(AbstractRetorno::$lines[AbstractRetorno::$linesCounter]);
        }
    }
}