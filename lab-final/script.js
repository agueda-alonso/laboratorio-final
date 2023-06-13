function mostrarRegistros() {
    window.location.href = "consulta.php";
  }

  function validarFormulario() {
    var password = document.getElementById("password").value;
    if (password.length < 4 || password.length > 8) {
        mostrarError("La contraseña debe tener entre 4 y 8 caracteres.");
        return false;
    }
}

  function mostrarError(mensaje) {
    var errorElement = document.createElement("div");
    errorElement.classList.add("error-message");
    errorElement.textContent = mensaje;
    document.body.appendChild(errorElement);
  }
  
  function mostrarExito(mensaje) {
    var exitoElement = document.createElement("div");
    exitoElement.classList.add("exito-message");
    exitoElement.textContent = mensaje;
    document.body.appendChild(exitoElement);
  }
