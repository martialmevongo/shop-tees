<?php

require_once('../config.php');
require_once('../model/product.repository.php');
require_once('../model/order.repository.php');

session_start ();

$orderByUser = findOrderByUser();

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'post') {
    $orderByUser['statut'] = "shipped";


    saveOrder($orderByUser);
    $message = "commmande expédiée";
}



require_once('../view/create-ShipOrder.view.php');