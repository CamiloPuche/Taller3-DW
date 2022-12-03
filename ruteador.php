<?php

include_once("./Controllers/" . $_GET['controller'] . "_controller.php");

$objController = $_GET['controller'] . "_controller";

$controllador = new $objController();

$fun = ucfirst($_GET['action']);

print_r($controllador->$fun());