<?php
include("../../../koneksi.php");
session_start();
if (isset($_SESSION["level"]) && $_SESSION["username"]) {
  if ($_SESSION["level"] == "admin") {
?>
    <!DOCTYPE html>

    <html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

      <title>Data Berita</title>

      <meta name="description" content="" />

      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

      <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />

      <!-- Core CSS -->
      <link rel="stylesheet" href="../../assets/vendor/css/core.css" class="template-customizer-core-css" />
      <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
      <link rel="stylesheet" href="../../assets/css/demo.css" />

      <!-- Vendors CSS -->
      <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
      <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />

      <!-- Page CSS -->

      <!-- Helpers -->
      <script src="../../assets/vendor/js/helpers.js"></script>
      <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
      <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
      <script src="../../assets/js/config.js"></script>
    </head>

    <body>
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
          <!-- Menu -->

          <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="index.html" class="app-brand-link">
                <span class="app-brand-logo demo">
                  <a href="../index.php"> <img width="100%" src="../../../assets/img/logo/logo.jpg" style="position: relative; right:10px; bottom:5px; width: -50%; " alt=""></a>
              </a>

              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
              <!-- Dashboards -->
              <li class="menu-item">
                <a href="../index.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Dashboards">Dashboards</div>
                </a>
              </li>

              <li class="menu-item">
                <a href="#" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-news"></i>
                  <div data-i18n="Dashboards">Data Berita</div>
                </a>
              </li>

              <li class="menu-item">
                <a href="../User/index.php" class="menu-link">
                  <i class='menu-icon tf-icons bx bxs-user'></i>
                  <div data-i18n="Dashboards">Data User</div>
                </a>
              </li>
              <!-- Misc -->
              <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
              <li class="menu-item">
                <a href="https://github.com/Yochuu/beritaku" target="_blank" class="menu-link">
                  <i class='menu-icon tf-icons bx bxl-github'></i>
                  <div data-i18n="Support">GitHub</div>
                </a>
              </li>
            </ul>
          </aside>
          <!-- / Menu -->

          <!-- Layout container -->
          <div class="layout-page">
            <!-- Navbar -->

            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
              <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                  <i class="bx bx-menu bx-sm"></i>
                </a>
              </div>

              <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                <ul class="navbar-nav flex-row align-items-center ms-auto">


                  <!-- User -->
                  <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <div class="avatar avatar-online">
                        <img src="../../../assets/img/profile/user.jpg" alt class="w-px-40 h-auto rounded-circle" />
                      </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <a href="../../../logout.php">Logout</a>
                      </a>

                      </a>
                  </li>
                </ul>
                </li>
                <!--/ User -->
                </ul>
              </div>
            </nav>
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
              <!-- Content -->
              <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                  <div class="col-lg mb-4 order-0">
                    <button type="button" class="mb-4 btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalInsert">
                      <i class='menu-icon tf-icons bx bx-news'></i> Tambah Data Berita
                    </button>
                    <?php
                    if (isset($_SESSION['text'])) : ?>
                      <div class="alert alert-<?= $_SESSION['color'] ?> alert-dismissible" role="alert">
                        <h6 class="alert-heading d-flex align-items-center fw-bold mb-1"><?= $_SESSION['title'] ?></h6>
                        <p class="mb-0"><?= $_SESSION['text'] ?></p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                      </div>
                      <script type="text/javascript">
                        $(document).ready(function() {
                          window.setTimeout(function() {
                            $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
                              $(this).remove();
                            });
                          }, 3000);
                        });
                      </script>
                    <?php
                      unset($_SESSION['color']);
                      unset($_SESSION['title']);
                      unset($_SESSION['text']);
                    endif;
                    ?>
                    <div class="card">
                      <div class="p-3 table-responsive">
                        <table id="myTable" class="table table-striped">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Kategori</th>
                              <th>Gambar</th>
                              <th>Judul</th>
                              <th>Deskripsi</th>
                              <th class="text-center">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $no = 1;
                            $query_select = mysqli_query($db, "SELECT * FROM berita Join kategori ON berita.id_kategori = kategori.id_kategori");
                            while ($row = mysqli_fetch_assoc($query_select)) {
                              echo '<tr>';
                              echo '<td>' . $no++ . '</td>';
                              echo '<td>' . $row['nama_kategori'] . '</td>';
                              echo '<td>' . $row['gambar'] . '</td>';
                              echo '<td>' . $row['judul'] . '</td>';
                              echo '<td><p class="deskrip">' . $row['deskripsi'] . '</p></td>'; ?>
                              <td>
                                <div class="d-grid gap-2 col-5 mx-auto">
                                  <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modaledit<?= $no; ?>"><i class="bi bi-pen"></i> Edit Berita</a>
                                  <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modaldelete<?= $no; ?>"><i class="bi bi-trash"></i> Delete</a>
                                </div>
                              </td>
                              <!-- Modal Edit -->
                              <div class="modal fade" id="modaledit<?= $no ?>" tabindex="-1" aria-labelledby="modaleditLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="modaleditLabel">Edit <?= $row['username'] ?></h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" action="edit.php">
                                        <label class="form-label">Level</label>
                                        <div class="input-group mb-3">
                                          <span class="input-group-text cursor-pointer"><i class="bx bx-lock-alt"></i></span>
                                          <select name="level" id="role" class="form-select">
                                            <option value="user" <?= ($row['level'] == 'user') ? 'selected' : ''; ?>>User</option>
                                            <option value="admin" <?= ($row['level'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
                                          </select>
                                        </div>
                                        <input type="hidden" name="username" id="username" value="<?= $row['username'] ?>">
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button name="submitedit" type="submit" class="btn btn-primary">Confirm</button>
                                        </div>
                                    </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                              <!-- / Modal Edit -->

                              <!-- Modal Delete -->
                              <div class="modal fade" id="modaldelete<?= $no ?>" tabindex="-1" aria-labelledby="modaldeleteLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="modaldeleteLabel">Delete Berita</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" action="delete.php">
                                        <p>Yakin untuk menghapus berita ?</p>
                                        <input type="hidden" name="judul" id="judul" value="<?= $row['judul'] ?>">
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button name="submitdelete" type="submit" class="btn btn-danger">Confirm</button>
                                        </div>
                                    </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                              <!-- / Modal Delete -->

                            <?php } ?>
                          </tbody>
                        </table>

                        <script>
                          new DataTable('#myTable', {
                            responsive: true,
                            rowReorder: {
                              selector: 'td:nth-child(2)'
                            }
                          });
                        </script>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- / Content -->

              <!-- Modal Insert -->
              <div class="modal fade" id="modalInsert" tabindex="-1" aria-labelledby="modalInsertLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalInsertLabel">Tambah Berita</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="create.php" enctype="multipart/form-data">
                        <label class="form-label"></label>
                        <div class="input-group mb-3">
                          <span class="input-group-text cursor-pointer"><i class="bx bxs-file-image"></i></span>
                          <input type="file" name="gambar" class="form-control" accept="image/*" required />
                        </div>
                        <label class="form-label"></label>
                        <div class="input-group mb-3">
                          <span class="input-group-text cursor-pointer"><i class="bx bx-book"></i></span>
                          <input type="text" name="judul" class="form-control" placeholder="Judul" required />
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text cursor-pointer"><i class="bx bx-category"></i></span>
                          <select name="id_kategori" id="role" class="form-select">
                            <?php
                            $query_kategori = mysqli_query($db, 'SELECT * FROM kategori');
                            foreach ($query_kategori as $k) {
                            ?>
                              <option value="<?= $k['id_kategori'] ?>"><?= $k['nama_kategori'] ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                        <label class="form-label"></label>
                        <div class="input-group mb-3">
                          <span class="input-group-text cursor-pointer"><i class="bx bx-book"></i></span>
                          <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Berita" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>

              <script>
                function password_show_hide() {
                  var x = document.getElementById("password");
                  var show = document.getElementById("show");
                  var hide = document.getElementById("hide");
                  hide.classList.remove("d-none");
                  if (x.type === "password") {
                    x.type = "text";
                    show.style.display = "none";
                    hide.style.display = "block";
                  } else {
                    x.type = "password";
                    show.style.display = "block";
                    hide.style.display = "none";
                  }
                }
              </script>

              <!-- Core JS -->
              <!-- build:js assets/vendor/js/core.js -->

              <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
              <script src="../../assets/vendor/libs/popper/popper.js"></script>
              <script src="../../assets/vendor/js/bootstrap.js"></script>
              <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
              <script src="../../assets/vendor/js/menu.js"></script>

              <!-- endbuild -->

              <!-- Vendors JS -->
              <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

              <!-- Main JS -->
              <script src="../../assets/js/main.js"></script>

              <!-- Page JS -->
              <script src="../../assets/js/dashboards-analytics.js"></script>

              <!-- Place this tag in your head or just before your close body tag. -->
              <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>

    </html>
<?php

  } else {
    echo "anda belumm login";
    header("location: ../../../Project/login/dashboard.php");
  }
} else {
  echo "anda belum login";
}
?>