<?php

namespace Cnab\Resources\Generico\Retorno\L030;

use Cnab\AbstractRegistroRetorno;
use Cnab\AbstractRemessa;

class Generico5 extends AbstractRegistroRetorno
{
    protected function set_codigo_lote($value)
    {
        //ArquivoAbstract::$loteCounter++; 
        $this->data['codigo_lote'] = AbstractRemessa::$loteCounter;
    }

    protected function set_qtd_registros($value)
    {
        $lote = AbstractRemessa::getLote(AbstractRemessa::$loteCounter);
        $this->data['qtd_registros'] = $lote->get_counter();
    }
}


