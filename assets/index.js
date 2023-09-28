let tableCounter = 1;

function SwitchFormAccordion() {
    let isRucValid = ValidateRUC();

    if (isRucValid) {
        new bootstrap.Collapse('#panelsStayOpen-collapseOne', {
            toggle: true
        });

        new bootstrap.Collapse('#panelsStayOpen-collapseTwo', {
            toggle: true
        });
    }
}

function ValidateRUC() {
    let ruc = document.getElementById("ruc");

    if (ruc.value.length !== 13) {
        alert("El RUC debe tener 13 dígitos, favor de verificar");
        ruc.value = "";
        return false;
    }

    return true;
}

function AddAccount() {
    let bank = document.getElementById("bank");
    let accountType = document.getElementById("account_type");
    let accountNumber = document.getElementById("account_number");
    let observations = document.getElementById("observations");
    let formIsFilled = ValidateAccountData(bank, accountType, accountNumber);

    if (formIsFilled) {
        let table = document.getElementById("account_table");

        let row = table.insertRow(-1);
        let idCell = row.insertCell(0);
        let bankCell = row.insertCell(1);
        let accountTypeCell = row.insertCell(2);
        let accountNumberCell = row.insertCell(3);
        let observationsCell = row.insertCell(4);
        let deleteCell = row.insertCell(5);

        idCell.innerHTML = tableCounter.toString();
        bankCell.innerHTML = bank.value;
        accountTypeCell.innerHTML = accountType.value;
        accountNumberCell.innerHTML = accountNumber.value;
        if (observations.value.length === 0) {
            observationsCell.innerHTML = "Sin observaciones";
        } else {
            observationsCell.innerHTML = observations.value;
        }
        deleteCell.innerHTML = `<button type='button' class='btn btn-danger' onclick='DeleteAccount(${tableCounter})'>Eliminar</button>`;

        bank.value = "";
        accountType.value = "";
        accountNumber.value = "";
        observations.value = "";
        tableCounter++;
    } else {
        alert("Favor de llenar todos los campos");
    }
}

function DeleteAccount(rowId) {
    let table = document.getElementById("account_table");
    let rows = table.rows;

    for (const row in rows) {
        if (rows[row].cells[0].innerHTML === rowId.toString()) {
            table.deleteRow(row);
            break;
        }
    }
}

function ValidateAccountData(bank, accountType, accountNumber) {
    return bank.value.length !== 0 && accountType.value.length !== 0 && accountNumber.value.length !== 0;
}


function SaveData() {
    // FIRST WE CATCH THE DATA FOR THE USER INPUTS, ON THE forms/user.php FILE
    let ruc = document.getElementById("ruc");
    let clientType = document.getElementById("client_type");
    let socialReason = document.getElementById("social_reason");
    let address = document.getElementById("address");
    let department = document.getElementById("department");
    let province = document.getElementById("province");
    let district = document.getElementById("district");
    let phone = document.getElementById("phone");
    let legalOne = document.getElementById("legal_one");
    let legalTwo = document.getElementById("legal_two");
    let signedPower = document.getElementById("signed_power");
    let electronic_box = document.getElementById("electronic_box");
    let companyContact = document.getElementById("company_contact");


    // HERE WE CREATE THE FORMDATA OBJECT
    let formData = new FormData();

    // HERE WE CAN ADD THE DATA TO THE FORMDATA OBJECT
    formData.append("ruc", ruc.value);
    formData.append("client_type", clientType.value);
    formData.append("social_reason", socialReason.value);
    formData.append("address", address.value);
    formData.append("department", department.value);
    formData.append("province", province.value);
    formData.append("district", district.value);
    formData.append("phone", phone.value);
    formData.append("legal_one", legalOne.value);
    formData.append("legal_two", legalTwo.value);
    formData.append("signed_power", signedPower.value);
    formData.append("electronic_box", electronic_box.value);
    formData.append("company_contact", companyContact.value);

    // HERE WE CREATE THE FETCH REQUEST TO THE SERVER
    fetch("actions/save_user.php", {
        method: "POST",
        body: formData
    })
        .then(data => {
            console.log("Los datos se han guardado correctamente");
        }).catch(error => {
            console.log(error);
    })


    let table = document.getElementById("account_table");
    let rows = table.rows;
    let aux = 0;

    for (const row in rows) {
        try{
            let formDataRow = new FormData();

            if (aux === 0){
                aux =1;
                continue;
            }

            formDataRow.append("ruc", ruc.value);
            formDataRow.append("bank", rows[row].cells[1].innerHTML);
            formDataRow.append("account_type", rows[row].cells[2].innerHTML);
            formDataRow.append("account_number", rows[row].cells[3].innerHTML);
            formDataRow.append("observations", rows[row].cells[4].innerHTML);

            fetch("actions/save_account.php", {
                method: "POST",
                body: formDataRow
            })
                .then(data => {
                    console.log(data)
                }).catch(error => {
                console.log(error);
            });
        } catch{
            console.log("error")
        }
    }

    alert("Los datos se han guardado correctamente");
}