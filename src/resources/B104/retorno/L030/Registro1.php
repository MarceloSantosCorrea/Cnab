<?php
/*
* Cnab - Geração de arquivos de remessa e retorno em PHP
*
* LICENSE: The MIT License (MIT)
*
* Copyright (C) 2013 Ciatec.net
*
* Permission is hereby granted, free of charge, to any person obtaining a copy of this
* software and associated documentation files (the "Software"), to deal in the Software
* without restriction, including without limitation the rights to use, copy, modify,
* merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
* permit persons to whom the Software is furnished to do so, subject to the following
* conditions:
*
* The above copyright notice and this permission notice shall be included in all copies
* or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
* INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
* PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
* HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
* OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
* SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/
namespace Cnab\resources\B104\remessa\cnab240_SIGCB;
use Cnab\resources\generico\remessa\cnab240\Generico1;
use Cnab\RetornoAbstract;

class Registro1 extends Generico1
{
    protected $meta = [
        'codigo_banco'        => [
            'tamanho'  => 3,
            'default'  => '104',
            'tipo'     => 'int',
            'required' => true],
        'codigo_lote'         => [
            'tamanho'  => 4,
            'default'  => 1,
            'tipo'     => 'int',
            'required' => true],
        'tipo_registro'       => [
            'tamanho'  => 1,
            'default'  => 1,
            'tipo'     => 'int',
            'required' => true],
        'operacao'            => [
            'tamanho'  => 1,
            'default'  => 'R',
            'tipo'     => 'alfa',
            'required' => true],
        'tipo_servico'        => [
            'tamanho'  => 2,
            'default'  => '01',
            'tipo'     => 'int',
            'required' => true],
        'filler1'             => [
            'tamanho'  => 2,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'versa_layout'        => [
            'tamanho'  => 3,
            'default'  => '030',
            'tipo'     => 'int',
            'required' => true],
        'filler2'             => [
            'tamanho'  => 1,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'tipo_inscricao'      => [
            'tamanho'  => 1,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'numero_inscricao'    => [
            'tamanho'  => 15,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'codigo_beneficiario' => [
            'tamanho'  => 6,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'uso_caixa1'          => [
            'tamanho'  => 14,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'agencia'             => [
            'tamanho'  => 5,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'agencia_dv'          => [
            'tamanho' => 1,
            'default' => '',
            'tipo'    => 'int', 'required' => true],
        'codigo_convenio'     => [
            'tamanho'  => 6,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'modelo_boleto'       => [
            'tamanho'  => 7,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'uso_caixa2'          => [
            'tamanho'  => 1,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'nome_empresa'        => [
            'tamanho'  => 30,
            'default'  => '',
            'tipo'     => 'alfa',
            'required' => true],
        'mensagem_fixa1'      => [// mensagems 1 e 2 : somente use para mensagens que serao impressas de forma identica em todos os boletos do lote
            'tamanho'  => 40,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'mensagem_fixa2'      => [// mensagems 1 e 2 : somente use para mensagens que serao impressas de forma identica em todos os boletos do lote
            'tamanho'  => 40,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
        'numero_remessa'      => [
            'tamanho'  => 8,
            'default'  => '',
            'tipo'     => 'int',
            'required' => true],
        'data_gravacao'       => [
            'tamanho'  => 8,
            'default'  => '',// nao informar a data na instanciação - gerada dinamicamente
            'tipo'     => 'date',
            'required' => true],
        'filler3'             => [
            'tamanho'  => 8,
            'default'  => '0',
            'tipo'     => 'int',
            'required' => true],
        'filler4'             => [
            'tamanho'  => 33,
            'default'  => ' ',
            'tipo'     => 'alfa',
            'required' => true],
    ];

    public function __construct($linhaTxt)
    {
        parent::__construct($linhaTxt);
        $this->inserirDetalhe(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
    }

    /*
    * método inserirDetalhe()
    * Recebe os parametros
    * @$data = um array contendo os dados nessesarios para o arquvio
    */
    public function inserirDetalhe($linhaTxt)
    {

        $class = 'Cnab\resources\\' . RetornoAbstract::$banco . '\retorno\\' . RetornoAbstract::$layout . '\Registro3T';
        self::addChild(new $class($linhaTxt));
        RetornoAbstract::$linesCounter++;
        //self::$counter++;
    }

}

?>
