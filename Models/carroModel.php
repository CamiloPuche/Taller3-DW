<?php
// hola este es un mensaje para git
// y github
require_once 'connection.php';
class carro
{
    private $database;

    public function __construct()
    {
        $this->database = connection::conectar();
    }

    public function validar_datos($datos)
    {
        $cant_pasajeros = $datos['cant_pasajeros'];
        if (!is_numeric($cant_pasajeros)) {
            return "Error en el campo ´cant_pasajeros´ solo se permiten datos numericos";
        }
        return "Datos correctos";
    }

    public function carro_create()
    {

        $statement = $this->database->prepare("INSERT INTO carro (placa, marca, cant_pasajeros) VALUES (?,?,?)");

        $statement->execute([
            $_POST['placa'],
            $_POST['marca'],
            $_POST['cant_pasajero'],
        ]);

        $array = ["Mensaje" => "Carro registrado exitosamente"];

        return $array;

    }

    public function carro_get()
    {
        $statement = $this->database->prepare("SELECT * FROM carro");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function carro_read()
    {
        $statement = $this->database->prepare("SELECT * from carro WHERE id_carro = ?");

        $statement->execute([
            $_GET['id']
        ]);

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        if ($result == false) {
            return null;
        }

        return $result;
    }

    public function carro_update()
    {

        $statement = $this->database->prepare("UPDATE carro SET placa = ?, marca = ?, cant_pasajeros = ? WHERE id_carro = ?");

        $statement->execute([
            $_POST['placa'],
            $_POST['marca'],
            $_POST['cant_pasajeros'],
            $_POST['id']
        ]);

        $array = ["Mensaje" => "Carro actualizado exitosamente"];

        array_push($array, [
            "id" => $_POST['id'],
            "placa" => $_POST['placa'],
            "marca" => $_POST['marca'],
            "cantidad de pasajeros" => $_POST['cant_pasajeros'],
        ]);

        return $array;
    }

    public function carro_delete()
    {
        $result = $this->carro_read();

        $statement = $this->database->prepare("DELETE FROM carro WHERE id_carro = ?");

        $statement->execute([
            $_POST['id']
        ]);
        $array = ["Mensaje" => "Registro elimando Exitosamente"];

        array_push($array, $result);

        return $array;
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
}