<?php

namespace Cnab\Resources\Generico\Remessa\Cnab240;

use Cnab\AbstractRegistroRemessa;
use Cnab\AbstractRemessa;
use Cnab\Especie;
use Exception;

class Generico3 extends AbstractRegistroRemessa
{

    /**
     * @param $value
     */
    protected function set_codigo_lote($value)
    {
        $this->data['codigo_lote'] = AbstractRemessa::$loteCounter;
    }

    /**
     * @param $value
     */
    protected function set_numero_registro($value)
    {
        $lote = AbstractRemessa::getLote(AbstractRemessa::$loteCounter);
        $this->data['numero_registro'] = $lote->get_counter();
    }

    /**
     * @param $value
     */
    protected function set_tipo_inscricao($value)
    {
        $this->data['tipo_inscricao'] = $value;
    }

    /**
     * @param $value
     */
    protected function set_numero_inscricao($value)
    {
        $this->data['numero_inscricao'] = str_ireplace(['.', '/', '-'], [''], $value);
    }

    /**
     * @param $value
     */
    protected function set_codigo_beneficiario($value)
    {
        $this->data['codigo_beneficiario'] = AbstractRemessa::$entryData['codigo_beneficiario'];
    }

    /**
     * @param $value
     */
    protected function set_agencia($value)
    {
        $this->data['agencia'] = AbstractRemessa::$entryData['agencia'];
    }

    /**
     * @param $value
     */
    protected function set_agencia_dv($value)
    {
        $this->data['agencia_dv'] = AbstractRemessa::$entryData['agencia_dv'];
    }

    /**
     * @param $value
     */
    protected function set_codigo_convenio($value)
    {
        $this->data['codigo_convenio'] = AbstractRemessa::$entryData['codigo_beneficiario'];
    }

    /**
     * @param $value
     */
    protected function set_com_registro($value)
    {
        $lote = AbstractRemessa::getLote(AbstractRemessa::$loteCounter);
        $this->data['com_registro'] = $lote->tipo_servico;
    }

    /**
     * @param $value
     * @throws Exception
     */
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

    /**
     * @param $value
     * @throws Exception
     */
    protected function set_seu_numero($value)
    {
        if ($this->data['nosso_numero'] == 0 && $value == '') {
            throw new Exception('O campo "seu_numero" e obrigatorio, na sua falta usareio o nosso numero, porem esse tambem no foi inserido!!!');
        } else {
            $this->data['seu_numero'] = $value != ' ' ? $value : $this->data['nosso_numero'];
        }
    }

    /**
     * @param $value
     */
    protected function set_seu_numero2($value)
    {
        $this->data['seu_numero2'] = $value != ' ' ? $value : $this->data['nosso_numero'];
    }

    /**
     * @param $value
     */
    protected function set_especie_titulo($value)
    {
        if (is_int($value)) {
            $this->data['especie_titulo'] = $value;
        } else {
            $especie = new Especie($this->data['codigo_banco']);
            $this->data['especie_titulo'] = $especie->getCodigo($value);
        }
    }

    /**
     * @param $value
     */
    protected function set_cep_sufixo($value)
    {
        $cep = $this->data['cep_pagador'];
        $cep_array = explode('-', $cep);
        $this->data['cep_pagador'] = $cep_array[0];
        $this->data['cep_sufixo'] = $cep_array[1];
    }

    /**
     * @param $value
     */
    protected function set_mensagem_3($value)
    {
        $mensagem = (isset($this->data['mensagem'])) ? explode(PHP_EOL, $this->data['mensagem']) : [];
        $this->data['mensagem_3'] = count($mensagem) >= 1 ? $mensagem[0] : ' ';
    }

    /**
     * @param $value
     */
    protected function set_mensagem_4($value)
    {
        $mensagem = (isset($this->data['mensagem'])) ? explode(PHP_EOL, $this->data['mensagem']) : [];
        $this->data['mensagem_4'] = count($mensagem) >= 2 ? $mensagem[1] : ' ';
    }

    /**
     * @param $value
     */
    protected function set_mensagem_5($value)
    {
        $mensagem = (isset($this->data['mensagem'])) ? explode(PHP_EOL, $this->data['mensagem']) : [];
        $this->data['mensagem_5'] = count($mensagem) >= 3 ? $mensagem[2] : ' ';
    }

    /**
     * @param $value
     */
    protected function set_mensagem_6($value)
    {
        $mensagem = (isset($this->data['mensagem'])) ? explode(PHP_EOL, $this->data['mensagem']) : [];
        $this->data['mensagem_6'] = count($mensagem) >= 4 ? $mensagem[3] : ' ';
    }

    /**
     * @param $value
     */
    protected function set_mensagem_7($value)
    {
        $mensagem = (isset($this->data['mensagem'])) ? explode(PHP_EOL, $this->data['mensagem']) : [];
        $this->data['mensagem_7'] = count($mensagem) >= 5 ? $mensagem[4] : ' ';
    }

    /**
     * @param $value
     */
    protected function set_mensagem_8($value)
    {
        $mensagem = (isset($this->data['mensagem'])) ? explode(PHP_EOL, $this->data['mensagem']) : [];
        $this->data['mensagem_8'] = count($mensagem) >= 6 ? $mensagem[5] : ' ';
    }

    /**
     * @param $value
     */
    protected function set_informacao_pagador($value)
    {
        $mensagem = (isset($this->data['informacao_pagador'])) ? $this->data['informacao_pagador'] : '';
        $this->data['informacao_pagador'] = $mensagem;
    }

    /**
     * @param $value
     * @throws Exception
     */
    protected function set_prazo_protesto($value)
    {
        if ($this->data['protestar'] == 1 && $value = '') {
            throw new Exception('O campo "protestar" deve ser 3 para nao protesto e caso querira protetar deve ser informado um prazo maior que 1');
        } else {
            $this->data['prazo_protesto'] = $value;
        }
    }
}