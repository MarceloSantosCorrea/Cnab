<?php

namespace Cnab;

class Remessa extends AbstractRemessa
{
    public function __construct($banco, $layout, $data)
    {
        parent::__construct($banco, $layout, $data);
    }
}