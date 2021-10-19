<?php
    include_once "includes/header.php";

    $count = 1;
    foreach($tab as $key => $value) {
        if ($count > 3)
            break;

        $count++;
    ?>

        <div class="col">
        <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="card"  >
                <img src=<?= $value['image'] ?> class="card-img-top" alt=<?= $value['name'] ?>
                <div class="card-body">
                    <p class="card-text"><?= $value['name'] ?></p>
                </div>
                <div class="card-body">
                    <p class="card-text"><?= $value['description'] ?></p>
                </div>
            </div>
            </div>
        </div>
<?php } ?>

<a href="list.php" class="btn btn-info">Voir tous les produits</a>

<?php
    include_once "includes/footer.php";
?>
