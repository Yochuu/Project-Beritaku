<?php
include("../../../koneksi.php");
session_start();

if (isset($_POST['submitedit'])) {
    $usernameEdit = $_POST['username'];
    $levelEdit = $_POST['level'];

    $queryUpdate = "UPDATE user SET level = '$levelEdit' WHERE username = '$usernameEdit'";
    
    if (mysqli_query($db, $queryUpdate)) {
        $_SESSION['color'] = 'success';
        $_SESSION['title'] = 'Success';
        $_SESSION['text'] = 'Data user berhasil diupdate.';
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['color'] = 'danger';
        $_SESSION['title'] = 'Error';
        $_SESSION['text'] = 'Gagal mengupdate data user: ' . mysqli_error($db);
        header("Location: index.php");
        exit();
    }
} else {
    // Redirect jika tidak ada data yang dikirimkan melalui POST
    header("Location: index.php");
    exit();
}
?>
