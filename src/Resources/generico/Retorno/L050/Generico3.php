<?php

namespace Cnab\Resources\Generico\Retorno\L050;

use Cnab\AbstractRegistroRetorno;

class Generico3 extends AbstractRegistroRetorno
{
    public function get_R3U()
    {
        return $this->children[0];
    }
}