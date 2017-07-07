<?php

require_once '../../vendor/autoload.php';


use src\controller\Crud;

$crud = new Crud();

//getting id from url
$id = $crud->escape_string($_GET['id']);


$result = $crud->approve($id, 'users');

if ($result) {
    //redirecting to the display page (index.php in our case)
    header("Location:../../index.php");
}

?>
