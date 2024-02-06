<?php

declare(strict_types=1);

require 'Database/Connection.php';
require 'src/Repository/QueryRepostory.php';
require 'src/Repository/CommandRepository.php';

$currentTab = isset($_GET['tab']) ? $_GET['tab'] : '';
?>

<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zadanie Zdalne-MSI</title>
        <link rel="stylesheet" href="css/style.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        >
        <link
            href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
            rel="stylesheet"
        >
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        >
    </head>
    <body>
        <div class="main-panel">
            <div class="main-container">
                <div id="Lewy" class="left-side">
                    <?php include 'templates/partials/leftSide.php' ?>
                </div>
                <div id="Prawy" class="right-side">
                    <?php include 'config/routes.php' ?>
                </div>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"
        >
        </script>
    </body>
</html>
