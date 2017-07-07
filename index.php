<?php

require_once 'vendor/autoload.php';

use src\controller\Crud;

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM users ORDER BY id DESC";
$result = $crud->getData($query);
?>

<html>

<body>
<a href="src/view/add.html">Add New Data</a><br/><br/>

<table width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td>Name</td>
        <td>Vacation request</td>
        <td>Days left</td>
        <td>Update</td>
    </tr>
    <?php
    foreach ($result as $key => $res) {
        echo "<tr>";
        echo "<td>".$res['name']."</td>";
        echo "<td>".$res['days']."</td>";
        echo "<td>".$res['rest']."</td>";
        echo "<td>
                <a href=\"src/view/edit.php?id=$res[id]\">Update</a> |
                <a href=\"src/view/delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> |
                <a href=\"src/view/approval.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to approve?')\">Approve</a> |
                <a href=\"src/view/decline.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to decline?')\">Decline</a>
              </td>";
    }

    ?>
</table>
</body>
</html>
