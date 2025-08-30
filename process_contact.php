<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Cek validasi sederhana
    if (empty($name) || empty($email) || empty($message) || empty($subject)) {
        echo "<div style='color:red;'>Form tidak boleh kosong!</div>";
        exit;
    }

    // ==== Contoh: Kirim email ====
    $to      = "admin@nusapratama.co.id"; // ganti dengan email tujuan
    // $subject = "Pesan Baru dari Contact Form";
    $body    = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
    $headers = "From: no-reply@example.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "<div style='color:green;'>Pesan berhasil dikirim!</div>";
    } else {
        echo "<div style='color:red;'>Gagal mengirim pesan. Coba lagi.</div>";
    }

    // ==== Contoh: Simpan ke file (opsional) ====
    // file_put_contents("messages.txt", "$name | $email | $message\n", FILE_APPEND);
}
?>
