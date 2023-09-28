<?php require "template.php"; ?>

<div class="container-fluid px-5">
    <div class="py-3 text-center bg-primary px-2 my-2 border border-primary rounded" style="--bs-bg-opacity: .05;">
        <img class="d-inline mx-auto" src="https://bobpusateri.blob.core.windows.net/bcn/2018/09/CosmosDB-400.png"
             alt="" width="45" height="45">
        <span class="fs-3 fw-bold align-middle">Formulario de Afiliación al SPE</span>
    </div>
    <div class="row g-5">
        <div class="col-5">
<!--            <form class="needs-validation">-->
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Datos de Usuario
                            </button>
                        </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <?php require "forms/user.php"; ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Datos de la Cuenta
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <?php require "forms/account.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
<!--            </form>-->
        </div>
        <div class="col">
            <button onclick="SaveData()" type="button" class="btn btn-primary btn-sm justify-content-end mb-2" style="float: right">
                Enviar Solicitud
            </button>
            <table class="table table-striped table-hover table-bordered" id="account_table">
                <thead>
                <td>#</td>
                <td>Banco</td>
                <td>Nro. de Cuenta a Afiliar</td>
                <td>Tipo de Cuenta</td>
                <td>Observaciones</td>
                <td></td>
                </thead>
            </table>
        </div>
    </div>
</div>


<script src="assets/index.js"></script>

