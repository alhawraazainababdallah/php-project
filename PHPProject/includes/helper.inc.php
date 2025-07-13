<?php
function getPage()
{
    $parts = explode("/", $_SERVER["PHP_SELF"]);
    $page = $parts[count($parts) - 1];
    return $page;
}

function redirectIfLoggedIn()
{
    if(!isLoggedIn()) return;

    header("Location: index.php");
}

function isLoggedIn()
{
    return isset($_SESSION["id"]);
}

function redirectIfLoggedOut()
{
    if(isLoggedIn()) return;

    header("Location: index.php");
}