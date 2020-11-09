<?php
include "../koneksi.php";
session_start();
$menu = mysqli_query($conf, "SELECT * FROM menu_mknn ");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"> <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../image/food1.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#tentangmakanan">Tentang Makanan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#datamakanan">Data Makanan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#menumakanan">Menu Makanan</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="tentangmakanan">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <span class="text-primary">Menu Makanan</span>
                    </h1>
                    <p class="lead mb-5">daftar menu masakan ini adalah makanan yang sudah menjadi andalan nusantara.</p>
                </div>
          
            <hr class="m-0" />

            </section>
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <h2>Menu Makanan</h2>

                    <table class="table">

                    <tr>
            
                        <th>Nama makanan</th>
                        <th>Jenis Makanan</th>
            
                    <tr>
                    <?php 
                   while ($a = mysqli_fetch_array($menu)){
                    echo "
                    <tr>
        
                     <td>$a[nama_makanan]</td>
                     <td>$a[jenis_makanan]</td>
                 </tr>
                    ";
                }    
                    ?>
                    </table>
                    <p><a href="../logout.php"><button type="button" class="btn btn-dark">logout</button </p>

                </body>
                </html>

                        <!-- Bootstrap core JS-->
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
                        <!-- Third party plugin JS-->
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
                        <!-- Core theme JS-->
                        <script src="js/scripts.js"></script>
                    </body>
                </html>
