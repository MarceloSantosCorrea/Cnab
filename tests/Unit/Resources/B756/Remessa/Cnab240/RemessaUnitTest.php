<?php

use Cnab\Remessa;

test('deve criar um arquivo de remessa para o banco sicoob no formato cnab 240', function () {
    $arquivo = new Remessa(756, 'Cnab240', [
        'nome_empresa' => "Empresa ABC",
        'tipo_inscricao' => 2,
        'numero_inscricao' => '123.122.123-56',
        'agencia' => '3300',
        'agencia_dv' => 6,
        'conta' => '3264',
        'conta_dv' => 6,
        'codigo_beneficiario' => '10668',
        'codigo_beneficiario_dv' => '2',
        'numero_sequencial_arquivo' => 1,
        'situacao_arquivo' => 'P'
    ]);
});
