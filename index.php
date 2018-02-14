<?php

include_once 'DatabaseConnection.php';

$objektas = new DatabaseConnection();

$con = $objektas->getPdoConnection();