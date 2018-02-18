<?php include_once 'DatabaseConnection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Vitamin C</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include_once 'html_elements/menu_bar.html'; ?>
    <div class="container">
        <div class="bg">
            <?php
                $obj = new DatabaseConnection();
                $service = $obj->getService();
                echo '<h2 class="text-center display-2">' . $service['name'] . '</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-thumbnail" alt="vitamin" src="' . $service['image_url'] . '">
                            </div>
                            <div class="col-md-6">
                                <p>' . $service['description'] . '</p>
                            </div>
                        </div>';
            ?>
        </div>
        <a href="orders.php" class="btn btn-success btn-lg btn-block login-button button-margin">Peržiūrėti užsakymus</a>
        <hr/>
        <div class="main">
            <div class="main-login main-center">
                <h2 class="text-center">Užsakymo forma</h2>
                <form class="form-horizontal" id="contact_form" role="form" method="post" action="handle-request.php">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Vardas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Vardas" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Pavardė</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Pavardė" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">El. paštas</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="El. paštas" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Telefono numeris</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Telefono numeris" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Adresas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Adresas" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Miestas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="city" name="city" placeholder="Miestas" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Pašto kodas</label>
                        <div class="col-sm-10">
                            <input type="number" maxlength="5" class="form-control" id="post_code" name="post_code" placeholder="Pašto kodas" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Šalis</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="country" name="country" placeholder="Šalis" value="Lietuva" required>
                        </div>
                    </div>
                    <input type="hidden" name="service_id" value="1">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input id="submit" name="submit" type="submit" value="Užsakyti" class="btn btn-primary btn-lg btn-block login-button">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>