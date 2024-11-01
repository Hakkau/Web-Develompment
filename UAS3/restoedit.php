<?php
include "include/config.php";

if (isset($_POST['edit'])) {
    $restoranKODE = $_POST['koderesto'];
    $restoranNAMA = $_POST['namaresto'];
    $lokasiKODE = $_POST['kodelokasi'];

    mysqli_query($connection, "UPDATE restoran SET restoranNAMA = '$restoranNAMA', lokasiKODE = '$lokasiKODE' WHERE restoranKODE = '$restoranKODE'");
    header("location:restoran.php");
}

if (isset($_GET['ubah'])) {
    $restoranKODE = $_GET['ubah'];
    $editrestoran = mysqli_query($connection, "SELECT * FROM restoran WHERE restoranKODE = '$restoranKODE'");
    $rowedit = mysqli_fetch_array($editrestoran);

    // Fetch lokasi data
    $datatravel =  mysqli_query($connection, "SELECT travel.* FROM travel");

$editresto = mysqli_query($connection, "select * from restoran, travel where restoranKODE = '$restoranKODE'
and restoran.lokasiKODE = travel.lokasiKODE");
$rowedit2 = mysqli_fetch_array($editresto);
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
                        <h1 class="mt-4">Input Data Restaurant</h1>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel = "stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>

<body>
    
<!-- id sama for wajib sama name boleh beda
tapi lebih bagus kalo sama semua -->

<div class="row">
<div class="col-sm-1">
</div>

<div class="col-sm-10">

<form method="POST">

    <div class="mb-3 row">
        <label for="koderesto" class="col-sm-2 col-form-label">Kode Restoran</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="koderesto" name="koderesto" placeholder="Inputkan Kode Resto"
                value="<?php echo $rowedit["restoranKODE"]?>"readonly>
            </div>
    </div>

    <div class="mb-3 row">
        <label for="namaresto" class="col-sm-2 col-form-label">Nama Restoran</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="namaresto" name="namaresto" placeholder="Inputkan Nama Resto"
                value="<?php echo $rowedit["restoranNAMA"]?>">
            </div>
    </div>

    <div class="mb-3 row">
        <label for="kodelokasi" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
                <select type="form-control" class="form-control" id="kodelokasi" name="kodelokasi">
                    <option>Lokasi Wisata</option>
                    <option value="<?php echo $rowedit["lokasiKODE"]?>">
                        <?php echo $rowedit['lokasiKODE']?>
						<?php echo $rowedit2["lokasiNAMA"]?>
                    </option>
                    <?php while($row = mysqli_fetch_array ($datatravel))
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
            <div class="mt-2"></div>
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
			<input type="submit" name="edit" class="btn btn-primary" value="Ubah">
			<input type="submit" name="Batal" class="btn btn-secondary" value="Batal">
		</div>
	</div>
</form>

<div class="jumbrotron mt-5">
    <h2 class="display-5">Daftar Data Restaurant</h2>
</div>

<form method="POST">
    <div class="form-group row mb-2">
    <label for="search" class="col-sm-3">Nama Restaurant</label>
    <div class="col-sm-6">
        <input type="text" name="search" class="form-control" id="search"
        value="<?php if (isset($_POST["search"])) {echo $_POST["search"];}?>"
        placeholder="Cari Nama Restaurant">
    </div>
    <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="Search">
    </div>
</form>


<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Kode Restaurant</th>
        <th scope="col">Nama Restaurant</th>
        <th scope="col">Travel(Lokasi) Destinasi</th>
        <th colspan="2" style="text-align : center">Aksi</th>
    </tr>
</thead>
<tbody>
<?php
/* $query = mysqli_query($connection, "select destinasi.* from destinasi"); */

if(isset($_POST['kirim']))
    {
        $search = $_POST["search"];
        $query = mysqli_query ($connection, "select * from restoran
        where restoranNAMA like '%".$search."%'");
    }
    else
    {
        $query = mysqli_query ($connection, "select * from restoran");
    }
$nomor = 1;
while ($row = mysqli_fetch_array($query)) {
?>
    <tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $row['restoranKODE']; ?></td>
        <td><?php echo $row['restoranNAMA']; ?></td>
        <td><?php echo $row['lokasiKODE']; ?></td>

        <td width="5px">
            <a href="restoedit.php?ubah=<?php echo $row["restoranKODE"]?>"
            class="btn btn-success btn-sm" title="EDIT">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg>
            </a>
        </td>

        <td width="5px">
            <a href="restohapus.php?hapus=<?php echo $row["restoranKODE"]?>"
            class="btn btn-danger btn-sm" title="HAPUS">
            <i class="bi bi-trash"></i>
        </td> 

    </tr>
    <?php $nomor = $nomor + 1; ?>
<?php } ?>

</tbody>

</table>

</div> <!-- penutup class col 10-->
</div> <!-- penutup row  -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
$(document).ready(function()
{
    $('#kodelokasi').select2 (
        {
            closeOnSelect: true,
            allowClear: true,
            placeholder: 'Pilih Lokasi Wisata'
        });


});
</script>
</body>
</div>
            </main>
                <?php include "INCLUDE/footer.php"?>
            </div>
        </div>
        <?php include "INCLUDE/jsscript.php"?>
</body>
</html>