<!DOCTYPE html>
<html lang="en">
<?php
include "ADMIN/INCLUDE/config.php";
if(isset($_POST['Simpan']))
{
  $komenID= $_POST["komenid"];
  $komenNAMA = $_POST["komennama"];
  $komenEMAIL = $_POST["komenemail"];
  $komenKET = $_POST["komenket"];

  mysqli_query($connection, "INSERT INTO komen VALUES ('$komenID', '$komenNAMA',
  '$komenEMAIL', '$komenKET')");
  header("location:index.php");
}
  $restoran = mysqli_query($connection, "SELECT * FROM restoran");
  $oleh2 = mysqli_query($connection, "SELECT * FROM oleh2");
  $kategori = mysqli_query($connection, "SELECT * FROM kategoriwisata");
  $hotel = mysqli_query($connection, "SELECT * FROM hotel");
  $travel = mysqli_query($connection, "SELECT * FROM travel");
  $destinasi = mysqli_query($connection, "select * from destinasib, kategoriwisata where destinasib.kategoriKODE = kategoriwisata.kategoriKODE")
  /* $marfw = mysqli_query($connection, "select * from marcellinofw, destinasib2 where marcellinofw.destinasiKODE = marcellinofw.destinasiKODE") */
?>

<head>
    <title>My Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
</head>
<body>
<div class="container-fluid" style="background-color: #5999CC;">
    <!--- membuat menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">WebHakkau</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Kategori
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                    <?php
                        if(mysqli_num_rows($kategori) > 0)
                        {
                            while($row = mysqli_fetch_array($kategori))
                            { ?>
                                <li><a class="dropdown-item" href="#">
                                <?php echo $row["kategoriNAMA"];?></a></li>
                            <?php }
                        }
                    ?>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Hotel
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    <?php
                        if(mysqli_num_rows($hotel) > 0)
                        {
                            while($row = mysqli_fetch_array($hotel))
                            { ?>
                                <li><a class="dropdown-item" href="#">
                                <?php echo $row["hotelNAMA"];?></a></li>
                            <?php }
                        }
                    ?>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Travel
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                    <?php
                        if(mysqli_num_rows($travel) > 0)
                        {
                            while($row = mysqli_fetch_array($travel))
                            { ?>
                                <li><a class="dropdown-item" href="#">
                                <?php echo $row["lokasiNAMA"];?></a></li>
                            <?php }
                        }
                    ?>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Restoran
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                    <?php
                        if(mysqli_num_rows($restoran) > 0)
                        {
                            while($row = mysqli_fetch_array($restoran))
                            { ?>
                                <li><a class="dropdown-item" href="#">
                                <?php echo $row["restoranNAMA"];?></a></li>
                            <?php }
                        }
                    ?>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown5" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Oleh-Oleh
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown5">
                <?php
                        if(mysqli_num_rows($oleh2) > 0)
                        {
                            while($row = mysqli_fetch_array($oleh2))
                            { ?>
                                <li><a class="dropdown-item" href="#">
                                <?php echo $row["olehNAMA"];?></a></li>
                            <?php }
                        }
                    ?>
                </ul>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    <!-- akhir pembuatan menu -->

    <!-- pembuatan media-->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000"> <!-- ADMIN/images/sentosa-island_carousel1_1670x940.jpg -->
        <img src="https://images.unsplash.com/photo-1599883939507-6e44b428882c?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Candi Borobudur">
        <div class="carousel-caption d-none d-md-block" style="color: white; font-weight: bold;" >
            <h1>Sentosa Island</h1>
            <p>SINGAPORE</p>
        </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000"> <!-- ADMIN/images/Christ-the-Redeemer-Rio-de-Janeiro-Brazil.jpg -->
        <img src="https://images.unsplash.com/photo-1518639192441-8fce0a366e2e?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Placeholder Image 1">
        <div class="carousel-caption d-none d-md-block" style="color: white; font-weight: bold;">
            <h5>Christ The Redeemer</h5>
            <p>BRAZIL</p>
        </div>
        </div>
        <div class="carousel-item"> <!-- ADMIN/images/Bangunan-utama-Kuil-Nikko-Toshogu.jpg -->
        <img src="https://images.unsplash.com/photo-1673372816140-3d09cfc45282?q=80&w=1981&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Placeholder Image 2">
        <div class="carousel-caption d-none d-md-block" style="color: white; font-weight: bold;">
            <h5>Kuil Shinto</h5>
            <p>JEPANG</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div> <!-- akhir dari media -->

