<?php

class Loyalty extends DB
{
    function getLoyalty()
    {
        $query = "SELECT * FROM loyalty";
        return $this->execute($query);
    }

	function getLoyaltyById($id)
	{
		$query = "SELECT * FROM loyalty WHERE id = '$id'";
		return $this->execute($query);
	}

    function add($data)
    {
        $name_loyalty = $data['name_loyalty'];

        $query = "insert into loyalty values('', '$name_loyalty')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "delete FROM loyalty WHERE id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
	function edit($data){
		$id=$data['id'];
		$name_loyalty=$data['name_loyalty'];

		$query = "update loyalty set name_loyalty='$name_loyalty' where id='$id'";
		return $this->execute($query);
	}
}


?>
