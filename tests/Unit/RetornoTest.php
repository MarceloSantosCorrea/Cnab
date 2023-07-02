<?php

use Cnab\Retorno;

test('deve processar retornos PRE CRI-PRODUCAO', function () {
    $path = realpath(__DIR__ . '/../../src/samples/RETORNOCEF29062023434.RET');
    $file = file_get_contents($path);
    $contentFile = str_replace("\r\n", "\n", $file);

    $arquivo = new Retorno($contentFile);

    expect($arquivo)->toBeInstanceOf(Retorno::class);
});
