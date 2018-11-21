<?php

namespace Cnab\resources\generico\retorno\L050;

use Cnab\AbstractRegistroRetorno;
use Cnab\AbstractRemessa;
use Cnab\Especie;
use Exception;

class Generico3 extends AbstractRegistroRetorno
{
    public function get_R3U()
    {
        return $this->children[0];
    }
}