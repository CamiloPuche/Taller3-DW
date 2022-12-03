<!-- HEADER -->

<?php include_once './Views/base/header.php'; ?>

<!-- CONTENT -->

<div class="container mt-5 d-flex justify-content-end">

    <a href="./conductor_create.php" class="btn btn-primary">Crear Conductor</a>
</div>

<h1 class="text-center display-4">Tabla Conductores</h1>

<div class="container-fluid d-flex justify-content-center my-5">


    <table class="table text-center">
        <thead class="table-dark">

            <tr>
                <th scope="col">N</th>

                <th scope="col">ID</th>
                <th scope="col">CEDULA</th>
                <th scope="col">NOMBRES</th>
                <th scope="col">APELLIDOS</th>
                <th scope="col">FECHA CONTRATACION</th>

                <th scope="col">FECHA TERMINACION</th>

                <th scope="col">BONOS EXTRAS</th>
                <th scope="col">EMAIL</th>
                <th scope="col">FK VEHICULO</th>
                <th scope="col">FECHA</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody id="table">

            <?php

            include_once "./Controllers/conductor_controller.php";

            $actas = new conductor_controller();

            $array = json_decode($actas->conductor_listar());
            $j = 1;



            for ($i = 0; $i < count($array); $i++) {
                echo
                    "<tr><td>" . $j . "</td>"

                    . "<td>" . $array[$i]->id_conductor . "</td>"

                    . "<td>" . $array[$i]->cedula . "</td>"

                    . "<td>" . $array[$i]->nombres . "</td>"
                    . "<td>" . $array[$i]->apellidos . "</td>"
                    . "<td>" . $array[$i]->fecha_contratacion . "</td>"

                    . "<td>" . $array[$i]->fecha_terminacion . "</td>"

                    . "<td>" . $array[$i]->bono_extras . "</td>"

                    . "<td>" . $array[$i]->email . "</td>"

                    . "<td>" . $array[$i]->id_vehiculo . "</td>"

                    . "<td>" . $array[$i]->FECHA . "</td>"

                    . "<td>
    <div class='d-flex justify-content-center'>

    <a href='./conductor_delete.php?id=" . $array[$i]->id_conductor . "' class='btn btn-danger mx-2'>ELIMINAR</a>

    <a href='./conductor_update.php?id=" . $array[$i]->id_conductor . "' class='btn btn-primary mx-2' > EDITAR</a>
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