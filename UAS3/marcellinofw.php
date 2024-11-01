<!DOCTYPE html>
<html>
<?php
    include("INCLUDE/config.php");
    if(isset($_POST['Simpan']))
    {
        $marcelID =  $_POST['kodeid'];
        $marcelKOTA = $_POST['namakota'];
        $destinasiKODE= $_POST['kodedestinasi'];

    mysqli_query($connection, "insert into marcellinofw value ('$marcelID', '$marcelKOTA', '$destinasiKODE')");        
    header("location:marcellinofw.php");
}
    $datadestinasi = mysqli_query($connection,"select * from destinasib2");
?>
<?php include "INCLUDE/head.php" ?>
    <body class="sb-nav-fixed">
        <?php include "INCLUDE/menunav.php"?>
        <div id="layoutSidenav">
        <?php include "INCLUDE/menu.php"?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Input MarcellinoFW</h1>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Destinasi</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>

<body>
    <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
    
    <div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Input Data MarcellinoFW</h1>
		</div>
	</div>

    <form method="POST" enctype="multipart/form-data">
        <div class="form-group row, mb-3 row">
			<label for="kodeid" class="col-sm-2 col-form-label">ID Nama</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" id="kodeid" name="kodeid" placeholder="Masukkan Kode Nama" maxlength="4">
			</div>
		</div>

        <div class="form-group row, mb-3 row">
			<label for="namakota" class="col-sm-2 col-form-label">Kota Nama</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" id="namakota" name="namakota" placeholder="Masukkan Nama Kota">
			</div>
		</div>

        <div class="form-group row">
        <label for="kodedestinasi" class="col-sm-2 col-form-label">Destinasi Kode</label>
        <div class="col-sm-10">
        <select type="form-control" class="form-control" name="kodedestinasi" id="kodedestinasi">
            <option>Destinasi Wisata</option>
            <?php while($row = mysqli_fetch_array($datadestinasi)) { ?>
            <option value="<?php echo $row["destinasiKODE"]?>">
            <?php echo $row["destinasiKODE"]?>
            <?php echo $row["destinasiNAMA"]?>
            </option>
            <?php } ?>
        </div>
        </select>
        </div>

        <div class="form-group row, mb-3 row">
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				<input type="submit" name="Simpan" class="btn btn-primary" value="Simpan">
				<input type="submit" name="Batal" class="btn btn-secondary" value="Batal">
			</div>
		</div>
    </form>

    <div class="jumbotron mt-5">
        <h2 class="display-5">Hasil entri data MarcellinoFW</h2>
    </div>

    <!-- untuk membuat form pencarian data -->
    <form method="POST">
        <div class="form-group row mb-2">
            <label for="search" class="col-sm-3">Cari Nama Kota</label>
            <div class="col-sm-6">
                <input type="text" name="search" class="form-control" id="search" value="<?php if (isset($_POST['search'])) {echo $_POST["search"];} ?>" placeholder="Cari Nama Kota">
            </div>
            <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="search">
        </div>
    </form>
    <!-- akhir dari code line form -->

  <table class="table table-dark table-striped">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Nama</th>
      <th scope="col">Kota Nama</th>
      <th scope="col">Kode Destinasi</th>
    </tr>
    </thead>
    <tbody>
    <?php 

        // --------------------- PAGING -- MEMBUAT GANTI HALAMAN ---------------- >
        $jumlahtampilan = 3;
        $halaman = (isset($_GET['page']))? $_GET['page'] : 1;
        $mulaitampilan = ($halaman - 1) * $jumlahtampilan;
        // ----------------- AKHIR PAGING -- MEMBUAT GANTI HALAMAN ---------------- >

        if(isset($_POST["kirim"]))
        {
            $search = $_POST["search"];
            $query = mysqli_query($connection,"select marcellinofw.* from marcellinofw where marcelKOTA like '%".$search."%' limit $mulaitampilan, $jumlahtampilan");
            // --------------------- PAGING -- MEMBUAT GANTI HALAMAN ----------------
        }
        else 
        {
            $query = mysqli_query($connection,"select marcellinofw.* from marcellinofw limit $mulaitampilan, $jumlahtampilan");
        }

        $nomor = 1;
        while($row = mysqli_fetch_array($query))
        {
    ?>
    <tr>
      <td><?php echo $mulaitampilan + $nomor; ?></td>
      <td><?php echo $row['marcelID'];?></td>
      <td><?php echo $row['marcelKOTA'];?></td>
      <td><?php echo $row['destinasiKODE'];?></td>
    </tr>
    <?php 
            $nomor++;
        }
    ?>
    </tbody>
    </table>
    </div>

    <!--------------------- PAGING -- MEMBUAT GANTI HALAMAN ---------------->
    <?php 
        $query = mysqli_query($connection, "SELECT * FROM marcellinofw");
        $jumlahrecord = mysqli_num_rows($query);
        $jumlahpage = ceil($jumlahrecord/$jumlahtampilan);
    ?>
    <!-- TAMPILAN PADA HALAMAN PAGINATION INI DAPAT DIAMBIL DARI BOOTSTRAP 5 
            PADA BAGIAN components -> pagination -->
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function()
    {
        $('#kodedestinasi').select2(
            {
                closeOnSelect: true,
                allowClear: true,
                placeholder: 'Pilih kategori destinasi'
            });
    });
</script>
</body>
                </main>
                <?php include "INCLUDE/footer.php"?>
            </div>
        </div>
        <?php include "INCLUDE/jsscript.php" ?>
</body>

</html>