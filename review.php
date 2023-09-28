<?php
// Show table with data from user tables from database
require "template.php";

// MySQL Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "celeweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Get the user data from the database
?>

<div class="container-fluid px-5 py-5">
    <div class="row">
        <div class="col">
            <h1 class="d-inline">Datos Globales</h1>
            <table class="table table-bordered table-hover">
                <tr class="table-dark">
                    <th>Id</th>
                    <th>Tipo de Cliente</th>
                    <th>RUC</th>
                    <th>Razon Social</th>
                    <th>Direccion</th>
                    <th>Departmento</th>
                    <th>Provincia</th>
                    <th>Distrito</th>
                    <th>Telefono</th>
                    <th>Representante Legal #1</th>
                    <th>Representante Legal #2</th>
                    <th>Poder Inscrito</th>
                    <th>Casilla electronica</th>
                    <th>Contacto de Empresa</th>
                    <th>Acciones</th>
                </tr>
                <tr>
                    <?php
                    $sql = "SELECT * FROM user";
                    $result = $conn->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['client_type'] . "</td>";
                        echo "<td>" . $row['ruc'] . "</td>";
                        echo "<td>" . $row['social_reason'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['department'] . "</td>";
                        echo "<td>" . $row['province'] . "</td>";
                        echo "<td>" . $row['district'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['legal_one'] . "</td>";
                        echo "<td>" . $row['legal_two'] . "</td>";
                        echo "<td>" . $row['signed_power'] . "</td>";
                        echo "<td>" . $row['electronic_box'] . "</td>";
                        echo "<td>" . $row['company_contact'] . "</td>";
                        echo "<td><a href='view.php?id=" . $row['id'] . "'>Leer</a> | <a class='text-danger' href='actions/delete_user.php?id=" . $row['id'] . "'>Borrar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tr>
            </table>
        </div>
    </div>