<?php

namespace Cnab;

use DateTime;

abstract class AbstractRegistroRetorno
{
    protected $data;
    protected $meta;
    protected $children;

    public function __construct($linhaTxt)
    {
        $posicao = 0;
        foreach ($this->meta as $key => $value) {

            $valor = (isset($value['precision'])) ?
                substr($linhaTxt, $posicao, $value['tamanho'] + $value['precision']) :
                substr($linhaTxt, $posicao, $value['tamanho']);

            $this->$key = $valor;
            $posicao += (isset($value['precision'])) ? $value['tamanho'] + $value['precision'] : $value['tamanho'];
        }
    }

    public function __get($prop)
    {
        if (method_exists($this, 'get_' . $prop)) {
            return call_user_func([$this, 'get_' . $prop]);
        } else {
            return $this->data[$prop];
        }
    }

    public function __set($prop, $value)
    {
        if (method_exists($this, 'set_' . $prop)) {
            call_user_func([$this, 'set_' . $prop], $value);
        } else {
            $metaData = (isset($this->meta[$prop])) ? $this->meta[$prop] : null;
            switch ($metaData['tipo']) {
                case 'decimal':
                    $inteiro = abs((int)substr($value, 0, $metaData['tamanho']));
                    $decimal = abs((int)substr($value, $metaData['tamanho'], $metaData['precision'])) / 100;
                    $retorno = ($inteiro + $decimal);
                    $this->data[$prop] = $retorno;
                    break;
                case 'int':
                    $retorno = abs((int)$value);
                    $this->data[$prop] = $retorno;
                    break;
                case 'alfa':
                    $retorno = trim($value);
                    $this->data[$prop] = $retorno;
                    break;
                case 'date':
                    if ($value == '00000000' || $value == '        ')
                        $this->data[$prop] = $value;
                    else
                        if ($metaData['tamanho'] == 6) {
                            $data = DateTime::createFromFormat('dmy', sprintf('%06d', $value));
                            $retorno = $data->format('Y-m-d');
                            $this->data[$prop] = $retorno;

                        } elseif ($metaData['tamanho'] == 8) {
                            $data = DateTime::createFromFormat('dmY', sprintf('%08d', $value));
                            $retorno = $data->format("Y-m-d");
                            $this->data[$prop] = $retorno;
                        }

                    break;
                default:
                    $this->data[$prop] = $value;
                    break;
            }
        }
    }

    public function ___get($prop)
    {
        if (isset($this->meta[$prop])) {
            $metaData = (isset($this->meta[$prop])) ? $this->meta[$prop] : null;
            switch ($metaData['tipo']) {
                case 'decimal':
                    return ($this->data[$prop]) ? number_format($this->data[$prop], $metaData['precision'], ',', '.') : '';
                case 'int':
                    return (isset($this->data[$prop])) ? abs((int)$this->data[$prop]) : '';
                case 'alfa':
                    return $this->data[$prop] ?: '';
                case $metaData['tipo'] == 'date' && $metaData['tamanho'] == 6:
                    return ($this->data[$prop]) ? date('d/m/y', strtotime($this->data[$prop])) : '';
                case $metaData['tipo'] == 'date' && $metaData['tamanho'] == 8:
                    return ($this->data[$prop]) ? date('d/m/Y', strtotime($this->data[$prop])) : '';
                default:
                    return null;
            }
        }
    }

    public function toArray()
    {
        return $this->data;
    }
}