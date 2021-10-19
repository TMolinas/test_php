<?php
    include_once "includes/header.php";
    ?>

<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Login</label>
    <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" id="staticLogin">
    </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword">
    </div>
</div>
<div>
    <button type="submit" class="btn btn-primary mb-3">Se connecter</button>
</div>

<?php
    include_once "includes/footer.php";
    ?>
