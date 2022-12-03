<!-- HEADER -->

<?php include_once './Views/base/header.php';?>


<div class="container mt-5 ">

<h3 class="display-4 text-center text-danger display-4">ELIMINAR CONDUCTOR POR ID</h3>

<form  action="./ruteador.php?controller=conductor&action=conductor_delete" method="post">

<STRONG>ID CONDUCTOR A ELIMINAR</STRONG>

<input class="form-control my-3" type="number" name="id" placeholder="id conductor" value="<?php echo $_GET['id'] ?>">

<input class="form-control btn btn-danger" type="submit" value="delete">

</form>


</div>



<!-- FOOTER -->

<?php include_once './Views/base/footer.php';?>