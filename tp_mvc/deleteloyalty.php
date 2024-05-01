<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Loyalty.controller.php");

$loyalty = new LoyaltyController();

if (isset($_GET['id'])) {
    //memanggil add
    $loyalty->delete($_GET['id']);
}
