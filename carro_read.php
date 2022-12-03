<!-- HEADER -->

<?php include_once './Views/base/header.php'; ?>

<!-- CONTENT -->

<div class="container mt-5 d-flex justify-content-end">

    <a href="./carro_create.php" class="btn btn-primary">Crear Carro</a>
</div>

<h1 class="text-center display-4">Tabla Carro</h1>

<div class="container-fluid d-flex justify-content-center my-5">


    <table class="table text-center">
        <thead class="table-dark">

            <tr>
                <th scope="col">N</th>
                <th scope="col">ID</th>
                <th scope="col">PLACA</th>
                <th scope="col">MARCA</th>
                <th scope="col">CANTIDAD PASAJEROS</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody id="table">

            <?php

        include_once "./Controllers/carro_controller.php";

        $actas = new carro_controller();

        $array = json_decode($actas->carro_listar());

        $j = 1;


        for ($i = 0; $i < count($array); $i++) {
            echo
                "<tr><td>" . $j . "</td>"

                . "<td>" . $array[$i]->id_carro . "</td>"

                . "<td>" . $array[$i]->placa . "</td>"
                . "<td>" . $array[$i]->marca . "</td>"
                . "<td>" . $array[$i]->cant_pasajeros . "</td>"

                . "<td>
    <div class='d-flex justify-content-center'>

    <a href='./carro_delete.php?id=" . $array[$i]->id_carro . "' class='btn btn-danger mx-2'>ELIMINAR</a>

    <a href='./carro_update.php?id=" . $array[$i]->id_carro . "' class='btn btn-primary mx-2' > EDITAR</a>
    </div>
    </td></tr>";
            $j++;
        }




        ?>

        </tbody>
    </table>
</div>


<!-- FOOTER -->

<?php include_once './Views/base/footer.php'; ?>