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


        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $phone = $_POST['phone'];
        $legal_one = $_POST['legal_one'];
        $legal_two = $_POST['legal_two'];
        $power = $_POST['signed_power'];
        $electronic_box = $_POST['electronic_box'];
        $company_contact = $_POST['company_contact'];

        $sql = "UPDATE user SET phone = '$phone', legal_one = '$legal_one', legal_two = '$legal_two', signed_power = '$power', electronic_box = '$electronic_box', company_contact = '$company_contact' WHERE id = $id";
        $connupd = new mysqli($servername, $username, $password, $dbname);
        $connupd->query($sql);
        $connupd->close();

        header("Location: /CeleWeb/view.php?id=$id");
    }
?>


<div class="container-fluid px-5 py-5">
    <div class="row">
        <div class="col">
            <form action="update.php?id=<?php echo $id;?>" method="post">
            <h1 class="d-inline">Informacion del Usuario</h1>
            <button class="btn btn-success d-inline" style="float: right;">Guardar Informacion Usuario</button>
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
                        echo "<td><input name='phone' value='" . $row['phone'] . "'></td>";
                        echo "<td><input name='legal_one' value='" . $row['legal_one'] . "'></td>";
                        echo "<td><input name='legal_two' value='" . $row['legal_two'] . "'></td>";
                        echo "<td><input name='signed_power' value='" . $row['signed_power'] . "'></td>";
                        echo "<td><input name='electronic_box' value='" . $row['electronic_box'] . "'></td>";
                        echo "<td><input name='company_contact' value='" . $row['company_contact'] . "'></td>";
                        echo "</tr>";
                    }
                    ?>
                    </form>
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
                    <td>Borrar</td>
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
                    echo "<td><a href='actions/delete_account.php?id=" . $account['id'] . "&dataId= " . $id . "' class='btn btn-danger'>X</a></td>";
                    echo "</tr>";
                }
                ?>

            </table>
        </div>
    </div>
</div>
