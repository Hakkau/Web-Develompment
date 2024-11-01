<!doctype html>

<?php
  include "include/config.php";
  if(isset($_POST['simpan']))
  {
      $kategoriberitaKODE = $_POST["berKategoriKode"];
      $kategoriberitaNAMA = $_POST["berKategoriNama"];
      $kategoriberitaKET = $_POST["berKategoriKet"];

      mysqli_query($connection, "insert into kategoriberita values ('$kategoriberitaKODE', '$kategoriberitaNAMA', 
      '$kategoriberitaKET')");
      header("location:inputberita.php");
  }
?>

<?php include "INCLUDE/head.php"?>
    <body class="sb-nav-fixed">
        <?php include "include/menunav.php"?>
        <div id="layoutSidenav">
<?php include "INCLUDE/menu.php"?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Input Data Berita</h1>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">	
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Wisata</title>
  </head>
  <body>
    <!-- ini bagian kerja saya -->


<h1 style="background-color : lightgray">ENTRI DATA KATEGORI BERITA</h1>

<div class="col-sm-2">

</div>

<div class="row">
<div class="col-sm-1">
</div>

<div class="col-sm-10">
  <form method="POST">
    <div class="form-group row">
    <label for="beritakode" class="col-sm-3 col-form-label">kategori Kode</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="beritakode" name="berKategoriKode" placeholder="Kode Kategori Berita">
    </div>
  </div>

  <div class="form-group row">
    <label for="beritanama" class="col-sm-3 col-form-label">kategori Nama</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="beritanama" name="berKategoriNama" placeholder="Nama Kategori Berita">
    </div>
  </div>

  <div class="form-group row">
    <label for="beritaket" class="col-sm-3 col-form-label">kategori Keterangan</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="beritaket" name="berKategoriKet" placeholder="Keterangan Kategori Berita">
    </div>
  </div>

    <button type="submit" class="btn btn-secondary" value="simpan" name="simpan">Simpan</button>
    <button type="reset" class="btn btn-success">Batal</button>

</form>
</div>


<div class="jumbrotron mt-5">
    <h2 class="display-5">Daftar Destinasi Wisata</h2>
</div>

<form method="POST">
    <div class="form-group row mb-2">
    <label for="search" class="col-sm-3">Nama Destinasi</label>
    <div class="col-sm-6">
        <input type="text" name="search" class="form-control" id="search"
        value="<?php if (isset($_POST["search"])) {echo $_POST["search"];}?>"
        placeholder="Cari Nama Destinasi">
    </div>
    <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="Search">
    </div>
</form>


<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Kode Berita</th>
        <th scope="col">Nama Berita</th>
        <th scope="col">Kategori Berita</th>
        <th colspan="2" style="text-align : center">Aksi</th>
    </tr>
</thead>
<tbody>
<?php
/* $query = mysqli_query($connection, "select destinasi.* from destinasi"); */
$jumlahtampilan = 2;
$halaman = (isset($_GET['page']))? $_GET['page'] : 1;
$mulaitampilan = ($halaman - 1) * $jumlahtampilan;

if(isset($_POST['kirim']))
    {
        $search = $_POST["search"];
        $query = mysqli_query ($connection, "select * from kategoriberita
        where kategoriberitaNAMA like '%".$search."%'limit $mulaitampilan, $jumlahtampilan");
    }
    else
    {
        $query = mysqli_query ($connection, "select * from kategoriberita limit $mulaitampilan, $jumlahtampilan");
    }
$nomor = 1;
while ($row = mysqli_fetch_array($query)) {
?>
    <tr>
        <td><?php echo $mulaitampilan + $nomor; ?></td>
        <td><?php echo $row['kategoriberitaKODE']; ?></td>
        <td><?php echo $row['kategoriberitaNAMA']; ?></td>
        <td><?php echo $row['kategoriberitaKET']; ?></td>

          <td width="5px">
            <a href="beritaedit.php?ubah=<?php echo $row["kategoriberitaKODE"]?>"
            class="btn btn-success btn-sm" title="EDIT">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg>
            </a>
        </td>

        <td width="5px">
            <a href="beritahapus.php?hapus=<?php echo $row["kategoriberitaKODE"]?>"
            class="btn btn-danger btn-sm" title="HAPUS">
            <i class="bi bi-trash"></i>
        </td> 

    </tr>
    <?php $nomor = $nomor + 1; ?>
<?php } ?>

</tbody>

</table>
<!--------------------- PAGING -- MEMBUAT GANTI HALAMAN ---------------->
<?php 
    $query = mysqli_query($connection, "SELECT * FROM kategoriberita");
    $jumlahrecord = mysqli_num_rows($query);
    $jumlahpage = ceil($jumlahrecord/$jumlahtampilan);
  ?>

<!-- TAMPILAN PADA HALAMAN PAGINATION INI DAPAT DIAMBIL DARI BOOTSTRAP 5 
		 PADA BAGIAN components -> pagination 
-->
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="?page=<?php $nomorhal=1; echo $nomorhal?>">PERTAMA</a></li>
    <?php for($nomorhal=1; $nomorhal<=$jumlahpage; $nomorhal++)
    { ?>
    <li class="page-item">
      <?php 
      if($nomorhal!=$halaman)
      { ?>  
      <a class="page-link" href="?page=<?php echo $nomorhal?>"><?php echo $nomorhal?></a>
      <?php }
      else { ?>
      <a class="page-link" href="?page=<?php echo $nomorhal?>"><?php echo $nomorhal?></a>
    <?php } ?>
    </li>
    <?php } ?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $nomorhal-1?>">TERAKHIR</a></li>
  </ul>
</nav>

<!----------------- AKHIR PAGING -- MEMBUAT GANTI HALAMAN ---------------->
</div> <!-- penutup class col 10-->
</div> <!-- penutup row  -->


    <!-- akhir kerja saya -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <?php include "INCLUDE/footer.php"?>
            </div>
        </div>
        <?php include "INCLUDE/jsscript.php"?>
  </body>
</html>