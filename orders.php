<?php include_once 'DatabaseConnection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Užsakymai</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include_once 'html_elements/menu_bar.html'; ?>
    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <h2 class="text-center">Užsakymai</h2>
                <table class="display table-bordered" id="order-table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" width="50">Užsakymo Nr.</th>
                            <th>Vardas</th>
                            <th>Pavardė</th>
                            <th>Telefono numeris</th>
                            <th>El. paštas</th>
                            <th>Adresas</th>
                            <th>Miestas</th>
                            <th>Pašto kodas</th>
                            <th>Šalis</th>
                            <th>Užsakymo data</th>
                            <th>Užsakyta paslauga</th>
                            <th>Užsakymo statusas</th>
                            <th>Peržiūrėti užsakymą</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $obj= new DatabaseConnection();
                        $orders = $obj->getOrders();
                        foreach ($orders as $order) {
                            echo '<tr>
                                    <th scope="row">' . $order['id'] . '</th>
                                    <td>' . $order['name'] . '</td>
                                    <td>' . $order['last_name'] . '</td>
                                    <td>' . $order['tel_number'] . '</td>
                                    <td>' . $order['email'] . '</td>
                                    <td>' . $order['address'] . '</td>
                                    <td>' . $order['city'] . '</td>
                                    <td>' . $order['post_code'] . '</td>
                                    <td>' . $order['country'] . '</td>
                                    <td>' . $order['order_date'] . '</td>
                                    <td>' . $order['serviceName'] . '</td>
                                    <td>' . $order['statusName'] . '</td>
                                    <td><a href="order-details.php?id=' . $order['id'] . '" class="btn btn-default">Peržiūrėti</a></td>
                                </tr>';
                        }
                    ?>
                    </tbody>
                </table>
                <a href="first-page.php" class="btn btn-default col-md-2">Sukurti naują užsakymą</a>
             </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#order-table').DataTable();
        });
    </script>
</body>
