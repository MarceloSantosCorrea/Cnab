<?php

namespace Cnab\Resources\Generico\Retorno\L400;

use Cnab\AbstractRegistroRetorno;

class Generico0 extends AbstractRegistroRetorno
{
    public function getRegistros($lote = 1)
    {
        return $this->getChilds();
    }
}