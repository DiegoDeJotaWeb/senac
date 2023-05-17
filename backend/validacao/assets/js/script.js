function validar_dados() {
    if (nomeForm.nome.value == "") {
        alert("Por favor digite o nome");
    }
    
    if (nomeForm.email.value == "" || nomeForm.email.value.indexOf('@', 0) == -1 || nomeForm.email.value.indexOf('.', 0) == -1) {
        alert("E-mail invalidado");
        return false;
    }

    if (nomeForm.estado.selectedIndex == 0) {
        alert("Por favor selecione o estado");
        return false;
    }

    if (nomeForm.login.value.length < 5 || nomeForm.login.value.length > 15) {
        alert("O login deve conter entre 5 e 15 caracteres");
        return false;
    }

    if (nomeForm.login.value.indexOf(' ', 0) != -1) {
        alert("O login não pode conter espaços em branco");
        return false;
    }

    if (nomeForm.senha.value.length < 5 || nomeForm.senha.value.length > 15) {
        alert("A senha deve conter entre 5 e 15 caracteres");
        return false;
    }
    
}