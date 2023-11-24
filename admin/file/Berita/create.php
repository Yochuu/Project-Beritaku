<?php
// Koneksi ke database (gantilah sesuai dengan informasi database Anda)
include("../../../koneksi.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan file gambar diunggah dengan benar
    if (isset($_FILES["gambar"]) && $_FILES["gambar"]["error"] == 0) {
        $gambar_name = $_FILES["gambar"]["name"];
        $gambar_tmp = $_FILES["gambar"]["tmp_name"];

        // Pindahkan file gambar ke folder yang diinginkan
        $gambar_path = "../../../assets/img/news/" . $gambar_name; // Sesuaikan dengan folder penyimpanan Anda
        move_uploaded_file($gambar_tmp, $gambar_path);

        // Ambil data dari formulir
        $judul = $_POST['judul'];
        $id_kategori = $_POST['id_kategori'];
        $deskripsi = $_POST['deskripsi'];

        // Simpan data ke dalam tabel berita
        $sql = "INSERT INTO berita (id_kategori, gambar, judul, deskripsi) VALUES ('$id_kategori', '$gambar_name', '$judul', '$deskripsi')";

        if ($db->query($sql) === TRUE) {
            $_SESSION['color'] = 'success';
            $_SESSION['title'] = 'Success';
            $_SESSION['text'] = 'Data Berita ditambahkan.';
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }
    } else {
        echo "Error: Gambar tidak valid atau tidak diunggah.";
    }
}

?>
