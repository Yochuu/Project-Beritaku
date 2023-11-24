<?php
include("koneksi.php");
session_start();
if (isset($_SESSION["level"]) && $_SESSION["username"]) {
    if ($_SESSION["level"] == "user") {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Proses upload file
            $targetDirectory = "assets/img/payment/";
            $targetFile = $targetDirectory . basename($_FILES["gambar"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Cek apakah file adalah gambar atau bukan
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File bukan gambar.";
                $uploadOk = 0;
            }

            // Cek ukuran file
            if ($_FILES["gambar"]["size"] > 500000) {
                echo "Maaf, file terlalu besar.";
                $uploadOk = 0;
            }

            // Izinkan format file tertentu
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "Maaf, hanya file JPG, JPEG, dan PNG yang diizinkan.";
                $uploadOk = 0;
            }

            // Cek apakah $uploadOk diatur menjadi 0 karena error
            if ($uploadOk == 0) {
                echo "Maaf, file Anda tidak diunggah.";
            } else {
                // Jika semuanya oke, coba unggah file
                if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFile)) {
                    echo "File " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " berhasil diunggah.";

                    // Update level pengguna menjadi premium
                    $userId = $_SESSION['username']; // Anggap ada sesi pengguna
                    $updateQuery = "UPDATE user SET level = 'premium' WHERE id = $userId";
                    $result = mysqli_query($koneksi, $updateQuery);

                    if ($result) {
                        echo "Level pengguna berhasil diubah menjadi premium.";

                        // Masukkan detail transaksi ke tabel 'transaksi'
                        $username = $_SESSION['username']; // Anggap ada sesi pengguna
                        $insertQuery = "INSERT INTO transaksi (username, gambar) VALUES ('$username', '$targetFile')";
                        $insertResult = mysqli_query($koneksi, $insertQuery);

                        if ($insertResult) {
                            echo "Detail transaksi berhasil ditambahkan.";
                        } else {
                            echo "Gagal menambahkan detail transaksi.";
                        }
                    } else {
                        echo "Gagal mengubah level pengguna.";
                    }
                } else {
                    echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
                }
            }
        }
    } else {
        echo "anda belumm login";
        header("location: /Project/login.php");
    }
} else {
    echo "anda belum login";
}