<!-- Deskripsi web -->
<div class="container-fluid text-center mt-4 mb-4 p-5" style="background-color: #5FBDFF">
<h1 class="display-1 font-monospace">WEBSITE SAYA</h1>
<hr class="my-4">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat culpa magni maiores asperiores quasi? 
  Excepturi voluptatem voluptatum numquam quam distinctio ipsum corporis incidunt labore porro, delectus quia cupiditate. Sed, laudantium?
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem tempore unde delectus provident voluptatibus 
repudiandae dicta natus iste sapiente? Ex sint voluptate porro quibusdam iure sunt fugit deserunt architecto quam.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum eius inventore exercitationem dolorum accusamus provident, 
rem impedit veritatis velit dolorem. Perspiciatis quis architecto, soluta similique cupiditate sed nostrum possimus.
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum ea porro ipsam, voluptatum doloremque repellendus ipsum dolorem ut, 
fuga unde aliquam possimus ad, recusandae aspernatur reiciendis alias. Dolore, sunt unde.</p>
<h1 class="display-4 font-monospace">Travel News</h1>
</div>
<!-- akhir dari deskripsi web -->
<!-- judul berita latest news -->

<!-- penutup latest news -->
    <!-- membuat berita -->
    <div class="container">
    <div class="row">
    <div class="col-sm-9">
<!-- judul berita latest news -->
        <div class="container mt-3 mb-3" style="background-color: #5FBDFF; padding: 50px;">
            <h1 class="text-left font-monospace">Latest News</h1>
        </div>
<!-- penutup latest news --> 
<div class="container-warna" style="background-color: #FFFFFF;">
        <?php
        if (mysqli_num_rows($destinasi)>0)
        {
            while($row = mysqli_fetch_array($destinasi))
                { ?>
                <div class="d-flex mb-4">
                    <div class="flex-shrink-0">
                        <img style="width:200px; height: 100%;"  src="ADMIN/images/<?php echo $row["destinasiFOTO"]?>" alt="No Image">
                    </div>
                    <div class="flex-grow-1 ms-4">
                        <h2><?php echo $row["destinasiNAMA"];?><small class="text-muted">
                        <i><?php echo $row["kategoriNAMA"];?></i></small></h2>
                        <p><?php echo substr ($row["destinasiKET"],0,150);?></p>
                        <a href="#" type="button" class="btn btn-outline-info mb-2">Read More</a>
                    </div>
                </div>
                <?php } } ?>
    </div> <!-- penutup col-sm-9 -->
</div> <!-- penutup container warna -->

<div class="col-sm-3">
  <div class="card mt-3" style="width: 20rem;">
      <div class="container" style="background-color: #5FBDFF; padding: 50px; white-space: nowrap;">
          <h1 class="text-left font-monospace">Videos</h1>
      </div>
      <iframe class="mt-3" width="110%" height="40%" src="https://www.youtube.com/embed/OO4cuHmkm3k?si=-Aj4OEuhmcWW8ECT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="card-body">
          <h5 class="card-title">Christ The Redeemer</h5>
          <p class="card-text">Courtesy Of YouTube</p>
      </div>
      <iframe width="110%" height="40%" src="https://www.youtube.com/embed/OO4cuHmkm3k?si=-Aj4OEuhmcWW8ECT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="card-body mb-5">
          <h5 class="card-title">Christ The Redeemer</h5>
          <p class="card-text">Courtesy Of YouTube</p>
      </div>
      <iframe width="110%" height="40%" src="https://www.youtube.com/embed/OO4cuHmkm3k?si=-Aj4OEuhmcWW8ECT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="card-body mb-5">
          <h5 class="card-title">Christ The Redeemer</h5>
          <p class="card-text">Courtesy Of YouTube</p>
      </div>
  </div>
