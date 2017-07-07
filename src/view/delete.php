<?php

require_once '../../vendor/autoload.php';

use src\controller\Crud;

$crud = new Crud();

//getting id of the data from url
$id = $crud->escape_string($_GET['id']);

//deleting the row from table
$result = $crud->delete($id, 'users');

if ($result) {
	//redirecting to the display page
	header("Location:../../index.php");
}
?>