<?php

include_once 'DatabaseConnection.php';

$obj = new DatabaseConnection();

if (!empty($_POST)) {
    if ($obj->saveOrder($_POST)) {
        header('Location: orders.php');
    } else {
        echo 'Įvyko klaida saugojant jūsų užsakymą, <a href="first-page.php">bandykite dar kartą.</a>';
    }
}
else{
    header('Location: first-page.php');
}