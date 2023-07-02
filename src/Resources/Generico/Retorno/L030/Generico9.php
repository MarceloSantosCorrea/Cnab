<?php

namespace Cnab\Resources\Generico\Retorno\L030;

use Cnab\AbstractRegistroRetorno;
use Cnab\AbstractRemessa;

class Generico9 extends AbstractRegistroRetorno
{
    protected function set_qtd_lotes($value)
    {
        //ArquivoAbstract::$loteCounter++; 
        $this->data['qtd_lotes'] = AbstractRemessa::$loteCounter;
    }

    protected function set_qtd_registros($value)
    {
        $lote = AbstractRemessa::getLote(AbstractRemessa::$loteCounter);
        $this->data['qtd_registros'] = $lote->get_counter() + 1;
    }
}