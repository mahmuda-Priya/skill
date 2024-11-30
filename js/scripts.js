// Example: Validate password match on signup
document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    form.addEventListener("submit", (e) => {
        const password = form.querySelector("[name='password']").value;
        const confirmPassword = form.querySelector("[name='confirm_password']").value;
        
        if (password !== confirmPassword) {
            e.preventDefault();
            alert("Passwords do not match!");
        }
    });
});
