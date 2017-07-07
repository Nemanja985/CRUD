<?php

require_once '../../vendor/autoload.php';

use src\controller\Crud;

$crud = new Crud();

//getting id from url
$id = $crud->escape_string($_GET['id']);


print_r(123);
$result = $crud->decline($id, 'users');

if ($result) {
    //redirecting to the display page
    header("Location:../../index.php");
}

?>