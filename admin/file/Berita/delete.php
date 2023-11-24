<?php
include("../../../koneksi.php");
session_start();

if (isset($_POST['submitdelete'])) {
    $beritaDelete = $_POST['judul'];

    $queryDelete = "DELETE FROM berita WHERE judul = '$beritaDelete'";

    if (mysqli_query($db, $queryDelete)) {
        $_SESSION['color'] = 'success';
        $_SESSION['title'] = 'Success';
        $_SESSION['text'] = 'Data berita dihapus.';
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['color'] = 'danger';
        $_SESSION['title'] = 'Error';
        $_SESSION['text'] = 'Gagal menghapus data berita: ' . mysqli_error($db);
        header("Location: index.php");
        exit();
    }
} else {
    // Redirect jika tidak ada data yang dikirimkan melalui POST
    header("Location: index.php");
    exit();
}
?>
