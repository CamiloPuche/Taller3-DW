<?php

include_once('./Models/connection.php');

class reporteModelo
{

    private $table = 'conductor';
    private $database;

    public function __construct()
    {
        $this->database = connection::conectar();
    }


    public function generar()
    {


        try {

            //verificar si existe el usuario
            $sql = $this->database->prepare("SELECT * FROM $this->table inner join carro on $this->table.id_vehiculo = carro.id_carro WHERE fecha_terminacion BETWEEN ? AND ?");


            $sql->execute([
                $_POST['fecha_ini'],
                $_POST['fecha_fin']
            ]);

            $result = $sql->fetchAll(PDO::FETCH_OBJ);


            return $result;
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }


}