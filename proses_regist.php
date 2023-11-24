<?php
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$level = "user";


if ($password1 == $password2) 
{
    include "koneksi.php";


    $pengacak = "p3ng4c4k";
    

    $passmd = md5($pengacak . md5($password1));


    $query = "INSERT INTO user (username,password,level) VALUES ('$username','$passmd','$level')";
    $hasil = mysqli_query($db,$query);


    if ($hasil) {
        echo "User Sudah Berhasil Terdaftar<br>";
        header('location: /Project/login.html');
    }
    else echo "Username SUdah Ada yang Memiliki";

}   
else echo "Password yang Dimasukkan tidak sama";
?>