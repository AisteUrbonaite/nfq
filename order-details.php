<?php
    include_once 'DatabaseConnection.php';

    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        header('Location: orders.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Užsakymo detalės</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include_once 'html_elements/menu_bar.html'; ?>
    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <?php
                    $obj = new DatabaseConnection();
                    if ($_POST) {
                        $obj->saveNewStatusForOrder($_POST['status'], $_GET['id']);
                        echo '<div class="alert alert-success top-buffer">
                                  <strong>Pavyko!</strong> Statusas pakeistas.
                              </div>';
                    }

                    $order = $obj->getOrder($_GET['id']);
                    $output = '
                        <h2 class="text-center">'
                            . (!empty($order) ? 'Užsakymas Nr. ' . $_GET['id'] : 'Tokio užsakymo nėra!') .
                        '</h2>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>PAVADINIMAS</th>
                                <th>REIKŠMĖ</th>
                            </tr>
                            </thead>
                            <tr>
                                <td><p><b>Užsakymo nr </b></p></td>
                                <td> ' . $order['id'] . '</p></td>
                            </tr>
                            <tr>
                                <td><p><b>Vardas </b></p> </td>
                                <td>' . $order['name'] . '</p></td>
                            </tr>
                            <tr>
                                <td><p><b>Pavardė </b></p></td>
                                <td>' . $order['last_name'] . '</p></td>
                            </tr>
                            <tr>
                            <td><p><b>Telefono numeris </b></p></td>
                            <td>' . $order['tel_number'] . '</p></td>
                            </tr>
                            <tr>
                                <td><p><b>El. paštas </b></p></td>
                                <td>' . $order['email'] . '</p></td>
                            </tr>
                            <tr>
                                <td><p><b>Adresas</b></p></td>
                                <td>' . $order['address'] . '</p></td>
                            </tr>
                            <tr>
                                <td><p><b>Miestas </b></p></td>
                                <td>' . $order['city'] . '</p></td>
                            </tr>
                            <tr>
                                <td><p><b>Pašto kodas </b></p></td>
                                <td>' . $order['post_code'] . '</p></td>
                            </tr>
                            <tr>
                                <td><p><b>Šalis </b></p></td>
                                <td>' . $order['country'] . '</p></td>
                            </tr>
                            <tr>
                                <td><p><b>Užsakymo data </b></p></td>
                                <td>' . $order['order_date'] . '</p></td>
                            </tr>
                            <tr>
                            <td><p><b>Užsakyta paslauga</b></p></td>
                            <td>' . $order['serviceName'] . '</p></td>
                            </tr>
                    ';

                    $output .= '
                        <tr>
                            <td><b>Užsakymo statusas</b></td>
                            <td><form class="form-horizontal" role="form" method="post" action="order-details.php?id='.$_GET['id'].'">
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
                            </form></td>
                        </tr>
                    </table>
                    <a href="orders.php" class="btn btn-default col-md-2">Grįžti</a>';

                    echo $output;
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

