<?php

namespace Cnab\Resources\B756\Retorno\L085;

use Cnab\AbstractRegistroRetorno;

class Registro0 extends AbstractRegistroRetorno
{
    protected $meta = [
        'codigo_banco' => ['tamanho' => 3, 'default' => 756, 'tipo' => 'int', 'required' => true],
        'codigo_lote' => ['tamanho' => 4, 'default' => '0000', 'tipo' => 'int', 'required' => true],
        'tipo_registro' => ['tamanho' => 1, 'default' => '0', 'tipo' => 'int', 'required' => true],
        'filler1' => ['tamanho' => 9, 'default' => ' ', 'tipo' => 'alfa', 'required' => true],
        'tipo_inscricao' => ['tamanho' => 1, 'default' => '', 'tipo' => 'int', 'required' => true],
        'numero_inscricao' => ['tamanho' => 14, 'default' => '', 'tipo' => 'int', 'required' => true],
        'codigo_convenio' => ['tamanho' => 20, 'default' => ' ', 'tipo' => 'alfa', 'required' => true],
        'agencia' => ['tamanho' => 5, 'default' => '', 'tipo' => 'int', 'required' => true],
        'agencia_dv' => ['tamanho' => 1, 'default' => '0', 'tipo' => 'int', 'required' => true],
        'conta' => ['tamanho' => 12, 'default' => '', 'tipo' => 'int', 'required' => true],
        'conta_dv' => ['tamanho' => 1, 'default' => '', 'tipo' => 'int', 'required' => true],
        'conta_dac' => ['tamanho' => 1, 'default' => '0', 'tipo' => 'int', 'required' => true],
        'nome_empresa' => ['tamanho' => 30, 'default' => '', 'tipo' => 'alfa', 'required' => true],
        'nome_banco' => ['tamanho' => 30, 'default' => 'SICOOB', 'tipo' => 'alfa', 'required' => true],
        'filler3' => ['tamanho' => 10, 'default' => ' ', 'tipo' => 'alfa', 'required' => true],
        'codigo_remessa' => ['tamanho' => 1, 'default' => '', 'tipo' => 'int', 'required' => true],
        'data_geracao' => ['tamanho' => 8, 'default' => '', 'tipo' => 'date', 'required' => true],
        'hora_geracao' => ['tamanho' => 6, 'default' => '', 'tipo' => 'int', 'required' => true],
        'numero_sequencial_arquivo' => ['tamanho' => 6, 'default' => '', 'tipo' => 'int', 'required' => true],
        'versao_layout' => ['tamanho' => 3, 'default' => '', 'tipo' => 'int', 'required' => true],
        'densidade_gravacao' => ['tamanho' => 5, 'default' => '0', 'tipo' => 'int', 'required' => true],
        'filler4' => ['tamanho' => 69, 'default' => ' ', 'tipo' => 'alfa', 'required' => true],
    ];
}


