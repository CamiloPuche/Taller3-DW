<!-- HEADER -->

<?php
include_once './Views/base/header.php';

include_once './Controllers/conductor_controller.php';

$controller = new conductor_controller();

$array = json_decode($controller->conductor_read());

#var_dump($array[0]);

?>


<div class="container mt-5 ">

    <form action="./ruteador.php?controller=conductor&action=conductor_update" method="POST"
        enctype="multipart/form-data">

        <h4 class="mb-3 text-center display-4">Editar Conductor</h4>


        <p><strong>Nombre</strong></p>

        <input class="form-control mb-3" type="text" name="nombre" placeholder="Nombres"
            value="<?php echo $array[0]->nombres ?>" required>

        <p><strong>Apellidos</strong></p>
        <input class="form-control mb-3" type="text" name="apellido" placeholder="Apellidos"
            value="<?php echo $array[0]->apellidos ?>" required>

        <p><strong>Cedula</strong></p>
        <input class="form-control mb-3" type="number" name="cedula" placeholder="Cedula"
            value="<?php echo $array[0]->cedula ?>" required>

        <strong>
            Fecha Contratacion

        </strong>
        <input class="form-control mb-3" type="date" name="fecha_contratacion"
            value="<?php echo $array[0]->fecha_contratacion ?>" required>


        <strong>

            Fecha Terminacion
        </strong>


        <input class="form-control mb-3" type="date" name="fecha_terminacion"
            value="<?php echo $array[0]->fecha_terminacion ?>" required>

        <p><strong>Bonos Extras</strong></p>
        <input class="form-control mb-3" type="number" name="bonos" placeholder="Bonos Extras"
            value="<?php echo $array[0]->bono_extras ?>" required>

        <p><strong>Correo</strong></p>
        <input class="form-control mb-3" type="email" name="email" placeholder="Correo Electronico"
            value="<?php echo $array[0]->email ?>" placeholder="correo" required>

        <p><strong>fk vehiculo</strong></p>
        <input class="form-control mb-3" type="number" name="fk_vehiculo" placeholder="fk vehiculo"
            value="<?php echo $array[0]->id_vehiculo ?>" required>

        <strong>

            Fecha
        </strong>

        <input class="form-control mb-3" type="date" name="fecha" value="<?php echo $array[0]->FECHA ?>" required>

        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

        <input type="submit" name="guardar" value="Editar Conductor" class="btn btn-primary my-2">
    </form>

</div>


<!-- FOOTER -->

<?php include_once './Views/base/footer.php'; ?>