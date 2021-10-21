
<?php

if(isset($_GET['filter'])) {
    if ($_GET['filter'] == 'on') {
        if (!empty($_POST['matterFilter'])) {
            $filter = $_POST['matterFilter'];
            $mesProduitsFilter = array_filter($mesProduits, function ($element) use ($filter) {
                return $element->matter === $filter;
            });
        }
        if (!empty($_POST['sizeFilter'])) {
            $filter = $_POST['sizeFilter'];
            $mesProduitsFilter = array_filter($mesProduits, function ($element) use ($filter) {
                return $element->size === $filter;
            });
        }

        if (!empty($_POST['priceMinFilter'])) {
            $filter = $_POST['priceMinFilter'];
            $mesProduitsFilter = array_filter($mesProduits, function ($element) use ($filter) {
                return $element->price >= $filter;
            });
        }



    }
}

?>
        <h1>Un fichier d'exemple</h1>
        <?php echo date('d/m/Y H:i:s');
            if (empty($mesProduitsFilter) && !isset($_GET['filter'])) {
                $mesProduitsFilter = $mesProduits;
            }
            ?>
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
            <?php foreach($mesProduitsFilter as $key => $value) {
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
        <form action="?page=list&filter=on" method="post">
            <div class="form-group">
                <label for="matterFilter">Choisir une matière</label>
                <select id="matterFilter" name="matterFilter">
                    <option value="">--Veuillez choisir une option--</option>
                <?php foreach (Beanie::MATTER as $matter) {
                    ?>

                    <option value=<?= $matter ?>><?= $matter ?></option>
                <?php }
                ?>
            </div>

            </select>
            <div class="form-group">
                 <label for="sizeFilter">Choisir une taille</label>
                 <select id="sizeFilter" name="sizeFilter">
                     <option value="">--Veuillez choisir une option--</option>
                 <?php foreach (Beanie::SIZE as $size) {
                     ?>
                     <option value=<?= $size ?>><?= $size ?></option>
                 <?php
                 } ?>
                 </select>
            </div>
            <div class="form-group">
                <label for="priceMinFilter">Indiquer un prix minimum</label>
                <input type="number" id="priceMinFilter" name="priceMinFilter">
            </div>
                <input type="submit" value="Filtrer" />
        </form>
        <a class="btn btn-primary" href="?page=list">Réinitialiser les filtres</a>

