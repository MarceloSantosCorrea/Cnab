<?php

use Cnab\Remessa;

function validarData($data, $formato = 'dmY'): bool
{
    $d = DateTime::createFromFormat($formato, $data);
    return $d && $d->format($formato) === $data;
}

function validarHora($data, $formato = 'His'): bool
{
    $d = DateTime::createFromFormat($formato, $data);
    return $d && $d->format($formato) === $data;
}

test('calcular o dígito verificador do nosso número', function (
    string $agencia, string $posto, string $cedente, string $ano, string $byte, int $seq, $digitoVerificador
) {
    $sequencial = '0000' . $seq;
    $linha = $agencia . $posto . $cedente . $ano . $byte . $sequencial;

    $total = 0;
    for ($i = 0, $y = 4; $i < strlen($linha); $i++, $y--) {
        if ($y < 2) $y = 9;
        $total += $linha[$i] * $y;
    }

    $rest = $total % 11;
    $digit = $rest < 2 ? 0 : 11 - $rest;
    expect($digit)->toBe($digitoVerificador);
})->with([
    ['0434', '25', '91107', '24', '2', 1, 5],
    ['0434', '25', '91107', '24', '2', 2, 3],
    ['0434', '25', '91107', '24', '2', 3, 1],
    ['0434', '25', '91107', '24', '2', 4, 0],
    ['0434', '25', '91107', '24', '2', 5, 8],
    ['0434', '25', '91107', '24', '2', 6, 6],
    ['0434', '25', '91107', '24', '2', 7, 4],
    ['0434', '25', '91107', '24', '2', 8, 2],
    ['0434', '25', '91107', '24', '2', 9, 0],
    ['0434', '25', '91107', '24', '2', 10, 5],
    ['0434', '25', '91107', '24', '2', 11, 7],
    ['0434', '25', '91107', '24', '2', 12, 9],
    ['0434', '25', '91107', '24', '2', 13, 0],
    ['0434', '25', '91107', '24', '2', 14, 2],
    ['0434', '25', '91107', '24', '2', 15, 4],
    ['0434', '25', '91107', '24', '2', 16, 6],
    ['0434', '25', '91107', '24', '2', 17, 8],
    ['0434', '25', '91107', '24', '2', 18, 0],
    ['0434', '25', '91107', '24', '2', 19, 1],
    ['0434', '25', '91107', '24', '2', 20, 3],
]);

