<?php

namespace Cnab\Resources\B756\Retorno\L400;

use Cnab\AbstractRetorno;
use Cnab\Resources\Generico\Retorno\L400\Generico1;

class Registro1 extends Generico1
{
    public $trailler;
    protected $meta = [
        'tipo_registro' => [
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true],
        'tipo_inscricao_empresa' => [
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true],
        'numero_inscricao_empresa' => [
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
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
            'default' => '0',
            'tipo' => 'int',
            'required' => true],
        'seu_numero' => [
            'tamanho' => 25,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true],
        'nosso_numero' => [
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'int',
            'required' => true],
        'nosso_numero_dv' => [
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'int',
            'required' => true],
        'numero_parcela' => [
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true],
        'grupo_valor' => [
            'tamanho' => 4,
            'default' => '',
            'tipo' => 'int',
            'required' => true],
        'codigo_baixa' => [
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true],
        'especie_titulo_lit' => [      //13.3P
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true],
        'carteira' => [
            'tamanho' => 3,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true],
        'conta_caucao' => [
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true],
        'cod_responsabilidade' => [      //13.3P
            'tamanho' => 5,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true],
        'cod_responsabilidade_dv' => [      //13.3P
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true],
        'taxa_desconto' => [            // 9.3Q
            'tamanho' => 3,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true],
        'taxa_IOF' => [            // 9.3Q
            'tamanho' => 3,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true],
        'filler41' => [            //20.3
            'tamanho' => 1,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true],
        'cod_carteira' => [            //20.3
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true],
        'codigo_movimento' => [      // codigo da ocorrencia no manual itau
            'tamanho' => 2,
            'default' => '', // entrada de titulo
            'tipo' => 'int',
            'required' => true],
        'data_ocorrencia' => [      // codigo da ocorrencia no manual itau
            'tamanho' => 6,
            'default' => '', // entrada de titulo
            'tipo' => 'date',
            'required' => true],
        'seu_numero2' => [            //20.3
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true],
        'filler42' => [            //20.3
            'tamanho' => 20,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true],
        'data_vencimento' => [            //26.3P
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true],
        'valor' => [                 //21.3P
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true],
        'codigo_banco' => [
            'tamanho' => 3,
            'default' => '341',
            'tipo' => 'int',
            'required' => true],
        'agencia_cobradora' => [    //22.3P
            'tamanho' => 4,
            'default' => '0',
            'tipo' => 'int',
            'required' => true],
        'agencia_cobradora_dv' => [    //22.3P
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true],
        'especie_titulo' => [    //24.3P
            'tamanho' => 2,
            'default' => '2',
            'tipo' => 'int',
            'required' => true],
        'data_credito' => [            //26.3P
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true],
        'vlr_tarifas' => [            //25.3P
            'tamanho' => 5,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true],
        'vlr_outras_despesas' => [               // 8.3Q
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true],
        'vlr_juros_desconto' => [               // 8.3Q
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true],
        'vlr_iof' => [               // 11.3Q
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true],
        'vlr_abatimento' => [       //10.3Q
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true],
        'vlr_desconto' => [            // 9.3Q
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true],
        'vlr_pago' => [               //12.3Q
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true],
        'vlr_juros_multa' => [               // 8.3Q
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true],
        'vlr_outros' => [               // 8.3Q
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true],
        'vlr_abatimento_na' => [               // 8.3Q
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true],
        'vlr_lancamento' => [               // 8.3Q
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true],
        'indicativo_debito_credito' => [    //24.3P
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'int',
            'required' => true],
        'indicativo_valor' => [    //24.3P
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true],
        'vlr_ajuste' => [               // 8.3Q
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true],
        'filler45' => [    //24.3P
            'tamanho' => 10,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true],
        'numero_inscricao_pagador' => [            //29.3P
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true],
        'filler47' => [
            'tamanho' => 38,
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
        //$this->inserirDetalhe();
    }
    /*
    * método inserirDetalhe()
    * Recebe os parametros
    * @$data = um array contendo os dados nessesarios para o arquvio
    */
    /*public function inserirDetalhe(){
while($this->data['codigo_lote']==abs(substr(RetornoAbstract::$lines[RetornoAbstract::$linesCounter],3,4)))
{
RetornoAbstract::$linesCounter++;
$class = 'Cnab\Resources\\'.RetornoAbstract::$banco.'\Retorno\\'.RetornoAbstract::$layout.'\Registro3T';
$this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);

}
RetornoAbstract::$linesCounter--;
$teste = array_pop($this->children);
}  */

    public function get_R3U()
    {
        return $this;
    }

}


