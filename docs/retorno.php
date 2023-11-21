<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Cnab\Retorno;

$fileContent = file_get_contents(__DIR__ . '/4342_966401_2433940_231121_C240_20.RET');

try {
    $arquivo = new Retorno($fileContent);
    dd($arquivo->getRegistros());
} catch (Exception $e) {
    echo $e->getMessage();
}
