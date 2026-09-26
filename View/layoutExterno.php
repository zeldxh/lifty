<?php

function IncludeCSS()
{
    echo '
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>InApp Inventory Dashboard</title>

            <link rel="stylesheet" href="../assets/css/main.css">
        </head>
    ';
}



function IncludeJS()
{
    echo '
        <script type="module" src="../assets/js/main.js"></script>
    ';
}
