<!DOCTYPE html>
<?php
  include "include/config.php";
  if(isset($_POST['simpan']))
  {
      $kategoriberitaKODE = $_POST["berKategoriKode"];
      $kategoriberitaNAMA = $_POST["berKategoriNama"];
      $kategoriberitaKET = $_POST["berKategoriKet"];

      mysqli_query($connection, "insert into kategoriberita values ('$kategoriberitaKODE', '$kategoriberitaNAMA', '$kategoriberitaKET')");
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
                <div class="container">
                    <h1 class="mt-4">Data Berita Wisata</h1>
                    </ol>

                    <div class="jumbrotron mt-5">
                        <h2 class="display-5">Daftar Berita Wisata</h2>
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
                                <!-- <th colspan="2" style="text-align : center">Aksi</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(isset($_POST['kirim']))
                                {
                                    $search = $_POST["search"];
                                    $query = mysqli_query ($connection, "select * from kategoriberita where kategoriberitaNAMA like '%".$search."%'");
                                }
                                else
                                {
                                    $query = mysqli_query ($connection, "select * from kategoriberita");
                                }
                                $nomor = 1;
                                while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $row['kategoriberitaKODE']; ?></td>
                                <td><?php echo $row['kategoriberitaNAMA']; ?></td>
                                <td><?php echo $row['kategoriberitaKET']; ?></td>
                                <!-- <td width="5px">
                                    <a href="destinasiedit.php?ubah=<?php echo $row["destinasiKODE"]?>"
                                        class="btn btn-success btn-sm" title="EDIT">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </a>
                                </td>
                                <td width="5px">
                                    <a href="destinasihapus.php?hapus=<?php echo $row["destinasiKODE"]?>"
                                        class="btn btn-danger btn-sm" title="HAPUS">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td> -->
                            </tr>
                            <?php $nomor = $nomor + 1; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- penutup class col 10-->
            </main>
        </div>
        <!-- penutup row  -->
    </div>
    <?php include "INCLUDE/footer.php"?>
    <?php include "INCLUDE/jsscript.php"?>
</body>
</html>
