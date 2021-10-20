<?php

$action = "";
if(isset($_GET['id'])) {

    $id = $_GET['id'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    if ($action == 'add') {

        if (!isset($_SESSION['cart'])) {

            $_SESSION['cart'] = [];
        }
        if (!isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id] = 0;
            echo '<p>creation du panier</p>';
        }

        $_SESSION['cart'][$id]++;
    }

}
var_dump($_SESSION);

    ?>