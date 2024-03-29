<?php

namespace Cnab\Resources\B104\Retorno\L030;

use Cnab\AbstractRetorno;
use Cnab\Resources\Generico\Retorno\L030\Generico0;

class Registro0 extends Generico0
{
    protected $meta = [
        'codigo_banco' => [
            'tamanho' => 3,
            'default' => '104',
            'tipo' => 'int',
            'required' => true,
        ],
        'codigo_lote' => [
            'tamanho' => 4,
            'default' => '0000',
            'tipo' => 'int',
            'required' => true,
        ],
        'tipo_registro' => [
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler1' => [
            'tamanho' => 9,
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
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'uso_caixa1' => [
            'tamanho' => 20,
            'default' => '0',
            'tipo' => 'int',
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
        'codigo_beneficiario' => [
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'uso_caixa2' => [
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'nome_empresa' => [
            'tamanho' => 30,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'nome_banco' => [
            'tamanho' => 30,
            'default' => 'CAIXA ECONOMICA FEDERAL',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler3' => [
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'codigo_remessa' => [
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true,
        ],
        'data_geracao' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'date',
            'required' => true,
        ],
        'hora_geracao' => [
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'numero_sequencial_arquivo' => [
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'int',
            'required' => true,
        ],
        'versao_layout' => [
            'tamanho' => 3,
            'default' => '050',
            'tipo' => 'int',
            'required' => true,
        ],
        'densidade_gravacao' => [
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true,
        ],
        'filler4' => [
            'tamanho' => 20,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'situacao_arquivo' => [
            'tamanho' => 20,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'versao_aplicativo' => [
            'tamanho' => 4,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
        'filler5' => [
            'tamanho' => 25,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true,
        ],
    ];

    public function __construct($linhaTxt)
    {
        parent::__construct($linhaTxt);
        $this->inserirDetalhe(AbstractRetorno::$lines[AbstractRetorno::$linesCounter]);
    }

    /*
    * método inserirDetalhe()
    * Recebe os parametros
    * @$data = um array contendo os dados nessesarios para o arquvio
    */
    public function inserirDetalhe($linhaTxt)
    {
        $class = 'Cnab\Resources\\' . self::$banco . '\Retorno\\' . self::$layout . '\Registro1';
        self::addChild(new $class($linhaTxt));
        AbstractRetorno::$linesCounter++;
    }
}