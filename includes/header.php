<?php
    include_once "variables.php";
    include_once "functions.php";
    session_start();
    if(isset($_POST['login'])) {
        if ($_POST['password'] === $password)
            $_SESSION['login'] = $_POST['login'];
    }
    ?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="?page=home">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="?page=list">Voir la liste des bonnets</a>
                <a class="nav-link" href="?page=contact-form">Contact</a>

                <?php if(isset($_SESSION['login'])) {
                    ?>
                <span class="nav-link" ><?= $_SESSION['login']?></span>
                    <a class="nav-link" href="?page=logout">Logout</a>
                <?php }
                else {
                    ?>
                <a class="nav-link" href="?page=login">login</a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</nav>