</div>

    <div class="col-sm-3">
    </div> <!-- penutup col-sm-3 -->
    </div> <!-- penutup berita -->

<!-- deskripsi pilihan -->
<div class="container-fluid" style="background-color: #FFFFFF; padding-top: 100px;">
  <h1 class="display-4 text-center">What's In WebsiteKu</h1>
  <div class="row text-center mb-5 p-5 d-flex">
    <div class="col-sm p-4" style="border: 2px solid black; border-radius: 10px;">
      <p>Destinasi</p>
      <a href="" style="text-decoration: none;">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
        </svg>
      </a>
    </div>
    <div class="col-sm p-4 mx-5" style="border: 2px solid black; border-radius: 10px;">
      <p>Hotel</p>
      <a href="" style="text-decoration: none;">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black" class="bi bi-house-fill" viewBox="0 0 16 16">
          <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
          <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
        </svg>
      </a>
    </div>
    <div class="col-sm p-4" style="border: 2px solid black; border-radius: 10px;">
      <p>Restaurant</p>
      <a href="" style="text-decoration: none;">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black" class="bi bi-egg-fried" viewBox="0 0 16 16">
          <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
          <path d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z"/>
        </svg>
      </a>
    </div>
  </div>
</div>
  <!-- akhir dari deskripsi -->

    <!-- Carousel wrapper -->
<div
  id="carouselMultiItemExample"
  class="carousel slide carousel-dark text-center"
  data-mdb-ride="carousel"
>
  <!-- Controls -->
<!--   <div class="d-flex justify-content-center mb-4">
    <button
      class="carousel-control-prev position-relative"
      type="button"
      data-mdb-target="#carouselMultiItemExample"
      data-mdb-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next position-relative"
      type="button"
      data-mdb-target="#carouselMultiItemExample"
      data-mdb-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> -->

  <h1 class="font-monospace" style="text-align: left; margin-left: 10px; margin-bottom:70px;">Destinasi pilihan</h1>

<!-- destinasi pilihan destinasi-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9">
            <?php
                $destinasi = mysqli_query($connection, "SELECT * FROM destinasib");

                if (mysqli_num_rows($destinasi) > 0) {
                    while ($row = mysqli_fetch_array($destinasi)) {
            ?>
                        <div class="border border-dark rounded mb-4" style="background-color: white; border-radius: 10px;">
                            <div class="d-flex justify-content-between" style="text-align: left; margin: 20px 50px 20px 20px;">
                                <div>
                                    <h5><?php echo $row["destinasiNAMA"]; ?></h5>
                                    <p><?php echo substr($row["destinasiKET"], 0, 150); ?></p>
                                </div>
                                <img style="width: 200px; height: 100%;" src="ADMIN/images/<?php echo $row["destinasiFOTO"]; ?>" alt="No Image">
                            </div>
                        </div>
            <?php
                    }
                }
            ?>
        </div> <!-- end of col-sm-9 -->

        <div class="col-sm-3">
            <?php
                $sql4 = mysqli_query($connection, "SELECT * FROM hotel");
                $jumlah4 = mysqli_num_rows($sql4);
            ?>

            <?php
                $sql5 = mysqli_query($connection, "SELECT * FROM restoran");
                $jumlah5 = mysqli_num_rows($sql5);
            ?>

            <?php
                $sql6 = mysqli_query($connection, "SELECT * FROM oleh2");
                $jumlah6 = mysqli_num_rows($sql6);
            ?>

            <div class="card" style="width: 20rem;">
                <ul class="list-group list-group-flush">
                    <a href="#" style="text-decoration: none;">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pilihan Hotel
                            <span class="badge bg-secondary rounded-circle"><?php echo $jumlah4?></span>
                        </li>
                    </a>
                    <a href="#" style="text-decoration: none;">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pilihan Restaurant
                            <span class="badge bg-secondary rounded-circle"><?php echo $jumlah5?></span>
                        </li>
                    </a>
                    <a href="#" style="text-decoration: none;">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pilihan Oleh-Oleh
                            <span class="badge bg-secondary rounded-circle"><?php echo $jumlah6?></span>
                        </li>
                    </a>
                </ul>
            </div>
        </div> <!-- end of col-sm-3 -->
    </div> <!-- end of row -->
