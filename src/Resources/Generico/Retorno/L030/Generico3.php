<?php

namespace Cnab\Resources\Generico\Retorno\L030;

use Cnab\AbstractRegistroRetorno;
use Cnab\AbstractRemessa;
use Cnab\Especie;
use Exception;

class Generico3 extends AbstractRegistroRetorno
{
    protected function set_codigo_lote($value)
    {
        //ArquivoAbstract::$loteCounter++;
        $this->data['codigo_lote'] = AbstractRemessa::$loteCounter;
    }

    protected function set_numero_registro($value)
    {
        $lote = AbstractRemessa::getLote(AbstractRemessa::$loteCounter);
        $this->data['numero_registro'] = $lote->get_counter();
    }

    protected function set_tipo_inscricao($value)
    {
        $this->data['tipo_inscricao'] = AbstractRemessa::$entryData['tipo_inscricao'];
    }

    protected function set_numero_inscricao($value)
    {
        $this->data['numero_inscricao'] = ($value != '') ? str_ireplace(['.', '/', '-'], [''], $value) : str_ireplace(['.', '/', '-'], [''], AbstractRemessa::$entryData['numero_inscricao']);
    }

    protected function set_codigo_beneficiario($value)
    {
        $this->data['codigo_beneficiario'] = AbstractRemessa::$entryData['codigo_beneficiario'];
    }

    protected function set_agencia($value)
    {
        $this->data['agencia'] = AbstractRemessa::$entryData['agencia'];
    }

    protected function set_agencia_dv($value)
    {
        $this->data['agencia_dv'] = AbstractRemessa::$entryData['agencia_dv'];
    }

    protected function set_codigo_convenio($value)
    {
        $this->data['codigo_convenio'] = AbstractRemessa::$entryData['codigo_beneficiario'];
    }

    protected function set_com_registro($value)
    {
        $lote = AbstractRemessa::getLote(AbstractRemessa::$loteCounter);
        $this->data['com_registro'] = $lote->tipo_servico;
    }

    protected function set_emissao_boleto($value)
    {
        $this->data['emissao_boleto'] = $value;
        if ($this->data['nosso_numero'] == 0) {
            $this->data['carteira'] = '00';
        } elseif ($this->data['com_registro'] == 1 && $value == 1) {
            $this->data['carteira'] = 11;
        } elseif ($this->data['com_registro'] == 1 && $value == 2) {
            $this->data['carteira'] = 14;
        } elseif ($this->data['com_registro'] == 2 && $value == 1) {
            $this->data['carteira'] = 21;
        } else {
            throw new Exception("Registros com emissao pelo beneficiario e sem registro nao sao enviados");
        }
    }

    protected function set_seu_numero($value)
    {
        if ($this->data['nosso_numero'] == 0 && $value == ' ') {
            throw new Exception('O campo "seu_numero" e obrigatorio, na sua falta usareio o nosso numero, porem esse tambem no foi inserido!!!');
        } else {
            $this->data['seu_numero'] = $value != ' ' ? $value : $this->data['nosso_numero'];
        }
    }

    protected function set_seu_numero2($value)
    {
        $this->data['seu_numero2'] = $value != ' ' ? $value : $this->data['nosso_numero'];
    }

    protected function set_especie_titulo($value)
    {
        if (is_int($value)) {
            $this->data['especie_titulo'] = $value;
        } else {
            $especie = new Especie($this->data['codigo_banco']);
            $this->data['especie_titulo'] = $especie->getCodigo($value);
        }
    }

    protected function set_cep_sufixo($value)
    {
        $cep = $this->data['cep_pagador'];
        $this->data['cep_pagador'] = explode('-', $cep)[0];
        $this->data['cep_sufixo'] = explode('-', $cep)[1];
    }

    protected function set_mensagem_3($value)
    {
        $mensagem = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : [];
        $this->data['mensagem_3'] = count($mensagem) >= 1 ? $mensagem[0] : ' ';
    }

    protected function set_mensagem_4($value)
    {
        $mensagem = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : [];
        $this->data['mensagem_4'] = count($mensagem) >= 2 ? $mensagem[1] : ' ';
    }

    protected function set_mensagem_5($value)
    {
        $mensagem = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : [];
        $this->data['mensagem_5'] = count($mensagem) >= 3 ? $mensagem[2] : ' ';
    }

    protected function set_mensagem_6($value)
    {
        $mensagem = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : [];
        $this->data['mensagem_6'] = count($mensagem) >= 4 ? $mensagem[3] : ' ';
    }

    protected function set_mensagem_7($value)
    {
        $mensagem = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : [];
        $this->data['mensagem_7'] = count($mensagem) >= 5 ? $mensagem[4] : ' ';
    }

    protected function set_mensagem_8($value)
    {
        $mensagem = (isset($this->entryData['mensagem'])) ? explode(PHP_EOL, $this->entryData['mensagem']) : [];
        $this->data['mensagem_8'] = count($mensagem) >= 6 ? $mensagem[5] : ' ';
    }
}


