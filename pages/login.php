<?php
    include_once "../includes/header.php";
    ?>

<form action="" method="post">
<div class="mb-3 row">
    <label for="login" class="col-sm-2 col-form-label">Login</label>
    <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" id="login" name="login">
    </div>
</div>
<div class="mb-3 row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword" name="password">
    </div>
</div>
<div>
    <button type="submit" class="btn btn-primary mb-3">Se connecter</button>
</div>
</form>

<?php
if(!empty($_POST['login'])) {
    if($_POST['password'] === $password) {
        $_SESSION['login'] = $_POST['login'];
        header('Location: home.php?loginSuccess=1');
        ?>

        <?php
    }
    else {
        ?>
    <div class="alert alert-danger" role="alert">
        Mauvais mot de passe!
    </div>
   <?php }
}

    include_once "../includes/footer.php";
    ?>
