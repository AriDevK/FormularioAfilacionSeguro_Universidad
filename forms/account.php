<div class="row g-3">
    <div class="col-12">
        <label for="bank" class="form-label">Banco</label>
        <span class="text-danger">*</span>
        <select class="form-select" id="bank" required>
            <option selected hidden disabled>-- Seleccionar --</option>
            <option>Interbank</option>
            <option>Banco de Credito del Peru</option>
            <option>Banco de la Nación</option>
            <option>BBVA Peru</option>
        </select>
    </div>

    <div class="col-12">
        <label for="account_type" class="form-label">Tipo de Cuenta</label>
        <span class="text-danger">*</span>
        <select class="form-select" id="account_type" required>
            <option selected hidden disabled>-- Seleccione un Tipo de Cuenta</option>
            <option>Credito</option>
            <option>Debito</option>
            <option>Ahorro</option>
        </select>
    </div>

    <div class="col-12">
        <label for="account_number" class="form-label">Nro. de Cuenta a Afiliar</label>
        <span class="text-danger">*</span>
        <input type="text" class="form-control form-control-sm" id="account_number" placeholder="" value="" required>
    </div>

    <div class="col-12">
        <label for="observations" class="form-label">Observaciones</label>
        <textarea class="form-control" id="observations" rows="3"></textarea>
    </div>

    <button class="btn btn-success" onclick="AddAccount()">Agregar Cuenta</button>
</div>