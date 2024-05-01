<?php

class Members extends DB
{
    function getMembers()
    {
        $query = "SELECT members.*, loyalty.name_loyalty FROM members JOIN loyalty ON members.id_loyalty = loyalty.id";
        return $this->execute($query);
    }

	function getMemberById($id)
	{
		$query = "SELECT * FROM members WHERE id = '$id'";
		return $this->execute($query);
	}

    function add($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
		$id_loyalty = $data['id_loyalty'];

        $query = "insert into members values('', '$name', '$email', '$phone', now(), '$id_loyalty')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "delete FROM members WHERE id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

	function edit($data){
		$id=$data['id'];
		$name=$data['name'];
		$email=$data['email'];
		$phone=$data['phone'];
		$id_loyalty = $data['id_loyalty'];

		$query = "update members set name='$name', email='$email', phone='$phone', id_loyalty = '$id_loyalty'  where id='$id'";
		return $this->execute($query);
	}
}


?>
