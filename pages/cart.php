<?php

$action = "";
$priceTotal = 0;
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
        }

        $_SESSION['cart'][$id]++;
    }

    if ($action == 'pull') {


        if (isset($_SESSION['cart'][$id]) && $_SESSION['cart'][$id] > 0) {

            $_SESSION['cart'][$id]--;
        }

        if (isset($_SESSION['cart'][$id]) && $_SESSION['cart'][$id] == 0) {
            unset($_SESSION['cart'][$id]);
        }
    }

    if ($action == 'remove') {
        if (isset($_SESSION['cart'][$id])) {
            unset($_SESSION['cart'][$id]);
        }
    }

}

var_dump($_SESSION);

    ?>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prix à l'unité</th>
            <th>Quantité</th>
            <th>Prix</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_SESSION['cart'] as $keyId => $product) {
            $beanie = findBeanieById((int)$keyId, $mesProduits);
            $priceByItem = $beanie->price * $_SESSION['cart'][$keyId];
            $priceTotal += $priceByItem;
            ?>
            <tr>
                <td><?= $keyId; ?></td>
                <td><?php echo $beanie->name; ?></td>
                <td><?php echo $beanie->price; ?></td>
                <td><?php echo $_SESSION['cart'][$keyId] ; ?></td>
                <td><?= $priceByItem ?></td>
                <td><a href="?page=cart&id=<?= $keyId; ?>&action=pull" class="btn btn-outline-warning">-</a>
                    <a href="?page=cart&id=<?= $keyId; ?>&action=add" class="btn btn-outline-warning">+</a>
                    <a href="?page=cart&id=<?= $keyId; ?>&action=remove" class="btn btn-danger">Suppr.</a>
                </td>
            </tr>
        <?php
        } ?>
    </tbody>
    <tfoot>
        <tr>
            <th>Total</th>
            <td></td>
            <td></td>
            <td></td>
            <td><?= $priceTotal ?></td>
        </tr>
    </tfoot>
</table>
