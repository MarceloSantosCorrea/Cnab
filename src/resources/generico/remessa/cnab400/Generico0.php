<?php
namespace Cnab\resources\generico\remessa\cnab400;
use Cnab\RegistroRemAbstract;
use Cnab\RemessaAbstract;
use Exception;

class Generico0 extends RegistroRemAbstract
{
    protected $counter = 1;

    public function get_counter()
    {
        $this->counter++;

        return $this->counter;
    }

    public function inserirDetalhe($data)
    {
        $class            = 'Cnab\resources\\' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro1';
        $this->children[] = new $class($data);
    }

    protected function set_data_gravacao($value)
    {
        $this->data['data_gravacao'] = date('Y-m-d');
    }


}

?>
