<?php

namespace Cnab;

abstract class AbstractRemessa
{
    public static $banco;
    public static $layout;
    public static $hearder;
    public static $entryData;
    public static $loteCounter = 1;
    public static $retorno = [];
    private static $children = [];

    public function __construct($banco, $layout, $data)
    {
        self::$banco = 'B' . $banco;
        self::$layout = $layout;
        $class = '\Cnab\Resources\\' . self::$banco . '\remessa\\' . self::$layout . '\Registro0';
        self::$entryData = $data;
        self::$hearder = new $class($data);
        self::$children[] = self::$hearder;
    }

    public static function getLote($index)
    {
        return self::$children[$index];
    }

    public function inserirDetalhe($data)
    {
        $class = '\Cnab\Resources\\' . self::$banco . '\remessa\\' . self::$layout . '\Registro1';
        self::addChild(new $class($data));
    }

    static private function addChild(AbstractRegistroRemessa $child)
    {
        self::$children[] = $child;
    }

    public function changeLayout($newLayout)
    {
        self::$layout = $newLayout;
    }

    public function addLote(array $data)
    {
        if (strpos(self::$layout, '240')) {
            $class = '\Cnab\Resources\\' . self::$banco . '\remessa\\' . self::$layout . '\Registro1';
            $loteData = $data ? $data : AbstractRemessa::$entryData;
            $lote = new $class($loteData);
            self::addChild($lote);
        } else {
            $lote = $this;
        }

        return $lote;
    }

    public function getText()
    {
        foreach (self::$children as $child) {
            $child->getText();
        }
        $class = '\Cnab\Resources\\' . self::$banco . '\remessa\\' . self::$layout . '\Registro9';
        $headerArquivo = new $class(['1' => 1]);
        $headerArquivo->getText();

        return implode("\r\n", self::$retorno) . "\r\n";
    }
}