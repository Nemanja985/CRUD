<?php

require_once '../../vendor/autoload.php';

use src\cla\Validation;
use src\controller\Crud;

$crud = new Crud();
$validation = new Validation();

if(isset($_POST['Submit'])) {
	$name = $crud->escape_string($_POST['name']);
	$days = $crud->escape_string($_POST['days']);

	$msg = $validation->check_empty($_POST, array('name', 'days'));

	if($msg != null) {
		echo $msg;		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {

		//insert data to database	
		$result = $crud->execute("INSERT INTO users(name, days) VALUES('$name','$days')");
		
		//display success message
		echo "<br/><a href='../../index.php'>View Result</a>";
	}
}
?>
