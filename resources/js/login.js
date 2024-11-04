function togglePassword() {
    var passwordField = document.getElementById("password");
    if (passwordField.type === "password") {
        passwordField.type = "text";
    } else {
        passwordField.type = "password";
    }
}

function toggleConfirmPassword() {
    var confirmPasswordField = document.getElementById("confirm-password");
    if (confirmPasswordField.type === "password") {
        confirmPasswordField.type = "text";
    } else {
        confirmPasswordField.type = "password";
    }
}
