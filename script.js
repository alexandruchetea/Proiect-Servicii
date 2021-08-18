function navigateTo(path) {
    window.location.href = path;
}


function verificaDateIntroduse() {
    var emailIntrodus = document.getElementById("email").value;
    var dataIntrodusa = document.getElementById("data").value;
    var validationForm = true;
    //daca email introdus contine @
    if (!emailIntrodus.includes("@")) {
        alert("Emailu-ul introdus nu este valid");
        validationForm = false;
    }

    // daca data introdusa este empty
    if (dataIntrodusa == '') {
        alert("Data introdusa nu este valida");
        validationForm = false;

    }

    // creaza o variabila pentru data curenta
    var currentDate = new Date();
    // daca data introdusa este mai mica sau egala cu data curenta
    // if (dataIntrodusa <= currentDate)
    if (new Date(dataIntrodusa).getTime() <= currentDate.getTime()) {
        alert("Introduceti o data mai mare decat cea curenta");
        validationForm = false;
    }

    if (validationForm == true) {
        alert('Datele introduse sunt validate');
    }

}