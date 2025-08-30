// Validasi sederhana pakai JS
document.getElementById("contactForm").addEventListener("submit", function (e) {
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let subject = document.getElementById("subject").value.trim();
    let message = document.getElementById("message").value.trim();

    if (name === "" || email === "" || message === "" || subject === "") {
        e.preventDefault();
        document.getElementById(
            "alertBox"
        ).innerHTML = `<div class="alert alert-danger">Semua field wajib diisi!</div>`;
    }
});
