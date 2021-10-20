<?php
    include_once "includes/header.php";

    if(!isset($_GET['page'])) {
        header('Location: ?page=home' );
    }

    $page = $_GET['page'];

    include_once 'pages/' .$page. '.php';

    include_once 'includes/footer.php';