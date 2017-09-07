<?php

require __DIR__ . '/vendor/autoload.php';

use Cnab\Remessa;

$arquivo = new Remessa(104, 'cnab240_SIGCB', [
    'nome_empresa'              => "Empresa ABC",
    'tipo_inscricao'            => '2',
    'numero_inscricao'          => '91.378.372/0001-01',
    'agencia'                   => '0501',
    'agencia_dv'                => '0',
    //'conta'                     => '3264',
    //'conta_dv'                  => '6',
    'codigo_beneficiario'       => '721933',
    'codigo_beneficiario_dv'    => '4',
    'numero_sequencial_arquivo' => 1,
    'situacao_arquivo'          => 'P',
]);
$lote    = $arquivo->addLote(['tipo_servico' => 1]); // tipo_servico  = 1 para cobrança registrada, 2 para sem registro

$lote->inserirDetalhe([
    'codigo_ocorrencia' => 1, //1 = Entrada de título, para outras opçoes ver nota explicativa C004 manual Cnab_SIGCB na pasta docs
    'nosso_numero'      => 1, // numero sequencial de boleto
    'seu_numero'        => 1,// se nao informado usarei o nosso numero

    /* campos necessarios somente para itau cnab400, não precisa comentar se for outro layout    */
    'carteira_banco'    => 109, // codigo da carteira ex: 109,RG esse vai o nome da carteira no banco
    'cod_carteira'      => "I", // I para a maioria ddas carteiras do itau
    /* campos necessarios somente para itau, não precisa comentar se for outro layout   */

    'especie_titulo'   => "DM", // informar dm e sera convertido para codigo em qualquer laytou conferir em especie.php
    'valor'            => 100.00, // Valor do boleto como float valido em php
    'emissao_boleto'   => 2, // tipo de emissao do boleto informar 2 para emissao pelo beneficiario e 1 para emissao pelo banco
    'protestar'        => 2, // 1 = Protestar com (Prazo) dias, 2 = Devolver após (Prazo) dias
    'nome_pagador'     => "JOSÉ da SILVA ALVES", // O Pagador é o cliente, preste atenção nos campos abaixo
    'tipo_inscricao'   => 1, //campo fixo, escreva '1' se for pessoa fisica, 2 se for pessoa juridica
    'numero_inscricao' => '123.122.123-56',//cpf ou ncpj do pagador
    'endereco_pagador' => 'Rua dos developers,123 sl 103',
    'bairro_pagador'   => 'Bairro da insonia',
    'cep_pagador'      => '12345-123', // com hífem
    'cidade_pagador'   => 'Londrina',
    'uf_pagador'       => 'PR',
    'data_vencimento'  => '2016-04-09', // informar a data neste formato
    'data_emissao'     => '2016-04-09', // informar a data neste formato
    'vlr_juros'        => 0.15, // Valor do juros de 1 dia'
    'data_desconto'    => '2016-04-09', // informar a data neste formato
    'vlr_desconto'     => '0', // Valor do desconto
    'prazo'            => 5, // prazo de dias para o cliente pagar após o vencimento
    'mensagem'         => 'JUROS de R$0,15 ao dia' . PHP_EOL . "Não receber apos 30 dias",
    'email_pagador'    => 'rogerio@ciatec.net', // data da multa
    'data_multa'       => '2016-04-09', // informar a data neste formato, // data da multa
    'valor_multa'      => 30.00, // valor da multa
]);

$lote->inserirDetalhe([
    'codigo_ocorrencia' => 1, //1 = Entrada de título, para outras opçoes ver nota explicativa C004 manual Cnab_SIGCB na pasta docs
    'nosso_numero'      => 1, // numero sequencial de boleto
    'seu_numero'        => 1,// se nao informado usarei o nosso numero

    /* campos necessarios somente para itau cnab400, não precisa comentar se for outro layout    */
    'carteira_banco'    => 109, // codigo da carteira ex: 109,RG esse vai o nome da carteira no banco
    'cod_carteira'      => "I", // I para a maioria ddas carteiras do itau
    /* campos necessarios somente para itau, não precisa comentar se for outro layout   */

    'especie_titulo'   => "DM", // informar dm e sera convertido para codigo em qualquer laytou conferir em especie.php
    'valor'            => 100.00, // Valor do boleto como float valido em php
    'emissao_boleto'   => 2, // tipo de emissao do boleto informar 2 para emissao pelo beneficiario e 1 para emissao pelo banco
    'protestar'        => 2, // 1 = Protestar com (Prazo) dias, 2 = Devolver após (Prazo) dias
    'nome_pagador'     => "JOSÉ da SILVA ALVES", // O Pagador é o cliente, preste atenção nos campos abaixo
    'tipo_inscricao'   => 1, //campo fixo, escreva '1' se for pessoa fisica, 2 se for pessoa juridica
    'numero_inscricao' => '123.122.123-56',//cpf ou ncpj do pagador
    'endereco_pagador' => 'Rua dos developers,123 sl 103',
    'bairro_pagador'   => 'Bairro da insonia',
    'cep_pagador'      => '12345-123', // com hífem
    'cidade_pagador'   => 'Londrina',
    'uf_pagador'       => 'PR',
    'data_vencimento'  => '2016-04-09', // informar a data neste formato
    'data_emissao'     => '2016-04-09', // informar a data neste formato
    'vlr_juros'        => 0.15, // Valor do juros de 1 dia'
    'data_desconto'    => '2016-04-09', // informar a data neste formato
    'vlr_desconto'     => '0', // Valor do desconto
    'prazo'            => 5, // prazo de dias para o cliente pagar após o vencimento
    'mensagem'         => 'JUROS de R$0,15 ao dia' . PHP_EOL . "Não receber apos 30 dias",
    'email_pagador'    => 'rogerio@ciatec.net', // data da multa
    'data_multa'       => '2016-04-09', // informar a data neste formato, // data da multa
    'valor_multa'      => 30.00, // valor da multa
]);

$fp = fopen('remessa.rem', 'w');
fwrite($fp, $arquivo->getText());
fclose($fp);