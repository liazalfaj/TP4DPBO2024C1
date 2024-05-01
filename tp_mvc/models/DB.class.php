<?php

class DB
{
    var $servername = "";
    var $user = "";
    var $password = "";
    var $name = "";
    var $db_link = "";
    var $result = 0;

    function __construct($servername, $user, $password, $name)
    {
        $this->servername = $servername;
        $this->user = $user;
        $this->password = $password;
        $this->name = $name;
    }

    function open()
    {
        $this->db_link = mysqli_connect($this->servername, $this->user, $this->password, $this->name);
    }

    function execute($query)
    {
        $this->result = mysqli_query($this->db_link, $query);
        return $this->result;
    }

    function getResult()
    {
        return mysqli_fetch_array($this->result);
    }

    function close()
    {
        mysqli_close($this->db_link);
    }
}

?>
