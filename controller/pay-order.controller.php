<?php

session_start ();

require_once('../model/order.repository.php');

$orderByUser = findOrderByUser();

if ($_SERVER['REQUEST_METHOD'] === 'post') {
    $orderByUser['statut'] = "PAID";


    saveOrder($orderByUser);
}

require_once('../view/pay-order.view.php');
