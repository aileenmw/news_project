<?php
    require_once "partials/header.php";

    $default_page = 'pages/front.php';
    $page = (isset($_GET['page'])) ? "pages/" . $_GET['page'] . '.php' : $default_page;

    if (file_exists($page)) {
        include_once( $page );
    } else {
        include_once 'pages/404.php';
    }

    include "partials/footer.php";