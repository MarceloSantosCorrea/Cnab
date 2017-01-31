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
namespace Cnab;

class Especie
{
    private $res    = [];
    private $itau   = [];
    private $caixa  = [];
    private $bb     = [];
    private $siccob = [];
    private $banco;

    public function __construct($banco = null)
    {

        $this->caixa[1]  = ['abr' => "CH", 'txt' => 'Cheque'];
        $this->caixa[2]  = ['abr' => "DM", 'txt' => 'Duplicata Mercantil'];
        $this->caixa[3]  = ['abr' => "DMI", 'txt' => 'Mercantil p/ IndicaÃ§Ã£o'];
        $this->caixa[4]  = ['abr' => "DS", 'txt' => 'Duplicata de ServiÃ§o'];
        $this->caixa[5]  = ['abr' => "DSI", 'txt' => 'Duplicata de ServiÃ§o p/ IndicaÃ§Ã£o'];
        $this->caixa[6]  = ['abr' => "DR", 'txt' => 'Duplicata Rural'];
        $this->caixa[7]  = ['abr' => "LC", 'txt' => 'Letra de CÃ¢mbio'];
        $this->caixa[8]  = ['abr' => "NCC", 'txt' => 'Nota de CrÃ©dito Comercial'];
        $this->caixa[9]  = ['abr' => "NCE", 'txt' => 'Nota de CrÃ©dito a ExportaÃ§Ã£o'];
        $this->caixa[10] = ['abr' => "NCI", 'txt' => 'Nota de CrÃ©dito a ExportaÃ§Ã£o'];
        $this->caixa[11] = ['abr' => "NCR", 'txt' => 'Nota de CrÃ©dito Rural'];
        $this->caixa[12] = ['abr' => "NP", 'txt' => 'Nota PromissÃ³ria'];
        $this->caixa[13] = ['abr' => "NPR", 'txt' => 'Nota PromissÃ³ria Rural'];
        $this->caixa[14] = ['abr' => "TM", 'txt' => 'Triplicata Mercantil'];
        $this->caixa[15] = ['abr' => "TS", 'txt' => 'Triplicata de ServiÃ§o'];
        $this->caixa[16] = ['abr' => "NS", 'txt' => 'Nota de Seguro'];
        $this->caixa[17] = ['abr' => "RC", 'txt' => 'Recibo'];
        $this->caixa[18] = ['abr' => "FAT", 'txt' => 'Fatura'];
        $this->caixa[19] = ['abr' => "ND", 'txt' => 'Nota de DÃ©bito'];

        $this->bb[1]  = ['abr' => "CH", 'txt' => 'Cheque'];
        $this->bb[2]  = ['abr' => "DM", 'txt' => 'Duplicata Mercantil'];
        $this->bb[3]  = ['abr' => "DMI", 'txt' => 'Mercantil p/ IndicaÃ§Ã£o'];
        $this->bb[4]  = ['abr' => "DS", 'txt' => 'Duplicata de ServiÃ§o'];
        $this->bb[5]  = ['abr' => "DSI", 'txt' => 'Duplicata de ServiÃ§o p/ IndicaÃ§Ã£o'];
        $this->bb[6]  = ['abr' => "DR", 'txt' => 'Duplicata Rural'];
        $this->bb[7]  = ['abr' => "LC", 'txt' => 'Letra de CÃ¢mbio'];
        $this->bb[8]  = ['abr' => "NCC", 'txt' => 'Nota de CrÃ©dito Comercial'];
        $this->bb[9]  = ['abr' => "NCE", 'txt' => 'Nota de CrÃ©dito a ExportaÃ§Ã£o'];
        $this->bb[10] = ['abr' => "NCI", 'txt' => 'Nota de CrÃ©dito a ExportaÃ§Ã£o'];
        $this->bb[11] = ['abr' => "NCR", 'txt' => 'Nota de CrÃ©dito Rural'];
        $this->bb[12] = ['abr' => "NP", 'txt' => 'Nota PromissÃ³ria'];
        $this->bb[13] = ['abr' => "NPR", 'txt' => 'Nota PromissÃ³ria Rural'];
        $this->bb[14] = ['abr' => "TM", 'txt' => 'Triplicata Mercantil'];
        $this->bb[15] = ['abr' => "TS", 'txt' => 'Triplicata de ServiÃ§o'];
        $this->bb[16] = ['abr' => "NS", 'txt' => 'Nota de Seguro'];
        $this->bb[17] = ['abr' => "RC", 'txt' => 'Recibo'];
        $this->bb[18] = ['abr' => "FAT", 'txt' => 'Fatura'];
        $this->bb[19] = ['abr' => "ND", 'txt' => 'Nota de DÃ©bito'];


        $this->itau[1]  = ['abr' => "DM", 'txt' => 'Duplicata Mercantil'];
        $this->itau[2]  = ['abr' => "NP", 'txt' => 'Nota PromissÃ³ria'];
        $this->itau[3]  = ['abr' => "NS", 'txt' => 'Nota de Seguro'];
        $this->itau[4]  = ['abr' => "ME", 'txt' => 'Mensalidade escolar'];
        $this->itau[5]  = ['abr' => "RC", 'txt' => 'Recibo'];
        $this->itau[6]  = ['abr' => "CT", 'txt' => 'Contrato'];
        $this->itau[7]  = ['abr' => "CS", 'txt' => 'Cosseguros'];
        $this->itau[8]  = ['abr' => "DS", 'txt' => 'Duplicata de ServiÃ§o'];
        $this->itau[9]  = ['abr' => "LC", 'txt' => 'Letra de CÃ¢mbio'];
        $this->itau[13] = ['abr' => "ND", 'txt' => 'Nota de DÃ©bito'];
        $this->itau[15] = ['abr' => "DV", 'txt' => 'Documento de divida'];
        $this->itau[16] = ['abr' => "EC", 'txt' => 'Encargos condominiais'];
        $this->itau[17] = ['abr' => "CPS", 'txt' => 'Conta de prestaÃ§Ã£o de serviÃ§o'];
        $this->itau[18] = ['abr' => "DBP", 'txt' => 'Boleto de Proposta'];
        $this->itau[99] = ['abr' => "DIV", 'txt' => 'Diversos'];


        $this->sicoob[1]  = ['abr' => "DM", 'txt' => 'Duplicata Mercantil'];
        $this->sicoob[2]  = ['abr' => "NP", 'txt' => 'Nota PromissÃ³ria'];
        $this->sicoob[3]  = ['abr' => "NS", 'txt' => 'Nota de Seguro'];
        $this->sicoob[5]  = ['abr' => "RC", 'txt' => 'Recibo'];
        $this->sicoob[6]  = ['abr' => "DR", 'txt' => 'Duplicata Rural'];
        $this->sicoob[8]  = ['abr' => "LC", 'txt' => 'Letra de CÃ¢mbio'];
        $this->sicoob[9]  = ['abr' => "WRT", 'txt' => 'Warrant'];
        $this->sicoob[10] = ['abr' => "CH", 'txt' => 'Cheque'];
        $this->sicoob[12] = ['abr' => "DS", 'txt' => 'Duplicata de ServiÃ§o'];
        $this->sicoob[13] = ['abr' => "ND", 'txt' => 'Nota de DÃ©bito'];
        $this->sicoob[14] = ['abr' => "TM", 'txt' => 'Triplicata Mercantil'];
        $this->sicoob[15] = ['abr' => "TS", 'txt' => 'Triplicata de ServiÃ§o'];
        $this->sicoob[18] = ['abr' => "FAT", 'txt' => 'Fatura'];
        $this->sicoob[20] = ['abr' => "AP", 'txt' => 'ApÃ³lice de Seguros'];
        $this->sicoob[21] = ['abr' => "ME", 'txt' => 'Mensalidade escolar'];
        $this->sicoob[22] = ['abr' => "ME", 'txt' => 'Parcela de ConsÃ³rcio'];
        $this->sicoob[99] = ['abr' => "DIV", 'txt' => 'Outros'];

        $this->res['104'] = $this->caixa;
        $this->res['341'] = $this->itau;
        $this->res['001'] = $this->bb;
        $this->res['756'] = $this->sicoob;

        $this->banco = $this->res[$banco];
    }

    public function getAbr($especie)
    {
        return $this->banco[$especie]['abr'];
    }

    public function getBanco()
    {
        return $this->banco;
    }

    public function getCodigo($abr)
    {
        foreach ($this->banco as $key => $especie) {
            if ($especie['abr'] == $abr) {
                return $key;
                break;
            }
        }
    }

}
