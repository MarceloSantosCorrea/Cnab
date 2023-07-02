<?php

namespace Cnab\Resources\Generico\Remessa\Cnab400;

use Cnab\AbstractRegistroRemessa;
use Cnab\AbstractRemessa;

class Generico9 extends AbstractRegistroRemessa
{
    protected function set_numero_registro($value)
    {
        $lote = AbstractRemessa::getLote(0);
        $this->data['numero_registro'] = $lote->get_counter();
    }

    protected function set_mensagem_1($value)
    {
        $mensagem = (isset(AbstractRemessa::$entryData['mensagem'])) ? explode(PHP_EOL, AbstractRemessa::$entryData['mensagem']) : [];
        $this->data['mensagem_1'] = count($mensagem) >= 1 ? $mensagem[0] : ' ';
    }

    protected function set_mensagem_2($value)
    {
        $mensagem = (isset(AbstractRemessa::$entryData['mensagem'])) ? explode(PHP_EOL, AbstractRemessa::$entryData['mensagem']) : [];
        $this->data['mensagem_2'] = count($mensagem) >= 2 ? $mensagem[1] : ' ';
    }

    protected function set_mensagem_3($value)
    {
        $mensagem = (isset(AbstractRemessa::$entryData['mensagem'])) ? explode(PHP_EOL, AbstractRemessa::$entryData['mensagem']) : [];
        $this->data['mensagem_3'] = count($mensagem) >= 3 ? $mensagem[2] : ' ';
    }

    protected function set_mensagem_4($value)
    {
        $mensagem = (isset(AbstractRemessa::$entryData['mensagem'])) ? explode(PHP_EOL, AbstractRemessa::$entryData['mensagem']) : [];
        $this->data['mensagem_4'] = count($mensagem) >= 4 ? $mensagem[3] : ' ';
    }

    protected function set_mensagem_5($value)
    {
        $mensagem = (isset(AbstractRemessa::$entryData['mensagem'])) ? explode(PHP_EOL, AbstractRemessa::$entryData['mensagem']) : [];
        $this->data['mensagem_5'] = count($mensagem) >= 5 ? $mensagem[4] : ' ';
    }
}