<!-- HEADER -->

<?php include_once './Views/base/header.php'; ?>

<!-- CONTENT -->


<div class="container mt-5 ">



    <form action="./ruteador.php?controller=conductor&action=conductor_create" method="POST"
        enctype="multipart/form-data">

        <h4 class="mb-3 text-center display-4">Crear Conductor</h4>



        <input class="form-control mb-3" type="text" name="nombre" placeholder="Nombres" required>

        <input class="form-control mb-3" type="text" name="apellido" placeholder="Apellidos" required>


        <input class="form-control mb-3" type="number" name="cedula" placeholder="Cedula" required>

        <strong>
            Fecha Contratacion

        </strong>
        <input class="form-control mb-3" type="date" name="fecha_contratacion" required>


        <strong>

            Fecha Terminacion
        </strong>

        <input class="form-control mb-3" type="date" name="fecha_terminacion" required>

        <input class="form-control mb-3" type="number" name="bonos" placeholder="Bonos Extras" required>

        <input class="form-control mb-3" type="email" name="email" placeholder="Correo Electronico" placeholder="correo"
            required>

        <input class="form-control mb-3" type="number" name="fk_vehiculo" placeholder="fk vehiculo" required>

        <strong>

            Fecha
        </strong>

        <input class="form-control mb-3" type="date" name="fecha" required>

        <input type="submit" name="guardar" value="Crear Conductor" class="btn btn-primary my-2">

    </form>

</div>

<!-- FOOTER -->

<?php include_once './Views/base/footer.php'; ?>