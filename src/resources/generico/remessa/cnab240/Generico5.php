<?php
namespace Cnab\resources\generico\remessa\cnab240;

use Cnab\AbstractRegistroRemessa;
use Cnab\AbstractRemessa;

class Generico5 extends AbstractRegistroRemessa
{
    protected function set_codigo_lote($value)
    {
        //ArquivoAbstract::$loteCounter++; 
        $this->data['codigo_lote'] = AbstractRemessa::$loteCounter;
    }

    protected function set_qtd_registros($value)
    {
        $lote                        = AbstractRemessa::getLote(AbstractRemessa::$loteCounter);
        $this->data['qtd_registros'] = $lote->get_counter() + 1;
    }
}