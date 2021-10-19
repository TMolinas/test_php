<?php

require_once  'includes/header.php';
require_once 'includes/functions.php';

require_once 'includes/variable.php';



?>

<html lang="fr">
    <body>
        <h1>Un fichier d'exemple</h1>
        <?php echo date('d/m/Y H:i:s'); ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix HT</th>
                    <th>Prix TTC</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($tab as $key => $value) {
                ?><tr>
                    <td><?php  echo $value['name']; ?></td>
                    <td><?php echo getPriceWithoutTVA((float) $value['price']); ?></td>

                    <?php if($value['price'] <= 12) {
                        echo '<td><span style="color: blue">' .$value['price']. '</span></td>';
                    }
                     else {
                        echo  '<td><span style="color: green">' .$value['price']. '</span></td>';
                    } ?>
                    <td><?php echo $value['description']; ?> </td>
                </tr>
            <?php
            }
            ?>

            </tbody>
        </table>
    </body>
</html>
