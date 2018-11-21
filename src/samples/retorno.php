<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Cnab\Retorno;


$fileContent = file_get_contents('src/samples/retorno-000021.ret');
//$fileContent = file_get_contents('src/samples/RETORNO-PRE-REMESSA-02-ok.ret');

try {
    $arquivo = new Retorno($fileContent);
} catch (\Exception $e) {
    echo $e->getMessage();
}

dd($arquivo);
?>

<html>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>codigo_banco</th>
                    <th>codigo_lote</th>
                    <th>tipo_registro</th>
                    <th>numero_registro</th>
                    <th>seguimento</th>
                    <th>codigo_movimento</th>
                    <th>agencia</th>
                    <th>agencia_dv</th>
                    <th>codigo_convenio</th>
                    <th>num_banco_pagadores</th>
                    <th>carteira</th>
                    <th>nosso_numero</th>
                    <th>dv_nosso_numero</th>
                    <th>codigo_carteira</th>
                    <th>seu_numero</th>
                    <th>data_vencimento</th>
                    <th>vlr_nominal</th>
                    <th>cod_banco_receb</th>
                    <th>agencia_recebedora</th>
                    <th>seu_numero2</th>
                    <th>codigo_moeda</th>
                    <th>tipo_inscricao</th>
                    <th>numero_inscricao</th>
                    <th>nome_pagador</th>
                    <th>vlr_tarifa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arquivo->getRegistros() as $registro): ?>
                    <tr>
                        <td><?= $registro->codigo_banco ?> </td>
                        <td><?= $registro->codigo_lote ?> </td>
                        <td><?= $registro->tipo_registro ?> </td>
                        <td><?= $registro->numero_registro ?> </td>
                        <td><?= $registro->seguimento ?> </td>
                        <td><?= $registro->codigo_movimento ?> </td>
                        <td><?= $registro->agencia ?> </td>
                        <td><?= $registro->agencia_dv ?> </td>
                        <td><?= $registro->codigo_convenio ?> </td>
                        <td><?= $registro->num_banco_pagadores ?> </td>
                        <td><?= $registro->carteira ?> </td>
                        <td><?= $registro->nosso_numero ?> </td>
                        <td><?= $registro->dv_nosso_numero ?> </td>
                        <td><?= $registro->codigo_carteira ?> </td>
                        <td><?= $registro->seu_numero ?> </td>
                        <td><?= $registro->data_vencimento ?> </td>
                        <td><?= $registro->vlr_nominal ?> </td>
                        <td><?= $registro->cod_banco_receb ?> </td>
                        <td><?= $registro->agencia_recebedora ?> </td>
                        <td><?= $registro->seu_numero2 ?> </td>
                        <td><?= $registro->codigo_moeda ?> </td>
                        <td><?= $registro->tipo_inscricao ?> </td>
                        <td><?= $registro->numero_inscricao ?> </td>
                        <td><?= $registro->nome_pagador ?> </td>
                        <td><?= $registro->vlr_tarifa ?> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>

<!--foreach ($registros as $registro) {-->
<!---->
<!--if (is_object($registro)) {-->
<!--echo 'codigo_banco: ' .  . '<br/>';-->
<!--echo 'codigo_lote: ' .  . '<br/>';-->
<!--echo 'tipo_registro: ' .  . '<br/>';-->
<!--echo 'numero_registro: ' .  . '<br/>';-->
<!--echo 'seguimento: ' .  . '<br/>';-->
<!--echo 'codigo_movimento: ' .  . '<br/>';-->
<!--echo 'agencia: ' .  . '<br/>';-->
<!--echo 'agencia_dv: ' .  . '<br/>';-->
<!--echo 'codigo_convenio: ' .  . '<br/>';-->
<!--echo 'num_banco_pagadores: ' .  . '<br/>';-->
<!--echo 'carteira: ' .  . '<br/>';-->
<!--echo 'nosso_numero: ' .  . '<br/>';-->
<!--echo 'dv_nosso_numero: ' .  . '<br/>';-->
<!--echo 'codigo_carteira: ' .  . '<br/>';-->
<!--echo 'seu_numero: ' .  . '<br/>';-->
<!--echo 'data_vencimento: ' .  . '<br/>';-->
<!--echo 'vlr_nominal: ' .  . '<br/>';-->
<!--echo 'cod_banco_receb: ' .  . '<br/>';-->
<!--echo 'agencia_recebedora: ' .  . '<br/>';-->
<!--echo 'seu_numero2: ' .  . '<br/>';-->
<!--echo 'codigo_moeda: ' .  . '<br/>';-->
<!--echo 'tipo_inscricao: ' .  . '<br/>';-->
<!--echo 'numero_inscricao: ' .  . '<br/>';-->
<!--echo 'nome_pagador: ' .  . '<br/>';-->
<!--echo 'vlr_tarifa: ' .  . '<br/>';-->
<!---->
<!--exit;-->
<!---->
<!--//    if ($registro->codigo_movimento == 2) {-->
<!--//-->
<!--//        echo $nossoNumero   = $registro->nosso_numero;-->
<!--//        echo $valorRecebido = $registro->vlr_pago;-->
<!--//        $dataPagamento = $registro->data_ocorrencia;-->
<!--//        $carteira      = $registro->carteira;-->
<!--//        echo $dataPagamento;-->
<!--//        // você ja pode dar baixa-->
<!--//    }-->
<!--} else {-->
<!--echo "-->
<!--<pre>";-->
<!--        print_r($registro);-->
<!--        echo "</pre>";-->
<!--}-->
<!---->
<!---->
<!--}-->
