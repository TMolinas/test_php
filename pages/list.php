
        <h1>Un fichier d'exemple</h1>
        <?php echo date('d/m/Y H:i:s'); ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix HT</th>
                    <th>Prix TTC</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($mesProduits as $key => $value) {
                ?><tr>
                    <td><?php  echo $value->name; ?></td>
                    <td><?php echo getPriceWithoutTVA((float) $value->price); ?></td>

                    <?php if($value->price <= 12) {
                        echo '<td><span style="color: blue">' .$value->price. '</span></td>';
                    }
                     else {
                        echo  '<td><span style="color: green">' .$value->price. '</span></td>';
                    } ?>
                    <td><?php echo $value->description; ?> </td>
                    <td><a class="btn btn-secondary" href="?page=cart&id=<?= $value->id ?>&action=add">Ajouter au panier</a></td>
                </tr>
            <?php
            }
            ?>

            </tbody>
        </table>

        <?php
        var_dump($mesProduits);
        ?>