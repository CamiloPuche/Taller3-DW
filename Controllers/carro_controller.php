<?php

require_once 'Models/carroModel.php';

class carro_controller
{
    private $carro;

    public function __construct()
    {
        $this->carro = new carro();
    }

    public function carro_listar()
    {
        return json_encode($this->carro->carro_get());
    }

    public function carro_read()
    {
        return json_encode($this->carro->carro_read());
    }

    public function carro_create()
    {
        header('Content-type:application/json;charset=utf-8');
        return json_encode($this->carro->carro_create());
    }

    public function carro_update()
    {
        header('Content-type:application/json;charset=utf-8');
        return json_encode($this->carro->carro_update());
    }

    public function carro_delete()
    {
        header('Content-type:application/json;charset=utf-8');
        return json_encode($this->carro->carro_delete());
    }

}