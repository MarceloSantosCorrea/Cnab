<?php

namespace Cnab\Resources\Generico\Retorno\L030;

use Cnab\AbstractRegistroRetorno;

class Generico1 extends AbstractRegistroRetorno
{
    protected $counter = 1;

    public function set_tipo_servico($value)
    {
        if ($value == 'S') {
            $this->data['tipo_servico'] = 1;
        } elseif ($value == 'N') {
            $this->data['tipo_servico'] = 2;
        } elseif ((int)$value <= 2) {
            $this->data['tipo_servico'] = $value;
        } else {
            throw new Exception("O tipo de servico deve ser 1 ou S para Registrada ou 2 ou N para Sem Registro, o valor informado foi:" . $value);
        }
    }

    public function get_counter()
    {
        $this->counter++;

        return $this->counter;
    }

    public function inserirDetalhe($data)
    {
        $class = 'Cnab\Resources\\' . RetornoAbstract::$banco . '\Remessa\\' . RetornoAbstract::$layout . '\Registro3P';
        $this->children[] = new $class($data);
    }

    public function getText()
    {
        $retorno = '';
        $dataReg5 = [];
        $dataReg5['qtd_titulos_simples'] = '0';
        $dataReg5['qtd_titulos_caucionada'] = '0';
        $dataReg5['qtd_titulos_descontada'] = '0';
        $dataReg5['vrl_titulos_simples'] = '0.00';
        $dataReg5['vlr_titulos_caucionada'] = '0.00';
        $dataReg5['vlr_titulos_descontada'] = '0.00';

        foreach ($this->meta as $key => $value) {
            $retorno .= $this->$key;
        }
        RetornoAbstract::$retorno[] = $retorno;
        if ($this->children) {
            // percorre todos objetos filhos
            foreach ($this->children as $child) {
                if ($child->codigo_carteira == 1) {
                    $dataReg5['qtd_titulos_simples']++;
                    $dataReg5['vrl_titulos_simples'] += $child->getUnformated('valor');
                }
                if ($child->codigo_carteira == 3) {
                    $dataReg5['qtd_titulos_caucionada']++;
                    $dataReg5['vlr_titulos_caucionada'] += $child->getUnformated('valor');

                }
                if ($child->codigo_carteira == 4) {
                    $dataReg5['qtd_titulos_descontada']++;
                    $dataReg5['vlr_titulos_descontada'] += $child->getUnformated('valor');
                }
                $child->getText();
            }
            $class = 'Cnab\Resources\\' . RetornoAbstract::$banco . '\Remessa\\' . RetornoAbstract::$layout . '\Registro5';
            $registro5 = new $class($dataReg5);
            $registro5->getText();
        }
    }

    protected function set_codigo_lote($value)
    {
        $this->data['codigo_lote'] = RetornoAbstract::$loteCounter;
    }

    protected function set_tipo_inscricao($value)
    {
        $this->data['tipo_inscricao'] = $value ? $value : RetornoAbstract::$entryData['tipo_inscricao'];
    }

    protected function set_numero_inscricao($value)
    {
        $this->data['numero_inscricao'] = $value == '' ? str_ireplace(['.', '/', '-'], [''], RetornoAbstract::$entryData['numero_inscricao']) : str_ireplace(['.', '/', '-'], [''], $value);
    }

    protected function set_codigo_beneficiario($value)
    {
        $this->data['codigo_beneficiario'] = $value == '' ? RetornoAbstract::$entryData['codigo_beneficiario'] : $value;
    }

    protected function set_agencia($value)
    {
        $this->data['agencia'] = $value == '' ? RetornoAbstract::$entryData['agencia'] : $value;
    }

    protected function set_agencia_dv($value)
    {
        $this->data['agencia_dv'] = $value == '' ? RetornoAbstract::$entryData['agencia_dv'] : $value;
    }

    protected function set_codigo_convenio($value)
    {
        $this->data['codigo_convenio'] = RetornoAbstract::$entryData['codigo_beneficiario'];
    }

    protected function set_nome_empresa($value)
    {
        $this->data['nome_empresa'] = $value == '' ? RetornoAbstract::$entryData['nome_empresa'] : $value;
    }

    protected function set_numero_remessa($value)
    {
        $this->data['numero_remessa'] = $value == '' ? RetornoAbstract::$entryData['numero_sequencial_arquivo'] : $value;
    }

    protected function set_data_gravacao($value)
    {
        $this->data['data_gravacao'] = date('Y-m-d');
    }
}


