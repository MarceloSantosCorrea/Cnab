<?php

namespace Cnab\Resources\generico\Retorno\L050;

use Cnab\AbstractRegistroRetorno;

class Generico0 extends AbstractRegistroRetorno
{
    public function getRegistros($lote = 1)
    {
        if (!is_null($this->children[$lote - 1])) {
            $lote = $this->children[$lote - 1];

            return $lote->getChilds();
        }

        return $this->data;
    }
}