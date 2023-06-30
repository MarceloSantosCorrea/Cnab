<?php

namespace Cnab\resources\generico\remessa\cnab400;

use Cnab\AbstractRegistroRemessa;
use Cnab\AbstractRemessa;

class Generico0 extends AbstractRegistroRemessa
{
    protected $counter = 1;

    public function get_counter()
    {
        $this->counter++;

        return $this->counter;
    }

    public function inserirDetalhe($data)
    {
        $class = 'Cnab\resources\\' . AbstractRemessa::$banco . '\remessa\\' . AbstractRemessa::$layout . '\Registro1';
        $this->children[] = new $class($data);
    }

    protected function set_data_gravacao($value)
    {
        $this->data['data_gravacao'] = date('Y-m-d');
    }


}