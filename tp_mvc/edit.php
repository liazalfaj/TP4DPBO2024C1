<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Members.controller.php");

$members = new MembersController();

if (isset($_POST['submit'])) {
    //memanggil add
    $members->edit($_POST);
} else{
	$id = $_GET['id'];
    $members->editMemberView($id);
}
