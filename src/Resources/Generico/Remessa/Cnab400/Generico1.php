<?php

namespace Cnab\Resources\Generico\Remessa\Cnab400;

use Cnab\AbstractRegistroRemessa;
use Cnab\AbstractRemessa;
use Cnab\Especie;
use Exception;

class Generico1 extends AbstractRegistroRemessa
{
    protected function set_numero_registro($value)
    {
        $lote = AbstractRemessa::getLote(0);
        $this->data['numero_registro'] = $lote->get_counter();
    }

    protected function set_tipo_inscricao_empresa($value)
    {
        $value = AbstractRemessa::$entryData['tipo_inscricao'];
        if ($value == 1 || $value == 2) {
            $this->data['tipo_inscricao_empresa'] = AbstractRemessa::$entryData['tipo_inscricao'];
        } else {
            throw new Exception("O tipo de incrição deve ser 1  para CPF e 2 para CNPJ, o valor informado foi:" . $value);
        }
    }

    protected function set_tipo_inscricao($value)
    {
        if ($value == 1 || $value == 2) {
            $this->data['tipo_inscricao'] = $value;
        } else {
            throw new Exception("O tipo de incrição deve ser 1  para CPF e 2 para CNPJ, o valor informado foi:" . $value);
        }
    }


    protected function set_numero_inscricao_empresa($value)
    {
        $this->data['numero_inscricao_empresa'] = str_ireplace(['.', '/', '-'], [''], AbstractRemessa::$entryData['numero_inscricao']);

    }

    protected function set_numero_inscricao($value)
    {
        $this->data['numero_inscricao'] = str_ireplace(['.', '/', '-'], [''], $value);

    }

    protected function set_agencia($value)
    {
        $this->data['agencia'] = AbstractRemessa::$entryData['agencia'];
    }

    protected function set_agencia_dv($value)
    {
        $this->data['agencia_dv'] = AbstractRemessa::$entryData['agencia_dv'];
    }

    protected function set_agencia_cobradora($value)
    {
        $this->data['agencia_cobradora'] = ($value == '0') ? $value : AbstractRemessa::$entryData['agencia'];
    }

    protected function set_agencia_cobradora_dv($value)
    {
        $this->data['agencia_cobradora_dv'] = AbstractRemessa::$entryData['agencia_dv'];
    }

    protected function set_conta($value)
    {
        $this->data['conta'] = AbstractRemessa::$entryData['conta'];
    }

    protected function set_conta_dv($value)
    {
        $this->data['conta_dv'] = AbstractRemessa::$entryData['conta_dv'];
    }

    protected function set_cep_pagador($value)
    {
        $cep = $value;
        $cep_array = str_ireplace('-', '', $cep);
        $this->data['cep_pagador'] = $cep_array;
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
}