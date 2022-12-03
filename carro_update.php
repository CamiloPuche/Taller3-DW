<!-- HEADER -->

<?php
include_once './Views/base/header.php';

include_once './Controllers/carro_controller.php';

$controller = new carro_controller;

$array = json_decode($controller->carro_read())[0];


?>


<div class="container mt-5 ">

        <form action="./ruteador.php?controller=carro&action=carro_update" method="POST" enctype="multipart/form-data">

            <h4 class="mb-3 text-center display-4 ">Editar Carro</h4>

            <p><strong>Placa</strong></p>
            <input class="form-control mb-3" type="text" name="placa" placeholder="" value="<?php echo $array->placa ?>" required>

            <p><strong>Marca</strong></p>
            <input class="form-control mb-3" type="text" name="marca" placeholder="" value="<?php echo $array->marca ?>" required>

            <p><strong>Cantidad de Pasajeros</strong></p>
            <input class="form-control mb-3" type="text" name="cant_pasajeros" placeholder="" value="<?php echo $array->cant_pasajeros ?>" required>


            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">


            <input  type="submit" name="guardar" value="Editar Carro" class="btn btn-success my-2">
        </form>

    </div>



<!-- FOOTER -->

<?php include_once './Views/base/footer.php';?>