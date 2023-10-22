<?php

use Cnab\Remessa;

require __DIR__ . '/../vendor/autoload.php';

$arquivo = new Remessa(756, 'Cnab240', [
    'nome_empresa' => "teste",
    'tipo_inscricao' => 2,
    'numero_inscricao' => '123.122.123-56',
    'agencia' => '4342',
    'agencia_dv' => '7',
    'conta' => '96640',
    'conta_dv' => '1',
    'codigo_beneficiario' => '243394',
    'codigo_beneficiario_dv' => '0',
    'numero_sequencial_arquivo' => 1,
    'situacao_arquivo' => 'P'
]);

$lote = $arquivo->addLote(['tipo_servico' => 1]);
$lote->inserirDetalhe([
    'conta_dv' => '1',
    'nosso_numero' => '00000010',
    'seu_numero' => '1',
    'data_vencimento' => '30112023',
    'data_emissao' => '30112023',
    'valor' => '30.00',
    'tipo_inscricao' => 1,
    'numero_inscricao' => '123.122.123-56',
    'nome_pagador' => 'JOSÉ da SILVA ALVES',
    'endereco_pagador' => 'Rua dos developers,123 sl 103',
    'bairro_pagador' => 'Bairro da insonia',
    'cep_pagador' => '12345123',
    'cidade_pagador' => 'Londrina',
    'uf_pagador' => 'PR',
]);

$lote->inserirDetalhe([
    'conta_dv' => '1',
    'nosso_numero' => '00000010',
    'seu_numero' => '1',
    'data_vencimento' => '30112023',
    'data_emissao' => '30112023',
    'valor' => '30.00',
    'tipo_inscricao' => 1,
    'numero_inscricao' => '123.122.123-56',
    'nome_pagador' => 'JOSÉ da SILVA ALVES',
    'endereco_pagador' => 'Rua dos developers,123 sl 103',
    'bairro_pagador' => 'Bairro da insonia',
    'cep_pagador' => '12345123',
    'cidade_pagador' => 'Londrina',
    'uf_pagador' => 'PR',
]);

$file = fopen('sicoob.rem', "w");
fwrite($file, $arquivo->getText());
fclose($file);