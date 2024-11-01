<!doctype html>
<?php
  include "include/config.php";
  if(isset($_POST['simpan']))
  {
      $kategoriKODE = $_POST["InputKategoriKode"];
      $kategoriNAMA = $_POST["InputKategoriNama"];
      $kategoriKET = $_POST["InputKategoriKet"];
      $kategoriREFERENCE = $_POST["InputKategoriRef"];

      mysqli_query($connection, "insert into kategoriwisata values ('$kategoriKODE', '$kategoriNAMA', 
      '$kategoriKET', '$kategoriREFERENCE' )");
      header("location:inputkategori.php");
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Wisata</title>
  </head>
  <body>
    <!-- ini bagian kerja saya -->

<div class="col-sm-2">

</div>


<div class="col-sm-10">
  <form method="POST">
    <div class="form-group row">
    <label for="kategorikode" class="col-sm-3 col-form-label">kategori Kode</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategorikode" name="InputKategoriKode" placeholder="Inputkan Kode Kategori">
    </div>
  </div>

  <div class="form-group row">
    <label for="kategorinama" class="col-sm-3 col-form-label">kategori Nama</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategorinama" name="InputKategoriNama" placeholder="Inputkan Nama Kategori">
    </div>
  </div>

  <div class="form-group row">
    <label for="kategoriket" class="col-sm-3 col-form-label">kategori Keterangan</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategoriket" name="InputKategoriKet" placeholder="Inputkan Keterangan Kategori">
    </div>
  </div>

  <div class="form-group row">
    <label for="kategoriref" class="col-sm-3 col-form-label">kategori Referensi</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategoriref" name="InputKategoriRef" placeholder="Inputkan Keterangan Referensi">
    </div>
  </div>

    <button type="submit" class="btn btn-secondary" value="simpan" name="simpan">Simpan</button>
    <button type="reset" class="btn btn-success">Batal</button>

</form>
</div>


<div class="row">
<div class="mt-3"></div>
	<div class="col-sm-12">
		<div class="jumbotron jumbotron-fluid rounded py-3">
			<div class="container">
				<h1 class="display-4">Daftar Tabel Kategori</h1>
	</div>
</div>

<form method="POST">
    <div class="form-group row mb-2">
    <label for="search" class="col-sm-3">Kode Foto</label>
    <div class="col-sm-6">
        <input type="text" name="search" class="form-control" id="search"
        value="<?php if (isset($_POST["search"])) {echo $_POST["search"];}?>"
        placeholder="Cari Kode Foto">
    </div>
    <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="Search">
    </div>
</form>

<form method="post">
	<div class="form-group row mb-2">
    <label for="search2" class="col-sm-3">Kode Destinasi</label>
    <div class="col-sm-6">
        <input type="text" name="search2" class="form-control" id="search2"
        value="<?php if (isset($_POST["search2"])) {echo $_POST["search2"];}?>"
        placeholder="Cari Nama Destinasi">
    </div>
    <input type="submit" name="kirim2" class="col-sm-1 btn btn-primary" value="Search">
    </div>
</form>

	<table class="table table-dark table-striped">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Kode Kategori</th>
				<th>Nama Kategori</th>
				<th>Keterangan Kategori</th>
				<th>Referensi Kategori</th>
			</tr>			
		</thead>

		<tbody>
			

			<?php
      
// --------------------- PAGING -- MEMBUAT GANTI HALAMAN ---------------- >
    $jumlahtampilan = 3;
    $halaman = (isset($_GET['page']))? $_GET['page'] : 1;
    $mulaitampilan = ($halaman - 1) * $jumlahtampilan;
// ----------------- AKHIR PAGING -- MEMBUAT GANTI HALAMAN ---------------- >
      
			if (isset($_POST['kirim'])) {
				$search = $_POST["search"];
				$query = mysqli_query($connection,  "select * from kategoriwisata
				where kategoriKODE like '%".$search."%'");
			} elseif (isset($_POST['kirim2'])) {
				$search2 = $_POST["search2"];
				$query = mysqli_query($connection,"select * from kategoriwisata
				where kategoriNAMA like '%".$search2."%'");
			} else {
				$query = mysqli_query($connection, "select * from kategoriwisata");
			}
			$nomor = 1;
			while ($row = mysqli_fetch_array($query))
			{ ?>
				<tr>
					<td><?php echo $mulaitampilan + $nomor;?></td>
					<td><?php echo $row['kategoriKODE'];?></td>
					<td><?php echo $row['kategoriNAMA'];?></td>
					<td><?php echo $row['kategoriKET'];?></td>
					<td><?php echo $row['kategoriREFERENCE'];?></td>
				</tr>
			<?php $nomor = $nomor + 1;?>
			<?php }	?>
		</tbody>
		
	</table>

  <!--------------------- PAGING -- MEMBUAT GANTI HALAMAN ---------------->
  <?php 
    $query = mysqli_query($connection, "SELECT * FROM kategoriwisata");
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