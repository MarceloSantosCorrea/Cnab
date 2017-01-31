<?php
namespace Cnab\resources\generico\remessa\cnab400;
use Cnab\RegistroRemAbstract;
use Cnab\RemessaAbstract;
use Exception;

class Generico2 extends RegistroRemAbstract
{
    protected function set_numero_registro($value)
    {
        $lote                          = RemessaAbstract::getLote(0);
        $this->data['numero_registro'] = $lote->get_counter();
    }


}

?>
