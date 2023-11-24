<?php
include("koneksi.php");
session_start();
if (isset($_SESSION["level"]) && $_SESSION["username"])
{
  if ($_SESSION["level"] == "user") 
  {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
</head>

<body>

    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center pb-5">
                        <div class="col-md-7 col-xl-5 mb-4 mb-md-0">
                            <div class="py-4 d-flex flex-row">
                                <h5><span class="far fa-check-square pe-2"></span><b>Beritaku</b> |</h5>
                                <span class="ps-2">Pay</span>
                            </div>
                            <h4 class="text-success">Rp. 10.000</h4>
                            <h4>Access Premium</h4>
                            <p>Dapat mengakses kategori "Exclusive".</p>
                            <p>Kategori "Exclusive" berisi berita berita yang lagi viral, dan juga berita yang lagi panasnya</p>
                            <hr />
                            <div class="pt-2">
                                <form class="pb-3">
                                    <div class="d-flex flex-row">
                                        <img src="assets/img/post/Barcode.jpg" width="500px" height="500px" alt="">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text cursor-pointer"><i class="bx bxs-file-image"></i></span>
                                        <input type="file" name="gambar" class="form-control" accept="image/*" required />
                                    </div>
                                </form>
                                <input type="button" value="Proceed to payment" class="btn btn-primary btn-block btn-lg float-end" onclick="window.location.href='proses_payment.php'" />
                                <div class="col-md-5 col-xl-4 offset-xl-1">
                                    <div class="py-4 d-flex justify-content-end">
                                        <h6><a href="konfirmasi-payment.php">Cancel and return to website</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>
<?php
    
  } else {
    echo"anda belumm login";
    header("location: /Project/login.php");
  }
} else {
  echo"anda belum login";
}
?>