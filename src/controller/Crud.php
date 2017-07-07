<?php

namespace src\controller;

use src\model\Database;

class Crud extends Database
{

	public function __construct()
	{
        parent::__construct();
	}
	
	public function getData($query)
	{
		$result = $this->connection->query($query);

		if ($result == false) {
			return false;
		}

		$rows = array();

		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}

		return $rows;
	}

	public function execute($query)
	{
		$result = $this->connection->query($query);

		if ($result == false) {
			echo 'Error: cannot execute the command';
			return false;
		} else {
			return true;
		}
	}

	public function delete($id, $table)
	{
		$query = "DELETE FROM $table WHERE id = $id";

		$result = $this->connection->query($query);

		if ($result == false) {
			echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
			return false;
		} else {
			return true;
		}
	}

    public function approve($id, $table)
    {
        $query = "SELECT name, days, rest, id FROM $table WHERE id = $id";

        $result = $this->connection->query($query);

        foreach ($result as $key => $res) {
            $id = $res['id'];
            $name = $res['name'];
            $days = $res['days'];
            $rest = $res['rest'];
        }

        $rest = $rest - $days;

        $days = 0;

        $this->connection->query("UPDATE users SET name='$name',days='$days',rest='$rest' WHERE id=$id");

        return true;
    }

    public function decline($id, $table)
    {
        $query = "SELECT  name, rest, id FROM $table WHERE id = $id";

        $result = $this->connection->query($query);

        foreach ($result as $key => $res) {
            $id = $res['id'];
            $name = $res['name'];
            $rest = $res['rest'];
        }

        $days = 0;

        $this->connection->query("UPDATE users SET name='$name',days='$days',rest='$rest' WHERE id=$id");

        return true;
    }

	public function escape_string($value)
	{
		return $this->connection->real_escape_string($value);
	}
}
?>
