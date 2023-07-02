<?php

namespace Cnab\Resources\Generico\Remessa\cnab400;

use Cnab\AbstractRegistroRemessa;
use Cnab\AbstractRemessa;

class Generico2 extends AbstractRegistroRemessa
{
    protected function set_numero_registro($value)
    {
        $lote = AbstractRemessa::getLote(0);
        $this->data['numero_registro'] = $lote->get_counter();
    }
}