test('deve retornar um arquivo de remessa válido', function () {
    $arquivo = new Remessa(748, 'Cnab240', [
        'nome_empresa' => "Empresa ABC",
        'tipo_inscricao' => 2,
        'numero_inscricao' => '123.122.123-56',
        'agencia' => '0434',
        'agencia_dv' => ' ',
        'conta' => '91107',
        'conta_dv' => 6,
        'codigo_beneficiario' => '10668',
        'codigo_beneficiario_dv' => '2',
        'numero_sequencial_arquivo' => 1,
        'situacao_arquivo' => 'P'
    ]);

    $lote = $arquivo->addLote(['tipo_servico' => 1]);

    $lote->inserirDetalhe([
        'nosso_numero' => '242000015',
        'seu_numero' => '1',
        'data_vencimento' => date('Y-m-d'),
        'data_emissao' => date('Y-m-d'),
        'valor' => '30.00',
        'tipo_inscricao' => 1,
        'numero_inscricao' => '817.714.010-87',
        'nome_pagador' => 'Marcelo dos Santos Corrêa',
        'endereco_pagador' => 'Rua dos developers,123 sl 103',
        'bairro_pagador' => 'Bairro da insonia',
        'cep_pagador' => '97037-172',
        'cidade_pagador' => 'Santa Maria',
        'uf_pagador' => 'RS',
        'codigo_multa' => 2,
        'data_multa' => date('Y-m-d'),
        'vlr_multa' => 2.00,
        'especie_titulo' => 3,
        'cod_juros' => 3, // 1 = valor fixo, 2 = percentual, 3 = Isento,
        'data_juros' => null,
        'cod_desconto' => 0, // 0 = sem desconto, 1 = valor fixo, 2 = percentual, 3 = Valor por antecipação,
        // 1 = protestar automaticamente
        // 3 - Não protestar/Não negativar
        // 8 - Negativar automaticamente
        // 9 - Cancelar protesto automático/Cancelar negativação
        // Obs.: Não é possível protestar negativar um título ao mesmo tempo.
        'protestar' => 3,
        // Se o campo 221 (Cód. para protesto/negativação) foi preenchido com "1" ou "8" (protestar/negativar automaticamente)
        // o número de dias da negativação deve ser entre 03 e 99.
        // Se o campo 221 (Cód. para protesto/negativação) foi preenchido com "3" (não protestar/não negativar automaticamente)
        // o número de dias da negativação deve ser 00
        'prazo_protesto' => 0
    ]);

    echo $arquivo->getText() . PHP_EOL;
    $content = str_replace("\r\n", "\n", $arquivo->getText());
    $rows = explode("\n", $content);
    // Header de Arquivo
    expect(substr($rows[0], 0, 3))->toBe('748') // codigo_banco
    ->and(substr($rows[0], 3, 4))->toBe('0000') // codigo_lote
    ->and(substr($rows[0], 7, 1))->toBe('0') // tipo_registro
    ->and(substr($rows[0], 8, 9))->toBe('         ') // filler1
    ->and(substr($rows[0], 17, 1))->toBe('2') // tipo_inscricao
    ->and(substr($rows[0], 18, 14))->toBe('00012312212356') // numero_inscricao
    ->and(substr($rows[0], 32, 20))->toBe('                    ') // codigo_convenio
    ->and(substr($rows[0], 52, 5))->toBe('00434') // agencia
    ->and(substr($rows[0], 57, 1))->toBe(' ') // agencia_dv
    ->and(substr($rows[0], 58, 12))->toBe('000000091107') // conta
    ->and(substr($rows[0], 70, 1))->toBe('6') // conta_dv
    ->and(substr($rows[0], 71, 1))->toBe(' ') // conta_dac
    ->and(substr($rows[0], 72, 30))->toBe('EMPRESA ABC                   ') // nome_empresa
    ->and(substr($rows[0], 102, 30))->toBe('SICREDI                       ') // nome_banco
    ->and(substr($rows[0], 132, 10))->toBe('          ') // filler3
    ->and(substr($rows[0], 142, 1))->toBe('1') // codigo_remessa
    ->and(validarData(substr($rows[0], 143, 8)))->toBeTrue() // data_geracao
    ->and(validarHora(substr($rows[0], 151, 6)))->toBeTrue() // hora_geracao
    ->and(substr($rows[0], 157, 6))->toBe('000001') // numero_sequencial_arquivo
    ->and(substr($rows[0], 163, 3))->toBe('081') // versao_layout
    ->and(substr($rows[0], 166, 5))->toBe('01600') // densidade_gravacao
    ->and(substr($rows[0], 171, 20))->toBe('                    ') // filler5
    ->and(substr($rows[0], 191, 20))->toBe('                    ') // filler6
    ->and(substr($rows[0], 211, 29))->toBe('                             ') // filler7
    // Header de Lote
    ->and(substr($rows[1], 0, 3))->toBe('748') // codigo_banco
    ->and(substr($rows[1], 3, 4))->toBe('0001') // codigo_lote
    ->and(substr($rows[1], 7, 1))->toBe('1') // tipo_registro
    ->and(substr($rows[1], 8, 1))->toBe('R') // operacao
    ->and(substr($rows[1], 9, 2))->toBe('01') // tipo_servico
    ->and(substr($rows[1], 11, 2))->toBe('  ') // filler1
    ->and(substr($rows[1], 13, 3))->toBe('040') // versa_layout
    ->and(substr($rows[1], 16, 1))->toBe(' ') // filler2
    ->and(substr($rows[1], 17, 1))->toBe('2') // tipo_inscricao
    ->and(substr($rows[1], 18, 15))->toBe('000012312212356') // numero_inscricao
    ->and(substr($rows[1], 33, 20))->toBe('                    ') // filler22
    ->and(substr($rows[1], 53, 5))->toBe('00434') // agencia
    ->and(substr($rows[1], 58, 1))->toBe(' ') // agencia_dv
    ->and(substr($rows[1], 59, 12))->toBe('000000091107') // conta
    ->and(substr($rows[1], 71, 1))->toBe('6') // conta_dv
    ->and(substr($rows[1], 72, 1))->toBe(' ') // conta_dac
    ->and(substr($rows[1], 73, 30))->toBe('EMPRESA ABC                   ') // nome_empresa
    ->and(substr($rows[1], 103, 80))->toBe('                                                                                ') // filler26
    ->and(substr($rows[1], 183, 8))->toBe('00000001') // numero_remessa
    ->and(validarData(substr($rows[1], 191, 8)))->toBeTrue() // data_gravacao
    ->and(substr($rows[1], 199, 8))->toBe('00000000') // data_credito
    ->and(substr($rows[1], 207, 33))->toBe('                                 ') // filler4
    // Segmento P
    ->and(substr($rows[2], 0, 3))->toBe('748') // codigo_banco
    ->and(substr($rows[2], 3, 4))->toBe('0001') // codigo_lote
    ->and(substr($rows[2], 7, 1))->toBe('3') // tipo_registro
    ->and(substr($rows[2], 8, 5))->toBe('00001') // numero_registro
    ->and(substr($rows[2], 13, 1))->toBe('P') // seguimento
    ->and(substr($rows[2], 14, 1))->toBe(' ') // filler1
    ->and(substr($rows[2], 15, 2))->toBe('01') // codigo_movimento
    ->and(substr($rows[2], 17, 5))->toBe('00434') // agencia
    ->and(substr($rows[2], 22, 1))->toBe(' ') // agencia_dv
    ->and(substr($rows[2], 23, 12))->toBe('000000091107') // conta
    ->and(substr($rows[2], 35, 1))->toBe('6') // conta_dv
    ->and(substr($rows[2], 36, 1))->toBe(' ') // conta_dac
    ->and(substr($rows[2], 37, 20))->toBe('00000000000242000015') // nosso_numero
    ->and(substr($rows[2], 57, 1))->toBe('1') // carteira
    ->and(substr($rows[2], 58, 1))->toBe('1') // cadastramento
    ->and(substr($rows[2], 59, 1))->toBe('1') // documento
    ->and(substr($rows[2], 60, 1))->toBe('2') // emissão_boleto
    ->and(substr($rows[2], 61, 1))->toBe('2') // distribuicao_boleto
    ->and(substr($rows[2], 62, 15))->toBe('1              ') // seu_numero
    ->and(substr($rows[2], 77, 8))->toBe(date('dmY')) // data_vencimento
    ->and(substr($rows[2], 85, 15))->toBe('000000000003000') // valor
    ->and(substr($rows[2], 100, 5))->toBe('00000') // agencia_cobradora
    ->and(substr($rows[2], 105, 1))->toBe(' ') // agencia_cobradora_dv
    ->and(substr($rows[2], 106, 2))->toBe('03') // especie_titulo
    ->and(substr($rows[2], 108, 1))->toBe('N') // aceite
    ->and(substr($rows[2], 109, 8))->toBe(date('dmY')) // data_emissao
    ->and(substr($rows[2], 117, 1))->toBe('3') // cod_juros
    ->and(substr($rows[2], 118, 8))->toBe('00000000') // data_juros
    ->and(substr($rows[2], 126, 15))->toBe('000000000000000') // vlr_juros
    ->and(substr($rows[2], 141, 1))->toBe('0') // cod_desconto
    ->and(substr($rows[2], 142, 8))->toBe('00000000') // data_desconto
    ->and(substr($rows[2], 150, 15))->toBe('000000000000000') // vlr_desconto
    ->and(substr($rows[2], 165, 15))->toBe('000000000000000') // vlr_IOF
    ->and(substr($rows[2], 180, 15))->toBe('000000000000000') // vlr_abatimento
    ->and(substr($rows[2], 195, 25))->toBe('242000015                ') // seu_numero2
    ->and(substr($rows[2], 220, 1))->toBe('3') // protestar
    ->and(substr($rows[2], 221, 2))->toBe('00') // prazo_protesto
    ->and(substr($rows[2], 223, 1))->toBe('1') // baixar
    ->and(substr($rows[2], 224, 3))->toBe('000') // prazo_baixar
    ->and(substr($rows[2], 227, 2))->toBe('09') // cod_moeda
    ->and(substr($rows[2], 229, 10))->toBe('0000000000') // num_contrato
    ->and(substr($rows[2], 239, 1))->toBe(' ') // filler6
    // Segmento Q
    ->and(substr($rows[3], 0, 3))->toBe('748') // codigo_banco
    ->and(substr($rows[3], 3, 4))->toBe('0001') // codigo_lote
    ->and(substr($rows[3], 7, 1))->toBe('3') // tipo_registro
    ->and(substr($rows[3], 8, 5))->toBe('00002') // numero_registro
    ->and(substr($rows[3], 13, 1))->toBe('Q') // seguimento
    ->and(substr($rows[3], 14, 1))->toBe(' ') // filler1
    ->and(substr($rows[3], 15, 2))->toBe('01') // codigo_movimento
    ->and(substr($rows[3], 17, 1))->toBe('1') // tipo_inscricao
    ->and(substr($rows[3], 18, 15))->toBe('000081771401087') // numero_inscricao
    ->and(substr($rows[3], 33, 40))->toBe('MARCELO DOS SANTOS CORREA               ') // nome_pagador
    ->and(substr($rows[3], 73, 40))->toBe('RUA DOS DEVELOPERS,123 SL 103           ') // endereco_pagador
    ->and(substr($rows[3], 113, 15))->toBe('               ') // bairro_pagador
    ->and(substr($rows[3], 128, 8))->toBe('97037172') // cep_pagador
    ->and(substr($rows[3], 136, 15))->toBe('SANTA MARIA    ') // cidade_pagador
    ->and(substr($rows[3], 151, 2))->toBe('RS') // uf_pagador
    ->and(substr($rows[3], 153, 1))->toBe('0') // tipo_incricao_avalista
    ->and(substr($rows[3], 154, 15))->toBe('000000000000000') // numero_incricao_avalista
    ->and(substr($rows[3], 169, 40))->toBe('                                        ') // nome_avalista
    ->and(substr($rows[3], 209, 3))->toBe('000') // filler14
    ->and(substr($rows[3], 212, 28))->toBe('                            ') // filler15
    // Trailer de Lote
    ->and(substr($rows[4], 0, 3))->toBe('748') // codigo_banco
    // Trailer de Arquivo
    ->and(substr($rows[5], 0, 3))->toBe('748') // codigo_banco
    ->and(substr($rows[6], 0, 3))->toBe('748') // codigo_banco
    ;
});
