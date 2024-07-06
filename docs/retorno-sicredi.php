<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Cnab\Retorno;

$fileContent = file_get_contents(__DIR__ . '/91107704.CRT');

try {
    $arquivo = new Retorno($fileContent);
    dd($arquivo->getRegistros());
} catch (Exception $e) {
    echo $e->getMessage();
}
