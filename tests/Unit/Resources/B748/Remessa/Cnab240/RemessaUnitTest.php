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

test('deve retornar um arquivo de remessa válido', function () {
    $arquivo = new Remessa(748, 'Cnab240', [
        'nome_empresa' => "Empresa ABC",
        'tipo_inscricao' => 2,
        'numero_inscricao' => '123.122.123-56',
        'agencia' => '3300',
        'agencia_dv' => ' ',
        'conta' => '3264',
        'conta_dv' => 6,
        'codigo_beneficiario' => '10668',
        'codigo_beneficiario_dv' => '2',
        'numero_sequencial_arquivo' => 1,
        'situacao_arquivo' => 'P'
    ]);

    $lote = $arquivo->addLote(['tipo_servico' => 1]);

    $lote->inserirDetalhe([
        'nosso_numero' => '00000010',
        'seu_numero' => '1',
        'data_vencimento' => date('Y-m-d'),
        'data_emissao' => date('Y-m-d'),
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
        'data_multa' => date('Y-m-d'),
        'vlr_multa' => 2.00,
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
    ->and(substr($rows[0], 52, 5))->toBe('03300') // agencia
    ->and(substr($rows[0], 57, 1))->toBe(' ') // agencia_dv
    ->and(substr($rows[0], 58, 12))->toBe('000000003264') // conta
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
    ->and(substr($rows[1], 53, 5))->toBe('03300') // agencia
    ->and(substr($rows[1], 58, 1))->toBe(' ') // agencia_dv
    ->and(substr($rows[1], 59, 12))->toBe('000000003264') // conta
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
    ->and(substr($rows[2], 0, 4))->toBe('') // codigo_lote
    ->and(substr($rows[2], 0, 1))->toBe('') // tipo_registro
    ->and(substr($rows[2], 0, 5))->toBe('') // numero_registro
    ->and(substr($rows[2], 0, 1))->toBe('') // seguimento
    ->and(substr($rows[2], 0, 1))->toBe('') // filler1
    ->and(substr($rows[2], 0, 2))->toBe('') // codigo_movimento
    ->and(substr($rows[2], 0, 5))->toBe('') // agencia
    ->and(substr($rows[2], 0, 1))->toBe('') // agencia_dv
    ->and(substr($rows[2], 0, 12))->toBe('') // conta
    ->and(substr($rows[2], 0, 1))->toBe('') // conta_dv
    ->and(substr($rows[2], 0, 1))->toBe('') // conta_dac
    ->and(substr($rows[2], 0, 20))->toBe('') // nosso_numero
    ->and(substr($rows[2], 0, 1))->toBe('') // carteira
    ->and(substr($rows[2], 0, 1))->toBe('') // cadastramento
    ->and(substr($rows[2], 0, 1))->toBe('') // documento
    ->and(substr($rows[2], 0, 1))->toBe('') // emissão_boleto
    ->and(substr($rows[2], 0, 1))->toBe('') // distribuicao_boleto
    ->and(substr($rows[2], 0, 15))->toBe('') // seu_numero
    ->and(substr($rows[2], 0, 8))->toBe('') // data_vencimento
    ->and(substr($rows[2], 0, 15))->toBe('') // valor
    ->and(substr($rows[2], 0, 5))->toBe('') // agencia_cobradora
    ->and(substr($rows[2], 0, 1))->toBe('') // agencia_cobradora_dv
    ->and(substr($rows[2], 0, 2))->toBe('') // especie_titulo
    ->and(substr($rows[2], 0, 1))->toBe('') // aceite
    ->and(substr($rows[2], 0, 8))->toBe('') // data_emissao
    ->and(substr($rows[2], 0, 1))->toBe('') // cod_juros
    ->and(substr($rows[2], 0, 15))->toBe('') // data_juros
    ->and(substr($rows[2], 0, 15))->toBe('') // vlr_juros
    ->and(substr($rows[2], 0, 3))->toBe('') // cod_desconto
    ->and(substr($rows[2], 0, 8))->toBe('') // data_desconto
    ->and(substr($rows[2], 0, 15))->toBe('') // vlr_desconto
    ->and(substr($rows[2], 0, 15))->toBe('') // vlr_IOF
    ->and(substr($rows[2], 0, 15))->toBe('') // vlr_abatimento
    ->and(substr($rows[2], 0, 25))->toBe('') // seu_numero2
    ->and(substr($rows[2], 0, 1))->toBe('') // protestar
    ->and(substr($rows[2], 0, 2))->toBe('') // prazo_protesto
    ->and(substr($rows[2], 0, 1))->toBe('') // baixar
    ->and(substr($rows[2], 0, 3))->toBe('') // prazo_baixar
    ->and(substr($rows[2], 0, 2))->toBe('') // cod_moeda
    ->and(substr($rows[2], 0, 10))->toBe('') // num_contrato
    ->and(substr($rows[2], 0, 1))->toBe('') // filler6
    // Segmento Q
    ->and(substr($rows[3], 0, 3))->toBe('748') // codigo_banco
    ->and(substr($rows[3], 0, 4))->toBe('') // codigo_lote
    ->and(substr($rows[3], 0, 1))->toBe('') // tipo_registro
    ->and(substr($rows[3], 0, 5))->toBe('') // numero_registro
    ->and(substr($rows[3], 0, 1))->toBe('') // seguimento
    ->and(substr($rows[3], 0, 1))->toBe('') // filler1
    ->and(substr($rows[3], 0, 2))->toBe('') // codigo_movimento
    ->and(substr($rows[3], 0, 1))->toBe('') // tipo_inscricao
    ->and(substr($rows[3], 0, 15))->toBe('') // numero_inscricao
    ->and(substr($rows[3], 0, 40))->toBe('') // nome_pagador
    ->and(substr($rows[3], 0, 40))->toBe('') // endereco_pagador
    ->and(substr($rows[3], 0, 15))->toBe('') // bairro_pagador
    ->and(substr($rows[3], 0, 8))->toBe('') // cep_pagador
    ->and(substr($rows[3], 0, 15))->toBe('') // cidade_pagador
    ->and(substr($rows[3], 0, 2))->toBe('') // uf_pagador
    ->and(substr($rows[3], 0, 1))->toBe('') // tipo_incricao_avalista
    ->and(substr($rows[3], 0, 15))->toBe('') // numero_incricao_avalista
    ->and(substr($rows[3], 0, 40))->toBe('') // nome_avalista
    ->and(substr($rows[3], 0, 3))->toBe('') // filler14
    ->and(substr($rows[3], 0, 28))->toBe('') // filler15
    // Trailer de Lote
    ->and(substr($rows[4], 0, 3))->toBe('748') // codigo_banco
    // Trailer de Arquivo
    ->and(substr($rows[5], 0, 3))->toBe('748') // codigo_banco
    ;
});
