<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Loyalty.controller.php");

$loyalty = new LoyaltyController();

if (isset($_POST['submit'])) {
    //memanggil add
    $loyalty->add($_POST);
} else{
    $loyalty->addLoyaltyView();
}