</div> <!-- end of container fluid -->
<!-- akhir dari piihan destinasi-->

<!-- foto destinasi -->
<div class="container-fluid text-center mt-4 mb-2">
    <h1 class="display-4 font-monospace p-4">Wonderful Nusantara</h1>
    <h1 class="mb-5">Foto Destinasi</h1>
</div>

<div class="container-fluid" style="background-color: white;">
    <div class="container text-center mt-4 mb-4 p-5">
        <div class="row">
            <?php 
            $fotodest = mysqli_query($connection, "SELECT * FROM fotodestinasi");

            if (mysqli_num_rows($fotodest) > 0) {
                while ($row = mysqli_fetch_array($fotodest)) {
            ?>
                    <div class="col-md-3 mt-3">
                        <div style="background-color: white; border-radius: 10px;">
                            <img style="width: 100%; height: 200px;" src="ADMIN/images/<?php echo $row['fotodestinasiFILE']; ?>" alt="Destination Photo">
                            <p class="card-text" style="text-align: right;"><?php echo $row['fotodestinasiNAMA']; ?></p>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "Tidak ada foto.";
            }
            ?>
        </div>
    </div> <!-- end of container -->
</div> <!-- end of container-fluid -->
<!-- akhir dari fotodestinasi -->

<!-- hotel dan restoran -->
<!-- hotel dan restoran -->
<!-- hotel dan restoran -->
<div class="tulisan2" style="text-align:left">
<h1 class="display-3 mt-5 font-monospace">Pilih Hotel</h1>
<h1 class="display-3 mt-5 font-monospace">Pilih Restoran</h1>
</div>

<div class="container mt-5" style="background-color: #5FBDFF;">
    <div class="row">
        <?php
        $hotel = mysqli_query($connection, "SELECT * FROM hotel");
        if (mysqli_num_rows($hotel) > 0) {
            while ($row = mysqli_fetch_array($hotel)) {
        ?>
                <div class="col-md-6 mt-5">
                    <div class="cont p-5">
                        <div style="background-color: white; width: 100%; height: 100%; 
                            padding-right: 50px; display: flex; justify-content: space-between; position: relative; border-radius: 10px; border: 1px solid #000;">
                            <!-- Added border-radius and removed inline border -->

                            <div class="p-5">
                                <h5 style="font-size: 35px;"><?php echo substr($row["hotelNAMA"], 0, 16); ?></h5>
                            </div>
                            <div class="gambar">
                                <img style="width: 200px; height: 80%; margin-top: 20px;" src="ADMIN/images/<?php echo $row["hotelFOTO"]; ?>" alt="No Image">
                            </div>
                            <div style="width: 7%; border-radius: 10px; background-color: maroon; position: absolute; top: 0; bottom: 0; right: 0; left: 100;"></div>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</div>

<div class="tulisan2" style="text-align:center">
<h1 class="display-3 mt-5 font-monospace">MarcellinoFW</h1>
<p style= font-size:35px;>Form Baru Mengambil Data Dari Destinasi</p>
</div>

<div class="container mt-5" style="background-color: #FFFFFF;">
    <div class="row">
        <?php
        $marfw = mysqli_query($connection, "select * from marcellinofw, destinasib2
        where marcellinofw.destinasiKODE = destinasib2.destinasiKODE");
        if (mysqli_num_rows($marfw) > 0) {
            while ($row = mysqli_fetch_array($marfw)) {
        ?>
                <div class="col-md-6 mt-5">
                    <div class="cont p-5">
                        <div style="background-color: white; width: 100%; height: 100%; 
                            padding-right: 50px; display: flex; justify-content: space-between; position: relative; border-radius: 10px; border: 1px solid #000;">
                            <!-- Added border-radius and removed inline border -->

                            <div class="p-5">
                                <h5 style="font-size: 35px;"><?php echo substr($row["marcelKOTA"], 0, 16); ?></h5>
                                <p><b><?php echo substr($row["destinasiNAMA"], 0, 30);?></b>,<br><?php echo substr($row["destinasiKET"], 0, 49); ?></p>
                            </div>
                            <div class="gambar">
                                <img style="width: 200px; height: 50%; margin-top: 65px;" src="ADMIN/images/<?php echo $row["destinasiFOTO"]; ?>" alt="No Image">
                            </div>
                            <div style="width: 7%; border-radius: 10px; background-color: maroon; position: absolute; top: 0; bottom: 0; right: 0; left: 100;"></div>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</div>
<!-- penutup hotel dan restoran -->

<!-- author -->
<div class="container-fluid" style="background-color: white;">
    <div class="container text-center mt-4 mb-4 p-5">
        <h1 class="mt-3 p-4">What did the author say?</h1>
        <div class="contauth" style="display:flex; justify-content:center;">
        <img style="width: 200px; height: 200px; border-radius: 50%; margin-right:20px;" src="ADMIN/images/graduation .jpg" alt="No Image">
        <div class="auteks ml-4">
        <h4 class="mt-4">Marcellino Frederick Wijaya</h4>
        <p style="font-size:20px;">NIM:825220021
        <br>SI A</p>
        <p style="font-size:20px;"> "If you're not a good shot today, don't worry.
        <br>There are other ways to be useful."</p>
        </div>
        </div>
    </div>
</div>
<!-- author -->

<div class="container">
    <div class="row">
        <!-- Input Komentar -->
        <div class="col-md-6">
            <div class="card" style="width: 38rem;">
                <div class="card-body">
                    <h2 class="card-title font-monospace">Berikan Komentar Anda</h2>
                    <form method="POST">
    <div class="mb-3 row">
        <label for="komenid" class="col-sm-2 col-form-label">ID:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="komenid"  id="komenid">
            </div>
    </div>
    <div class="mb-3 row">
        <label for="komennama" class="col-sm-2 col-form-label">Nama:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="komennama"  id="komennama">
            </div>
    </div>
    <div class="mb-3 row">
        <label for="komenemail" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="komenemail"  id="komenemail">
            </div>
    </div>
    <div class="mb-3 row">
        <label for="komenket" class="col-sm-2 col-form-label">Komentar:</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="komenket" id="komenket" style="width: 475px; height:300px; resize: none; vertical-align: top;"></textarea>
            </div>
    </div>
    <div class="form-group row">
            <div class="mt-2"></div>
			<div class="col-sm-2"></div>
			<div class="col-sm-5">
      <div class="tombolkiri" style="margin-right: 80px;">
			<input type="submit" name="Simpan" class="btn btn-success" value="Simpan">
			<input type="reset" name="Batal" class="btn btn-danger" value="Batal">
      </div>
		</div>
	</div>
</form>
  </div>
</div>
</div>

<div class="col-md-6">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Komentar</th>
                    </tr>
                </thead>
                <tbody>
<?php
if(isset($_POST['kirim']))
    {
        $search = $_POST["search"];
        $query = mysqli_query ($connection, "select * from komen
        where komenNAMA like '%".$search."%'");
    }
    else
    {
        $query = mysqli_query ($connection, "select * from komen");
    }
$nomor = 1;
while ($row = mysqli_fetch_array($query)) {
?>
    <tr>
      <td><?php echo $row['komenNAMA']; ?></td>
      <td><?php echo $row['komenEMAIL']; ?></td>
      <td><?php echo $row['komenKET']; ?></td>
    </tr>
<?php } ?>
</tbody>
            </table>
        </div>
    </div>
</div>
<!-- akhir dari input komentar -->


    </div> <!-- penutup row -->
    </div> <!-- penutup container -->

</div> <!-- akhir dari container fluid -->

<style>

footer {
    border-top: solid rgba(105, 105, 105, 0.482) 0.1px;
    background-color: black;
    color: white;
    padding: 20px 0;
    text-align: center;
    width: 100%; /* Lebar penuh */
}

.bgfooter {
    background-color: black;
} 

.container { 
    width: 1250px;
    margin: auto;
    position: relative;
}

.kolom {
    display: flex;
    justify-content: space-between;
    padding-top: 60px;
}

.aboutus, .latnews, .usjoin {
    flex: 1;
    margin-right: 15px;
}

.aboutus, .latnews, .usjoin {
    flex: 1;
    font-size: 20px;
}

.aboutus h3, .latnews h3, .usjoin h3 {
    position: relative;
    font-size: 15px;
    color: white;
}

.aboutus h3::after, .latnews h3::after, .usjoin h3::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 70px;
    border-bottom: 2px solid lightslategray;
}

.aboutus p, .usjoin p {
    margin-top: 35px;
    font-size: 15px;
    color: white;
}

.aboutus img {
    width: 40px;
    margin-top: 20px;
}

.aboutus img:hover {
    width: 42px;
}

.latnews {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 20px;
}

.latnews p, .latnews a {
    margin-top: 10px;
    font-size: 15px;
    color: white;
}

.pic {
    display: flex;
    align-items: center;
}

.pic img {
    width: 65px;
    margin-right: 10px;
    margin-top: 35px;
}

.tulisan {
    display: flex;
    flex-direction: column;
}

.tulisan a {
    text-decoration: none;
    color: white;
    margin-bottom: 5px;
}

.tulisan p {
    margin: 0;
}

.tool input {
    padding: 10px 5px;
    margin-top: 35px;
}

.usjoin p {
    margin-top: 30px;
    margin-left: 2px;
    float: left;
}

.usjoin {
    margin-right: 0;
    margin-left: 15px;
}

.buttonbawah input{
    float: right;
    border: none;
    padding: 12px 30px;
    background-color: white;
    border-radius: 5px;
    position: absolute;
    left: 87.5%;
    top: 17.8%;
    cursor: pointer;
}

.buttonbawah a {
    color: black;
    text-decoration: none;
}
</style>
<div class="bgfooter">
    <div class="container">

        <div class="kolom">
            <div class="aboutus">
                <h3>About Us</h3>
                <p>Inventore veritatis et quasi architecto beatae dicta sed ut perspiciatis unde omnis iste natus laudantium.<br><br>
                Sed ut perspiciatis unde omnis iste natus voluptatem fringilla tempor dignissim at, pretium et arcu.</p>
                <img src="https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_instagram-256.png" alt="">
                <img src="https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_twitter-512.png" alt="">
                <img src="https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_youtube-512.png" alt="">
                <img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Facebook_colored_svg_copy-256.png" alt="">
            </div>

            <div class="latnews">
                <h3>Latest News</h3>
                <div class="pic">
                <img src="https://images.squarespace-cdn.com/content/v1/606d159a953867291018f801/1619987722169-VV6ZASHHZNRBJW9X0PLK/Key_Art_02_layeredjpg.jpg?format=1500w" alt="">
                <div class="tulisan">
                <a href="#">Lorem ipsum dolor sit amet</a>
                <p>Oct 3, 2023</p>
                </div>
                </div>

                <div class="pic">
                <img src="https://images.squarespace-cdn.com/content/v1/606d159a953867291018f801/1619987722169-VV6ZASHHZNRBJW9X0PLK/Key_Art_02_layeredjpg.jpg?format=1500w" alt="">
                <div class="tulisan">
                <a href="#">Lorem ipsum dolor sit amet</a>
                <p>Oct 3, 2023</p>
                </div>
                </div>

                <div class="pic">
                <img src="https://images.squarespace-cdn.com/content/v1/606d159a953867291018f801/1619987722169-VV6ZASHHZNRBJW9X0PLK/Key_Art_02_layeredjpg.jpg?format=1500w" alt="">
                <div class="tulisan">
                <a href="#">Lorem ipsum dolor sit amet</a>
                <p>Oct 3, 2023</p>
                </div>
                </div>
            </div>

            <div class="usjoin">
                <h3>Join Us</h3>

                <div class="tool">
                    <input type="email" placeholder="E.g. john@doe.com" name=" ">
                    
                    <div class="buttonbawah">
                        <input type="submit" value="SEND">
                    </div>
                </div>
                
                <p>Be One Of Us Now!</p>
            </div>
    </div>


    <div class="container">
        <footer>
            <p>&copy; 2023 UAS WebDev || Marcellino Frederick Wijaya 825220021</p>
        </footer>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
</html>