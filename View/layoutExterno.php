<?php

function IncludeCSS()
{
    echo '
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Lifty - Suplementos deportivos</title>

            <link rel="stylesheet" href="../assets/css/main.css">
        </head>
    ';
}

function MostrarLogo()
{
    echo '
        <a href="home.php" class="mb-4 d-inline-block text-decoration-none">
            <span class="fs-2 fw-bold">Lifty</span>
        </a>
    ';
}

function IncludeJS()
{
    echo '
        <script type="module" src="../assets/js/main.js"></script>
    ';
}
