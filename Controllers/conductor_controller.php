<?php

require_once './Models/conductorModel.php';

class conductor_controller
{
    private $conductor;


    public function __construct()
    {
        $this->conductor = new conductor();
    }
    public function conductor_listar()
    {
        return $this->conductor->conductor_get();
    }

    public function conductor_read()
    {
        return json_encode($this->conductor->conductor_read());
    }

    public function conductor_create()
    {
        header('Content-type:application/json;charset=utf-8');
        return json_encode($this->conductor->conductor_create());
    }

    public function conductor_update()
    {
        header('Content-type:application/json;charset=utf-8');
        return json_encode($this->conductor->conductor_update());
    }

    public function conductor_delete()
    {
        header('Content-type:application/json;charset=utf-8');
        return json_encode($this->conductor->conductor_delete());
    }
}