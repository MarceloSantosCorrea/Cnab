<?php

namespace Cnab;

abstract class AbstractRegistroRetorno
{
    protected $data; // array contendo os dados do objeto
    protected $meta;
    protected $children;

    /* método __construct()
    * instancia registro qualquer
    * @$data = array de dados para o registro
    */
    public function __construct($linhaTxt)
    {
        $posicao = 0;
        foreach ($this->meta as $key => $value) {

            $valor = (isset($value['precision'])) ?
                substr($linhaTxt, $posicao, $value['tamanho'] + $value['precision']) :
                substr($linhaTxt, $posicao, $value['tamanho']);

            $this->$key = $valor;
            $posicao    += (isset($value['precision'])) ? $value['tamanho'] + $value['precision'] : $value['tamanho'];
        }
    }

    /*
    * método __set()
    * executado sempre que uma propriedade for atribuída.
    */
    public function __set($prop, $value)
    {
        // verifica se existe método set_<propriedade>
        if (method_exists($this, 'set_' . $prop)) {
            // executa o método set_<propriedade>
            call_user_func([$this, 'set_' . $prop], $value);
        } else {
            $metaData = (isset($this->meta[$prop])) ? $this->meta[$prop] : null;
            switch ($metaData['tipo']) {
                case 'decimal':
                    $inteiro           = abs(substr($value, 0, $metaData['tamanho']));
                    $decimal           = abs(substr($value, $metaData['tamanho'], $metaData['precision'])) / 100;
                    $retorno           = ($inteiro + $decimal);
                    $this->data[$prop] = $retorno;
                    break;
                case 'int':
                    $retorno           = abs($value);
                    $this->data[$prop] = $retorno;
                    break;
                case 'alfa':
                    $retorno           = trim($value);
                    $this->data[$prop] = $retorno;
                    break;
                case 'date':
                    if ($metaData['tamanho'] == 6) {
                        $data              = \DateTime::createFromFormat('dmy', sprintf('%06d', $value));
                        $retorno           = $data->format('Y-m-d');
                        $this->data[$prop] = $retorno;

                    } elseif ($metaData['tamanho'] == 8) {
                        $data              = \DateTime::createFromFormat('dmY', sprintf('%08d', $value));
                        $retorno           = $data->format("Y-m-d");
                        $this->data[$prop] = $retorno;
                    }
                    break;
                default:
                    $this->data[$prop] = $value;
                    break;
            }
        }
    }

    /*
    * método __get()
    * executado sempre que uma propriedade for requerida
    */
    public function __get($prop)
    {
        // verifica se existe método get_<propriedade>
        if (method_exists($this, 'get_' . $prop)) {
            // executa o método get_<propriedade>
            return call_user_func([$this, 'get_' . $prop]);
        } else {
            return $this->data[$prop];
        }
    }

    /*
    * método ___get()
    * metodo auxiliar para ser chamado para dentro de metodo get personalizado
    */
    public function ___get($prop)
    {
        // retorna o valor da propriedade
        if (isset($this->meta[$prop])) {
            $metaData = (isset($this->meta[$prop])) ? $this->meta[$prop] : null;
            switch ($metaData['tipo']) {
                case 'decimal':
                    return ($this->data[$prop]) ? number_format($this->data[$prop], $metaData['precision'], ',', '.') : '';
                    break;
                case 'int':
                    return (isset($this->data[$prop])) ? abs($this->data[$prop]) : '';
                    break;
                case 'alfa':
                    return ($this->data[$prop]) ? $this->prepareText($this->data[$prop]) : '';
                    break;
                case $metaData['tipo'] == 'date' && $metaData['tamanho'] == 6:
                    return ($this->data[$prop]) ? date("d/m/y", strtotime($this->data[$prop])) : '';
                    break;
                case $metaData['tipo'] == 'date' && $metaData['tamanho'] == 8:
                    return ($this->data[$prop]) ? date("d/m/Y", strtotime($this->data[$prop])) : '';
                    break;
                default:
                    return null;
                    break;
            }
        }
    }

    public function get_meta()
    {
        return $this->meta;
    }

    /*
    * método getUnformated()
    * busca o valor de dentro do campo dentro do objeto de forma simples sem formataÃ§Ã£o de valor por exemplo
    */
    public function getUnformated($prop)
    {
        // retorna o valor da propriedade
        if (isset($this->data[$prop])) {
            return $this->data[$prop];
        }
    }

    /*
    * método getChilds()
    * Metodo que retorna todos os filhos
    */
    public function getChilds()
    {
        return $this->children;
    }

    /*
    * método getChild()
    * Metodo que retorna um filho
    */
    public function getChild($index = 0)
    {
        return $this->children[$index];
    }
}