const passwordInput = document.getElementById("password");
const toggleButton = document.getElementById("toggle");

const passwordConfirm = document.getElementById("passwordConfirm");
const toggleConfirm = document.getElementById("toggleConfirm");

if (passwordConfirm) {
    toggleConfirm.addEventListener("click", (e) => {
        e.preventDefault();
        passworToggleHandle({
            passwordContainer: passwordConfirm,
            toggleContainer: toggleConfirm,
        });
    });
}

toggleButton.addEventListener("click", (e) => {
    e.preventDefault();
    passworToggleHandle({
        passwordContainer: passwordInput,
        toggleContainer: toggleButton,
    });
});

const passworToggleHandle = ({ passwordContainer, toggleContainer }) => {
    const typePassword = passwordContainer.type == "password";
    passwordContainer.type = typePassword ? "text" : "password";
    toggleContainer.innerHTML = typePassword
        ? '<i class="ri-eye-fill"></i>'
        : '<i class="ri-eye-off-fill"></i>';
};
