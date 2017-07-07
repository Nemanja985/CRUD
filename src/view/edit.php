<?php

require_once '../../vendor/autoload.php';

use src\controller\Crud;

$crud = new Crud();

//getting id from url
$id = $crud->escape_string($_GET['id']);

//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM users WHERE id=$id");

foreach ($result as $res) {
	$name = $res['name'];
	$days = $res['days'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="../../index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="editaction.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="days" value="<?php echo $days;?>"></td>
			</tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
