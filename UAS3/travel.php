<!DOCTYPE html>
<html>

<?php
	include "include/config.php";
	if(isset($_POST['Simpan']))
	{
		$lokasiKODE = $_POST['lokasikode'];
		$lokasiNAMA = $_POST['lokasinama'];
		
		mysqli_query($connection, "insert into travel values ('$lokasiKODE', '$lokasiNAMA')");
		header("location:travel.php");
		
	}
?>

<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">	
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

<?php include "INCLUDE/head.php"?>
    <body class="sb-nav-fixed">
        <?php include "include/menunav.php"?>
        <div id="layoutSidenav">
<?php include "INCLUDE/menu.php"?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Input Data Travel</h1>

<body>

<div class="row">

<div class="col-sm-12">
<div class="jumbotron">
	<h2 class="display-5">Input destinasi Travel(Lokasi)</h2>
</div>

<form method="POST">

  <div class="mb-3 row">
    <label for="lokasikode" class="col-sm-3 col-form-label">Kode Travel(Lokasi)</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="lokasikode" id="lokasikode" maxlength="4">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="lokasinama" class="col-sm-3 col-form-label">Lokasi Travel</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="lokasinama" id="lokasinama">
    </div>
  </div>

  <div class="form-group row">
  <div class="col-sm-3">
  </div>
  <div class="col-sm-9">
  	<input type="submit" class="btn btn-secondary" value="Simpan" name="Simpan">
	<input type="reset" class="btn btn-success" value="Batal" name="Batal">  
  </div>	
  </div>

</form>

<div class="jumbotron mt-5">
	<h2 class="display-5">Data Travel Lokasi Wisata</h2>
</div>

<!-- untuk membuat form pencarian data -->
	<form method="POST">
		<div class="form-group row mb-2">
		<label for="search" class="col-sm-3">Nama Lokasi</label>
		<div class="col-sm-6">	
			<input type="text" name="search" class="form-control" id="search"
			value="<?php if(isset($_POST["search"])) {echo $_POST["search"];}?>"
			placeholder="Cari Nama Lokasi">
		</div>
		<input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="Search">
		</div>
	</form>
<!-- akhir dari pencarian -->

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Lokasi</th>
      <th scope="col">Nama Lokasi</th>
	  <th colspan="2" style="text-align : center">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php 



// --------------------- PAGING -- MEMBUAT GANTI HALAMAN ---------------- >
    $jumlahtampilan = 3;
    $halaman = (isset($_GET['page']))? $_GET['page'] : 1;
    $mulaitampilan = ($halaman - 1) * $jumlahtampilan;

// ----------------- AKHIR PAGING -- MEMBUAT GANTI HALAMAN ---------------- >


  
//	$query = mysqli_query($connection, "select destinasi.* 
//	from destinasi");
	if(isset($_POST["kirim"]))
	{
		$search = $_POST["search"];
		$query = mysqli_query($connection, "select travel.* 
			from travel
			where lokasiNAMA like '%".$search."%' limit $mulaitampilan, $jumlahtampilan");
// --------------------- PAGING -- MEMBUAT GANTI HALAMAN ---------------- 
//	pada bagian ini tambhan --- limit $mulaitampilan, $jumlahtampilan ---	

	}else
		{
			$query = mysqli_query($connection, "select travel.* 
				from travel limit $mulaitampilan, $jumlahtampilan");
		}
//	pada bagian ini tambhan --- limit $mulaitampilan, $jumlahtampilan ---	


	$nomor = 1;
	while($row = mysqli_fetch_array($query))
	{
  ?>
    <tr>
      <td><?php echo $mulaitampilan + $nomor; ?></td> 
<!-- pad bagian ini ganti dengan $mulaitampilan + $nomor -->
<!-- ----------------- AKHIR PAGING -- MEMBUAT GANTI HALAMAN -------------- -->      
      <td><?php echo $row['lokasiKODE'];?></td>
      <td><?php echo $row['lokasiNAMA'];?></td>
	  
	  <td width="5px">
		<a href="traveledit.php?ubah=<?php echo $row["lokasiKODE"]?>" 
			class="btn btn-success btn-sm" title="EDIT"/>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
		  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
		  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
		</svg>	  
	  </td>
	  <td width="5px">
		<a href="travelhapus.php?hapus=<?php echo $row["lokasiKODE"]?>" 
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
    $query = mysqli_query($connection, "SELECT * FROM travel");
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


</div> <!-- ini penutup class=col-sm-10 -->
</div> <!-- ini penutup class=row -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


<!-- <script>
	$(document).ready(function()
	{
	$('#kodekategori').select2(
		{
			closeOnSelect: true,
			allowClear: true,
			placeholder: 'Pilih kategori wisata'
		});
	});

</script> -->

</body>
                    </div>
                </main>
				<?php include "include/footer.php";?>
            </div>
        </div>
		<?php include "include/jsscript.php"; ?>
	</body>
</html>