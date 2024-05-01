<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Loyalty.controller.php");

$loyalty = new LoyaltyController();

if (isset($_POST['submit'])) {
    //memanggil add
    $loyalty->edit($_POST);
} else{
	$id = $_GET['id'];
    $loyalty->editLoyaltyView($id);
}
