<div class="row g-3">
        <div class="col-12">
            <label for="client_type" class="form-label">Tipo de Cliente</label>
            <span class="text-danger">*</span>
            <select class="form-select" id="client_type" required>
                <option selected hidden disabled>-- Seleccione un Tipo de Cliente</option>
                <option>Persona Fisica</option>
                <option>Persona Moral</option>
                <option>Empresa</option>
            </select>
        </div>
    <div class="col-8 col-sm-7">
        <label for="ruc" class="form-label">Código RUC</label>
        <span class="text-danger">*</span>
        <input type="text" class="form-control form-control-sm" id="ruc"
               placeholder="" value="" required>
    </div>

    <div class="col-4 col-sm-5">
        <label class="mb-2">&nbsp;</label>
        <button type="button" onclick="ValidateRUC()" class="btn btn-sm btn-primary w-100">Validar Datos</button>
    </div>

    <div class="col-12">
        <label for="social_reason" class="form-label">Razón Social</label>
        <input type="text" class="form-control form-control-sm" id="social_reason" required>
    </div>

    <div class="col-12">
        <label for="address" class="form-label">Domicilio</label>
        <input type="text" class="form-control form-control-sm" id="address"
               placeholder="Centro St #1234" required>
    </div>

    <div class="col-4">
        <label for="department" class="form-label">Departamento</label>
        <span class="text-danger">*</span>
        <select class="form-select form-select-sm" id="department" required>
            <option value="">-- Seleccionar --</option>
            <option>Amazonas</option>
            <option>Ancash</option>
            <option>Apurimac</option>
            <option>Arequipa</option>
            <option>Ayacucho</option>
        </select>
    </div>

    <div class="col-4">
        <label for="province" class="form-label">Provincia</label>
        <span class="text-danger">*</span>
        <select class="form-select" id="province" required>
            <option value="">-- Seleccionar --</option>
            <option>Chachapoyas</option>
            <option>Huaraz</option>
            <option>Abancay</option>
            <option>Arequipa</option>
            <option>Huamanga</option>
        </select>
    </div>


    <div class="col-4">
        <label for="district" class="form-label">Distrito</label>
        <span class="text-danger">*</span>
        <select class="form-select" id="district" required>
            <option value="">-- Seleccionar --</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>


    <div class="col-12">
        <label for="phone" class="form-label">Teléfono</label>
        <input type="tel" class="form-control form-control-sm" id="phone"
               placeholder="868 123 4567">
    </div>


    <div class="col-12">
        <label for="legal_one" class="form-label">Representante Legal #1</label>
        <input type="text" class="form-control form-control-sm" id="legal_one" placeholder=""
               value="" required>
    </div>

    <div class="col-12">
        <label for="legal_two" class="form-label">Representante Legal #2</label>
        <input type="text" class="form-control form-control-sm" id="legal_two" placeholder=""
               value="" required>
    </div>

    <div class="col-12">
        <label for="signed_power" class="form-label">Poder Inscrito en el Asiento</label>
        <input type="text" class="form-control form-control-sm" id="signed_power"
               placeholder="" value="" required>
    </div>

    <div class="col-12">
        <label for="electronic_box" class="form-label">Casilla Electrónica</label>
        <span class="text-danger">*</span>
        <input type="text" class="form-control form-control-sm" id="electronic_box"
               placeholder="" value="" required>
    </div>

    <div class="col-12">
        <label for="company_contact" class="form-label">Contacto de Empresa</label>
        <input type="text" class="form-control form-control-sm" id="company_contact"
               placeholder="" value="" required>
    </div>

    <div class="col-12">
        <button class="btn btn-success" onclick="SwitchFormAccordion()">Guardar</button>
    </div>
</div>
