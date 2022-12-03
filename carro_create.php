<!-- HEADER -->

<?php include_once './Views/base/header.php'; ?>

<!-- CONTENT -->


<div class="container mt-5 ">



    <form action="./ruteador.php?controller=carro&action=carro_create" method="POST" enctype="multipart/form-data">

        <h4 class="mb-3 text-center display-4">Crear Carro</h4>


        <input class="form-control mb-3" type="text" name="placa" placeholder="Placa" required>


        <input class="form-control mb-3" type="text" name="marca" placeholder="Marca del Vehiculo" required>


        <input class="form-control mb-3" type="text" name="cant_pasajero" placeholder="Cantidad de Pasajeros" required>

        <input type="submit" name="guardar" value="Crear Carro" class="btn btn-success my-2">

    </form>

</div>

<!-- FOOTER -->

<?php include_once './Views/base/footer.php'; ?>