<?php

use Cnab\Retorno;

test('deve processar retornos PRE CRI-PRODUCAO', function () {
    $fileContent = file_get_contents(__DIR__ . '/../../../../../docs/RETORNOCEF29062023434.RET');

    $arquivo = new Retorno($fileContent);

    expect($arquivo)->toBeInstanceOf(Retorno::class);

    $registros = $arquivo->getRegistros();

    expect($registros['registro0'])->toEqual([
        'codigo_banco' => 104,
        'codigo_lote' => 0,
        'tipo_registro' => 0,
        'filler1' => '',
        'tipo_inscricao' => 2,
        'numero_inscricao' => 3693856002555,
        'uso_caixa1' => 0,
        'agencia' => 501,
        'agencia_dv' => 0,
        'codigo_beneficiario' => 407450,
        'uso_caixa2' => 0,
        'nome_empresa' => 'COND. EDIFICIO MONTE CASTELLO',
        'nome_banco' => 'CAIXA ECONOMICA FEDERAL',
        'filler3' => '',
        'codigo_remessa' => 4,
        'data_geracao' => '2023-06-29',
        'hora_geracao' => 170233,
        'numero_sequencial_arquivo' => 93,
        'versao_layout' => 50,
        'densidade_gravacao' => 0,
        'filler4' => 'REMESSA PROCESSADA P',
        'situacao_arquivo' => 'RET PRE CRI-PRODUCAO',
        'versao_aplicativo' => '',
        'filler5' => '',
    ]);

    foreach ($registros['lotes'] as $lote) {
        expect($lote['registro1'])->toEqual([
            'codigo_banco' => 104,
            'codigo_lote' => 1,
            'tipo_registro' => 1,
            'operacao' => 'T',
            'tipo_servico' => 1,
            'filler1' => 0,
            'versa_layout' => 30,
            'filler2' => '',
            'tipo_inscricao' => 2,
            'numero_inscricao' => 3693856002555,
            'codigo_beneficiario' => 0,
            'uso_caixa1' => 0,
            'agencia' => 501,
            'agencia_dv' => 0,
            'codigo_convenio' => 407450,
            'modelo_boleto' => 0,
            'uso_caixa2' => 0,
            'nome_empresa' => 'COND. EDIFICIO MONTE CASTELLO',
            'mensagem_fixa1' => '',
            'mensagem_fixa2' => '',
            'numero_remessa' => 93,
            'data_gravacao' => '2023-06-29',
            'data_credito' => '00000000',
            'filler4' => '00                          00',
        ])
            ->and($lote['detalhes'][0]['registro3T'])->toEqual([
                'codigo_banco' => 104,
                'codigo_lote' => 1,
                'tipo_registro' => 3,
                'numero_registro' => 1,
                'seguimento' => 'T',
                'filler1' => '',
                'codigo_movimento' => 3,
                'agencia' => 0,
                'agencia_dv' => '0',
                'codigo_convenio' => 407450,
                'filler2' => 0,
                'num_banco_pagadores' => 0,
                'filler3' => 0,
                'filler4' => '0',
                'carteira' => 14,
                'nosso_numero' => 1843,
                'dv_nosso_numero' => 0,
                'codigo_carteira' => 1,
                'seu_numero' => 39506,
                'filler5' => '',
                'data_vencimento' => '2023-07-10',
                'vlr_nominal' => 540.08,
                'cod_banco_receb' => '000',
                'agencia_recebedora' => 0,
                'dv_agencia_receb' => '00000000',
                'seu_numero2' => '1843',
                'codigo_moeda' => 9,
                'tipo_inscricao' => 1,
                'numero_inscricao' => 3880767078,
                'nome_pagador' => 'ROBERTA DE OLIVEIRA SUTEL',
                'filler6' => '',
                'vlr_tarifa' => 0,
                'filler7' => '',
            ])
            ->and($lote['detalhes'][0]['registro3U'])->toEqual([
                'codigo_banco' => 104,
                'codigo_lote' => 1,
                'tipo_registro' => 3,
                'numero_registro' => 2,
                'seguimento' => 'U',
                'filler1' => 0,
                'codigo_movimento' => 3,
                'vlr_juros_multa' => 0,
                'vlr_desconto' => 0,
                'vlr_abatimento' => 0,
                'vlr_IOF' => 0,
                'vlr_pago' => 0,
                'vlr_liquido' => 0,
                'vlr_outras_despesas' => 0,
                'vlr_outros_creditos' => 0,
                'data_ocorrencia' => '2023-06-29',
                'data_credito' => '00000000',
                'filler2' => 0,
                'data_debito_tarifa' => '-0001-11-30',
                'codigo_banco_pagador' => '000000000000000',
                'filler4' => '000040',
            ])
            ->and($lote['registro5'])->toEqual([
                'codigo_banco' => 104,
                'codigo_lote' => 1,
                'tipo_registro' => 5,
                'filler1' => '',
                'qtd_registros' => 0,
                'qtd_titulos_simples' => 40,
                'vrl_titulos_simples' => 0,
                'qtd_titulos_caucionada' => 0,
                'vlr_titulos_caucionada' => 0,
                'qtd_titulos_descontada' => 0,
                'vlr_titulos_descontada' => 0,
                'filler2' => '0000000000000000000000000000',
                'filler3' => '',
            ]);
    }

    expect($registros['registro9'])->toEqual([
        'codigo_banco' => 104,
        'codigo_lote' => 9999,
        'tipo_registro' => 9,
        'filler1' => '',
        'qtd_lotes' => 1,
        'qtd_registros' => 6,
        'filler2' => '',
        'filler3' => '',
    ]);
});
