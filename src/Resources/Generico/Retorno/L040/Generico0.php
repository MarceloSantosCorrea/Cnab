<?php

namespace Cnab\Resources\Generico\Retorno\L040;

use Cnab\AbstractRegistroRetorno;

class Generico0 extends AbstractRegistroRetorno
{
    public function getRegistros($lote = 1)
    {
        $lote = $this->children[$lote - 1];

        return $lote->getChilds();
    }
}