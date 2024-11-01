<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FOTO DESTINASI WISATA</title>
	<link rel = "stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<?php
	include "include/config.php";
	if(isset($_POST['Simpan']))
	{
		$olehKODE = $_POST['olehkode'];
		$olehNAMA = $_POST['olehnama'];
		$lokasiKODE = $_POST['kodelokasi'];

		$olehFOTO = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];

		$ekstensifile = pathinfo($olehFOTO, PATHINFO_EXTENSION);

		// PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		if(($ekstensifile == "jpg") or ($ekstensifile == "JPG") or ($ekstensifile == "png") or ($ekstensifile == "PNG") or ($ekstensifile == "jpeg") or ($ekstensifile == "JPEG") or ($ekstensifile == "WEBP") or ($ekstensifile == "webp"))
		{
			move_uploaded_file($file_tmp, 'images/'.$olehFOTO); //unggah file ke folder images
			mysqli_query($connection, "insert into oleh2 value ('$olehKODE', '$olehNAMA', '$olehFOTO', '$lokasiKODE')");
			header("location:oleh2.php");
		}

	}

	$datatravel = mysqli_query($connection, "select * from travel");
?>

<?php include "INCLUDE/head.php"?>
    <body class="sb-nav-fixed">
        <?php include "include/menunav.php"?>
        <div id="layoutSidenav">
<?php include "INCLUDE/menu.php"?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Input Data Oleh-oleh</h1>
<body>

<div class="row">
<div class="col-sm-1"></div>

<div class="col-sm-10">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Input Photo Destinasi Oleh-Oleh</h1>
		</div>
	</div>

	<form method="POST" enctype="multipart/form-data">
		<div class="form-group row">
			<label for="olehkode" class="col-sm-2 col-form-label">Kode Oleh2</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="olehkode" name="olehkode" placeholder="Kode Oleh-Oleh" maxlength="4">
			</div>
		</div>

		<div class="form-group row">
			<label for="olehnama" class="col-sm-2 col-form-label">Nama Oleh2</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="olehnama" name="olehnama" placeholder="Nama Photo">
			</div>
		</div>

		<div class="form-group row">
			<label for="kodelokasi" class="col-sm-2 col-form-label">Kode Oleh2</label>
			<div class="col-sm-10">
			<select type="form-control" class="form-control" id="kodelokasi" name="kodelokasi">
				<?php while($row = mysqli_fetch_array($datatravel))
				{ ?>
					<option value="<?php echo $row["lokasiKODE"]?>">
						<?php echo $row["lokasiKODE"]?>
						<?php echo $row["lokasiNAMA"]?>
					</option>
				<?php } ?>				
				</div>
			</select>
		</div>


		<div class="form-group row">
			<label for="file" class="col-sm-2 col-form-label">Photo Oleh-Oleh</label>
			<div class="col-sm-10">
				<input type="file" id="file" name="file">
				<p class="help-block">Field ini digunakan untuk unggah file</p>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				<input type="submit" name="Simpan" class="btn btn-primary" value="Simpan">
				<input type="submit" name="Batal" class="btn btn-secondary" value="Batal">
			</div>
		</div>
	</form>

</div>

<div class="col-sm-1"></div>
</div>

<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Daftar Foto Oleh-Oleh</h1>
			</div>
		</div>

<form method="POST">
    <div class="form-group row mb-2">
    <label for="search" class="col-sm-3">Kode Oleh-Oleh</label>
    <div class="col-sm-6">
        <input type="text" name="search" class="form-control" id="search"
        value="<?php if (isset($_POST["search"])) {echo $_POST["search"];}?>"
        placeholder="Cari Kode Oleh-Oleh">
    </div>
    <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="Search">
    </div>
</form>

<form method="post">
	<div class="form-group row mb-2">
    <label for="search2" class="col-sm-3">Nama Oleh-Oleh</label>
    <div class="col-sm-6">
        <input type="text" name="search2" class="form-control" id="search2"
        value="<?php if (isset($_POST["search2"])) {echo $_POST["search2"];}?>"
        placeholder="Cari Nama Oleh-Oleh">
    </div>
    <input type="submit" name="kirim2" class="col-sm-1 btn btn-primary" value="Search">
    </div>
</form>

	<table class="table table-dark table-striped">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Kode Oleh-Oleh</th>
				<th>Nama Pusat Oleh-Oleh</th>
				<th>Photo Oleh-Oleh</th>
				<th>Kode Travel</th>
				<th colspan="2" style="text-align: center">Action</th> 
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
				$query = mysqli_query($connection,  "select * from oleh2
				where olehKODE like '%".$search."%' limit $mulaitampilan, $jumlahtampilan");
			} elseif (isset($_POST['kirim2'])) {
				$search2 = $_POST["search2"];
				$query = mysqli_query($connection,"select * from oleh2
				where olehNAMA like '%".$search2."%' limit $mulaitampilan, $jumlahtampilan");
			} else {
				$query = mysqli_query($connection, "select * from oleh2 limit $mulaitampilan, $jumlahtampilan");
			}
			$nomor = 1;
			while ($row = mysqli_fetch_array($query))
			{ ?>
				<tr>
					<td><?php echo $mulaitampilan + $nomor;?></td>
					<td><?php echo $row['olehKODE'];?></td>
					<td><?php echo $row['olehNAMA'];?></td>
					<td>
						<?php if(is_file("images/".$row['olehFOTO']))
						{ ?>
							<img src="images/<?php echo $row['olehFOTO']?>" width="80">
						<?php } else
							echo "<img src='images/noimage.png' width='80'>"
						?>
					</td>
					<td><?php echo $row['lokasiKODE'];?></td>

					
					<td width="5px">
						<a href="oleh2edit.php?ubah=<?php echo $row["olehKODE"]?>"
						class="btn btn-success btn-sm" title="EDIT">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
						<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
						<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
					</svg>
						</a>
					</td>
					
					<td width="5px">
						<a href="oleh2hapus.php?hapus=<?php echo $row["olehKODE"]?>"
						class="btn btn-danger btn-sm" title="HAPUS">
						<i class="bi bi-trash"></i>
					</td>
				</tr>
			<?php $nomor = $nomor + 1;?>
			<?php }	?>
		</tbody>
		
	</table>

<!--------------------- PAGING -- MEMBUAT GANTI HALAMAN ---------------->
<?php 
    $query = mysqli_query($connection, "SELECT * FROM oleh2");
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

	</div>

	<div class="col-sm-1"></div>

	
</div>
</main>
                <?php include "INCLUDE/footer.php"?>
            </div>
        </div>
        <?php include "INCLUDE/jsscript.php"?>

</body>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
$(document).ready(function()
{
    $('#kodelokasi').select2 (
        {
            closeOnSelect: true,
            allowClear: true,
            placeholder: 'Pilih Kategori Wisata'
        });


});
</script>
</html>