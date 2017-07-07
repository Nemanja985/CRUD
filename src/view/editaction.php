<?php

require_once '../../vendor/autoload.php';

use src\cla\Validation;
use src\controller\Crud;

$crud = new Crud();
$validation = new Validation();

if(isset($_POST['update']))
{	
	$id = $crud->escape_string($_POST['id']);
	$name = $crud->escape_string($_POST['name']);
	$days = $crud->escape_string($_POST['days']);

	$msg = $validation->check_empty($_POST, array('name', 'days'));
	$check_age = $validation->are_days_valid($_POST['days']);
	
	// checking empty fields
	if($msg) {
		echo $msg;		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {
		//updating the table
		$result = $crud->execute("UPDATE users SET name='$name',days='$days' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: ../../index.php");
	}
}
?>
