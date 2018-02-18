<?php include_once 'DatabaseConnection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="buttons">
        <?php
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
        ?>
    </div>
</body>