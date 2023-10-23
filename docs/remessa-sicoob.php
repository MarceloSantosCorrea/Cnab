<?php

use Cnab\Remessa;

require __DIR__ . '/../vendor/autoload.php';

$arquivo = new Remessa(756, 'Cnab240', [
    'nome_empresa' => "CONDOMINIO EDIFICIO EDIFICIO",
    'tipo_inscricao' => 2,
    'numero_inscricao' => '91.095.620/0001-07',
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
    'nosso_numero' => '00000010',
    'seu_numero' => '1',
    'data_vencimento' => '2023-11-30',
    'data_emissao' => date('Y-m-d'), // <-- não pode ser superior a data de vencimento
    'valor' => '30.00',
    'tipo_inscricao' => 1,
    'numero_inscricao' => '817.714.010-87',
    'nome_pagador' => 'Marcelo dos Santos Corrêa',
    'endereco_pagador' => 'Rua dos developers,123 sl 103',
    'bairro_pagador' => 'Bairro da insonia',
    'cep_pagador' => '97037172',
    'cidade_pagador' => 'Santa Maria',
    'uf_pagador' => 'RS',
    'codigo_multa' => 2,
    'data_multa' => '2023-12-05',
    'vlr_multa' => 2.00,
]);

// $arquivo->getText();
$file = fopen('SICOOB_CNAB240.REM', "w");
fwrite($file, $arquivo->getText());
fclose($file);
