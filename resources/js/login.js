function togglePassword() {
    const passwordField = document.getElementById("password");
    const passwordToggle = document.querySelectorAll(".toggle-password")[0];
    
    if (passwordField.type === "password") {
        passwordField.type = "text";
        passwordToggle.textContent = "🙈";
    } else {
        passwordField.type = "password";
        passwordToggle.textContent = "👁️";
    }
}

function toggleConfirmPassword() {
    const confirmPasswordField = document.getElementById("confirm-password");
    const confirmPasswordToggle = document.querySelectorAll(".toggle-password")[1];
    
    if (confirmPasswordField.type === "password") {
        confirmPasswordField.type = "text";
        confirmPasswordToggle.textContent = "🙈";
    } else {
        confirmPasswordField.type = "password";
        confirmPasswordToggle.textContent = "👁️";
    }
}
