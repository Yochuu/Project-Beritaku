<?php
// create.php
// Periksa apakah formulir telah dikirim
if (isset($_POST['submit'])) {
    // Ambil nilai dari formulir
    $username = $_POST['username'];
    $password1 = $_POST['pass1'];
    $password2 = $_POST['pass2'];
    $level = $_POST['level'];

    // Periksa apakah password dan konfirmasi password cocok
    if ($password1 != $password2) {
        echo "Password dan konfirmasi password tidak cocok.";
        exit;
    }

    // Hash password sebelum disimpan di database
    $hashedPassword = password_hash($password1, PASSWORD_DEFAULT);

    // Lakukan koneksi ke database
    $koneksi = new mysqli('localhost','root','','beritaku');

    // Periksa koneksi
    if ($koneksi->connect_error) {
        die("Koneksi Gagal: " . $koneksi->connect_error);
    }

    // Query untuk melakukan insert data ke tabel user (gantilah "user" dengan nama tabel yang sesuai)
    $query = "INSERT INTO user (username, password, level) VALUES ('$username', '$hashedPassword', '$level')";

    // Jalankan query
    if ($koneksi->query($query) === TRUE) {
        $_SESSION['color'] = 'success';
        $_SESSION['title'] = 'Success';
        $_SESSION['text'] = 'Data user ditambahkan.';
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }

    // Tutup koneksi
    $koneksi->close();
} else {
    // Jika formulir tidak dikirim, lakukan sesuatu yang sesuai dengan kebutuhan aplikasi Anda.
    // Misalnya, kembali ke halaman formulir atau tampilkan pesan kesalahan.
}
?>
