<?php

namespace Cnab\Resources\B756\Retorno\L400;

use Cnab\AbstractRetorno;
use Cnab\Resources\Generico\Retorno\L400\Generico0;

class Registro0 extends Generico0
{
    public $trailler;
    protected $meta = [
        'tipo_registro' => [
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true],
        'operacao' => [
            'tamanho' => 1,
            'default' => '2',
            'tipo' => 'int',
            'required' => true],
        'literal_remessa' => [
            'tamanho' => 7,
            'default' => 'RETORNO',
            'tipo' => 'alfa',
            'required' => true],
        'tipo_servico' => [
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true],
        'literal_servico' => [
            'tamanho' => 8,
            'default' => 'COBRANCA',
            'tipo' => 'alfa',
            'required' => true],
        'filler1' => [
            'tamanho' => 7,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true],
        'agencia' => [
            'tamanho' => 4,
            'default' => '',
            'tipo' => 'int',
            'required' => true],
        'agencia_dv' => [
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true],
        'conta' => [
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true],
        'conta_dv' => [
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true],
        'numero_convenio' => [
            'tamanho' => 6,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true],
        'nome_empresa' => [
            'tamanho' => 30,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true],
        'codigo_banco' => [
            'tamanho' => 3,
            'default' => '341',
            'tipo' => 'int',
            'required' => true],
        'nome_banco' => [
            'tamanho' => 15,
            'default' => ' - BANCOOB S/A',
            'tipo' => 'alfa',
            'required' => true],
        'data_gravacao' => [
            'tamanho' => 6,
            'default' => '',// nao informar a data na instanciação - gerada dinamicamente
            'tipo' => 'date',
            'required' => true],
        'numero_sequencial_arquivo' => [
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'int',
            'required' => true],
        'filler3' => [
            'tamanho' => 287,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true],
        'numero_registro' => [       // 4.3R
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true],
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
        //RetornoAbstract::$linesCounter--;
    }
}


