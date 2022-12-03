<?php

require_once 'Models/connection.php';
require_once 'Models/carroModel.php';

class conductor
{
    private $database;
    public $carro_fk;

    public function __construct()
    {
        $this->database = connection::conectar();
        $this->carro_fk = new carro();
    }

    public function validar_datos($datos)
    {
        $cedula = $datos['cedula'];
        $bono_extras = $datos['bono_extras'];

        if (!is_numeric($cedula)) {
            return "Error en el campo ´cedula´ solo se permiten datos numericos";
        }
        if (!is_float($bono_extras)) {
            return "Error en el campo ´bono_extras´ solo se permiten datos numericos";
        }

        return "Datos correctos";
    }

    public function codificar_Json($dato, $valor)
    {
        header('Content-type:application/json;charset=utf-8');
        return json_encode(
            [
                $dato => $valor
            ]
        );
    }

    public function conductor_get_fk($id_conductor)
    {
        return $this->conductor_read($id_conductor);
    }

    public function conductor_get()
    {
        $statement = $this->database->prepare("SELECT * FROM conductor");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($result);
    }


    public function conductor_read()
    {
        $statement = $this->database->prepare("SELECT * from conductor WHERE id_conductor = ?");

        $statement->execute([
            $_GET['id']
        ]);

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }


    public function conductor_create()
    {
        $statement = $this->database->prepare("INSERT INTO conductor (cedula, nombres, apellidos, fecha, fecha_contratacion, fecha_terminacion, bono_extras, email, id_vehiculo) VALUES (?,?,?,?,?,?,?,?,?)");
        $statement->execute([
            $_POST['cedula'],
            $_POST['nombre'],
            $_POST['apellido'],
            $_POST['fecha'],
            $_POST['fecha_contratacion'],
            $_POST['fecha_terminacion'],
            $_POST['bonos'],
            $_POST['email'],
            $_POST['fk_vehiculo'],

        ]);


        $array = ["Mensaje" => "Conductor registrado exitosamente"];

        return $array;

    }

    public function conductor_update()
    {


        $statement = $this->database->prepare("UPDATE conductor SET cedula = ?, nombres = ?, apellidos = ?, fecha = ?, fecha_contratacion = ?, fecha_terminacion = ?, bono_extras = ?, email = ?, id_vehiculo = ? WHERE id_conductor = ?");

        $statement->execute(
            [
                $_POST['cedula'],
                $_POST['nombre'],
                $_POST['apellido'],
                $_POST['fecha'],
                $_POST['fecha_contratacion'],
                $_POST['fecha_terminacion'],
                $_POST['bonos'],
                $_POST['email'],
                $_POST['fk_vehiculo'],
                $_POST['id'],
            ]
        );

        $array = ["Mensaje" => "Conductor Editado exitosamente"];

        array_push($array, [
            "id" => $_POST['id'],
            "nombres" => $_POST['nombre'],
            "apellidos" => $_POST['apellido'],
            "cedula" => $_POST['cedula'],
            "fecha" => $_POST['fecha'],
            "fecha_contratacion" => $_POST['fecha_contratacion'],
            "fecha_terminacion" => $_POST['fecha_terminacion'],
            "bonos" => $_POST['bonos'],
            "email" => $_POST['email'],
            "fk_vehiculo" => $_POST['fk_vehiculo'],

        ]);

        return $array;

    }

    public function conductor_delete()
    {

        $statement = $this->database->prepare("DELETE FROM conductor WHERE id_conductor = ?");

        $statement->execute([
            $_POST['id']
        ]);

        $array = ["Mensaje" => "Conductor eliminado correctamente"];

        return $array;
    }
}