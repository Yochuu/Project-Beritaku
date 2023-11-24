<?php

session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT * FROM user WHERE username = '$username'";
$hasil = mysqli_query($db,$query);
$data = mysqli_fetch_array($hasil);


$pengacak = "p3ng4c4k";



$passmd = md5($pengacak . md5($password));
if ($passmd == $data['password'])
{

    $_SESSION['level'] = $data['level'];
    $_SESSION['username'] = $data['username'];


    echo "<h2>Login Sukses</h2>";
    header('location: /Project/admin/file/index.php');
}
else echo "<h2>Login Gagal</h2>";
echo "Username atau Password anda Salah!!!"
?>