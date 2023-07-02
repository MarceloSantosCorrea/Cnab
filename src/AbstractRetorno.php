<?php

namespace Cnab;

use Exception;

abstract class AbstractRetorno
{
    public static $banco;
    public static $layout;
    public static $loteCounter = 1;
    public static $lines;
    public static $linesCounter = 0;
    private $children = [];

    public function __construct($conteudo)
    {
        $conteudo = str_replace("\r\n", "\n", $conteudo);

        $lines = explode("\n", $conteudo);
        if (count($lines) < 2)
            throw new Exception("Invalid file.");

        $length = strlen($lines[0]);

        if ($length == 240 || $length == 241) {
            $layout_versao = substr($lines[0], 163, 3);
            $codigo_banco = substr($lines[0], 0, 3);
            $codigo_tipo = substr($lines[0], 142, 1);

        } elseif ($length == 400 || $length == 401) {
            $layout_versao = '400';
            $codigo_banco = substr($lines[0], 76, 3);
            $codigo_tipo = substr($lines[0], 1, 1);

        } else {
            throw new Exception("Não foi possivel detectar o tipo do arquivo, provavelmente esta corrompido");
        }

        if ($codigo_tipo == '1') {
            throw new Exception("Esse é um arqvuio de remessa, nao pode ser processado aqui.");
        }

        self::$banco = "B" . $codigo_banco;
        self::$layout = "L" . $layout_versao;
        self::$lines = $lines;

        if ($length == 240 || $length == 241) {
            $class = 'Cnab\Resources\\' . self::$banco . '\retorno\\' . self::$layout . '\Registro0';
            $this->children['registro0'] = (new $class($lines[0]))->toArray();

            for ($i = 1; $i < count($lines); $i++) {

                if (substr($lines[$i], 7, 1) == 1) {
                    $detalhesCount = 0;

                    $class = 'Cnab\Resources\\' . self::$banco . '\retorno\\' . self::$layout . '\Registro1';
                    $this->children['lotes'][self::$loteCounter]['registro1'] = (new $class($lines[$i]))->toArray();
                }

                if (substr($lines[$i], 7, 1) == 3) {

                    if (substr($lines[$i], 13, 1) == 'T') {
                        $class = 'Cnab\Resources\\' . self::$banco . '\retorno\\' . self::$layout . '\Registro3T';
                        $detalhe[$detalhesCount]['registro3T'] = (new $class($lines[$i]))->toArray();
                    }

                    if (substr($lines[$i], 13, 1) == 'U') {
                        $class = 'Cnab\Resources\\' . self::$banco . '\retorno\\' . self::$layout . '\Registro3U';
                        $detalhe[$detalhesCount]['registro3U'] = (new $class($lines[$i]))->toArray();

                        $detalhesCount++;
                    }

                    $this->children['lotes'][self::$loteCounter]['detalhes'] = $detalhe;
                }

                if (substr($lines[$i], 7, 1) == 5) {
                    $detalhesCount = 0;

                    $class = 'Cnab\Resources\\' . self::$banco . '\retorno\\' . self::$layout . '\Registro5';
                    $this->children['lotes'][self::$loteCounter]['registro5'] = (new $class($lines[$i]))->toArray();
                    self::$loteCounter++;
                }
            }

            $class = 'Cnab\Resources\\' . self::$banco . '\retorno\\' . self::$layout . '\Registro9';
            $this->children['registro9'] = (new $class($lines[count($lines) - 2]))->toArray();

        } elseif ($length == 400 || $length == 401) {

            $class = 'Cnab\Resources\\' . self::$banco . '\retorno\\' . self::$layout . '\Registro0';
            $this->children['registro0'] = (new $class($lines[0]))->toArray();

            $class = 'Cnab\Resources\\' . self::$banco . '\retorno\\' . self::$layout . '\Registro1';
            for ($i = 1; $i < count($lines) - 2; $i++) {

                $this->children['registro1'][] = (new $class($lines[$i]))->toArray();
            }

            $class = 'Cnab\Resources\\' . self::$banco . '\retorno\\' . self::$layout . '\Registro9';
            $this->children['registro9'] = (new $class($lines[count($lines) - 2]))->toArray();
        }

        return $this->children;
    }

    public function getRegistros()
    {
        return $this->children;
    }
}