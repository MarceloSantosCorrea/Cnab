<?php

namespace Cnab\Resources\generico\remessa\cnab240;

use Cnab\AbstractRegistroRemessa;
use Cnab\AbstractRemessa;

class Generico9 extends AbstractRegistroRemessa
{
    protected function set_qtd_lotes($value)
    {
        //ArquivoAbstract::$loteCounter++; 
        $this->data['qtd_lotes'] = AbstractRemessa::$loteCounter;
    }

    protected function set_qtd_registros($value)
    {
        $lote = AbstractRemessa::getLote(AbstractRemessa::$loteCounter);
        $this->data['qtd_registros'] = $lote->get_counter() + 2;
    }
}