<?php
require "template.php";
$id = $_GET['id'];

// MySQL Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "celeweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



?>


<div class="container-fluid px-5 py-5">
    <div class="row">
        <div class="col">
            <h1 class="d-inline">Informacion del Usuario</h1>s
            <a href="update.php?id=<?php echo $id; ?>" class="btn btn-warning d-inline" style="float: right;">Editar Datos</a>
            <table class="table table-hover table-bordered">
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
                </tr>
                <tr>
                    <?php
                    // Get the user data from the database
                    $sql = "SELECT * FROM user WHERE id = $id";
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
                        echo "</tr>";
                    }
                    ?>
                </tr>
            </table>
        </div>
    </div>
    <div class="row py-5">
        <div class="col">
            <h1>Informacion de la Cuenta</h1>
            <table class="table table-hover table-bordered">
                <tr class="table-dark">
                    <td>Banco</td>
                    <td>Nro. de Cuenta a Afiliar</td>
                    <td>Tipo de Cuenta</td>
                    <td>Observaciones</td>
                </tr>
                <?php
                // Get the account data from the database
                $sql = "SELECT * FROM account WHERE user_id = $id";
                $result = $conn->query($sql);

                while ($account = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $account['bank'] . "</td>";
                    echo "<td>" . $account['account_number'] . "</td>";
                    echo "<td>" . $account['account_type'] . "</td>";
                    echo "<td>" . $account['observations'] . "</td>";
                    echo "</tr>";
                }
                ?>

            </table>
        </div>
    </div>
</div>
