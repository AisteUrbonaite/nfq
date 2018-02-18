<?php include_once 'DatabaseConnection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <?php
                    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                        $obj = new DatabaseConnection();
                        if ($_POST) {
                            $obj->saveNewStatusForOrder($_POST['status'], $_GET['id']);
                            echo '<div class="alert alert-success top-buffer">
                                      <strong>Pavyko!</strong> Statusas pakeistas.
                                  </div>';
                        }

                        $order = $obj->getOrder($_GET['id']);
                        if (empty($order)) {
                            header('Location: orders.php');
                        }
                        $output = '
                            <h2 class="text-center">Užsakymas Nr. ' . $_GET['id'] . '</h2>
                            <p><b>Užsakymo nr </b>. ' . $order['id'] . '</p>
                            <p><b>Vardas </b> ' . $order['name'] . '</p>
                            <p><b>Pavardė </b> ' . $order['last_name'] . '</p>
                            <p><b>Telefono numeris </b>' . $order['tel_number'] . '</p>
                            <p><b>El. paštas </b>' . $order['email'] . '</p>
                            <p><b>Adresas</b>' . $order['address'] . '</p>
                            <p><b>Miestas </b>' . $order['city'] . '</p>
                            <p><b>Pašto kodas </b>' . $order['post_code'] . '</p>
                            <p><b>Šalis </b>' . $order['country'] . '</p>
                            <p><b>Užsakymo data </b>' . $order['order_date'] . '</p>
                            <p><b>Užsakyta paslauga</b>' . $order['serviceName'] . '</p>
                        ';

                        $output .= '
                            <form class="form-horizontal" role="form" method="post" action="order-details.php?id='.$_GET['id'].'">
                                <p><b>Užsakymo statusas</b>
                                    <select name="status">';
                        $statuses = $obj->getStatuses();
                        foreach ($statuses as $status) {
                            $checked = '';
                            if ($status['name'] === $order['statusName']) {
                                $checked = 'selected';
                            }
                            $output .= '<option value="' . $status['id'] . '" ' . $checked . '>' . $status['name'] . '</option>';
                        }
                        $output .= '</select>
                                    <input name="submit" type="submit" value="Keisti" class="btn btn-default">
                                </p>
                            </form>
                            <a href="orders.php" class="btn btn-default col-md-2">Grįžti</a>';

                        echo $output;
                    } else {
                        header('Location: orders.php');
                    }
                    ?>

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

