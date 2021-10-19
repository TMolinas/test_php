<?php
    include_once "includes/header.php";
    ?>

<form action="" method="post">
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Login</label>
    <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" id="login" name="login">
    </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword" name="password">
    </div>
</div>
<div>
    <button type="submit" class="btn btn-primary mb-3">Se connecter</button>
</div>
</form>


<?php
    include_once "includes/footer.php";
    ?>
