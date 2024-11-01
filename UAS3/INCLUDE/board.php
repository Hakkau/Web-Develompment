<?php
    include "config.php";
    $sql1 = mysqli_query($connection, "SELECT * FROM kategoriwisata");
    $jumlah1 = mysqli_num_rows($sql1);
?>

<?php
    include "config.php";
    $sql2 = mysqli_query($connection, "SELECT * FROM destinasib2");
    $jumlah2 = mysqli_num_rows($sql2);
?>

<?php
    include "config.php";
    $sql3 = mysqli_query($connection, "SELECT * FROM fotodestinasi");
    $jumlah3 = mysqli_num_rows($sql3);
?>

<?php
    include "config.php";
    $sql4 = mysqli_query($connection, "SELECT * FROM hotel");
    $jumlah4 = mysqli_num_rows($sql4);
?>

<?php
    include "config.php";
    $sql5 = mysqli_query($connection, "SELECT * FROM restoran");
    $jumlah5 = mysqli_num_rows($sql5);
?>

<?php
    include "config.php";
    $sql6 = mysqli_query($connection, "SELECT * FROM oleh2");
    $jumlah6 = mysqli_num_rows($sql6);
?>

<?php
    include "config.php";
    $sql7 = mysqli_query($connection, "SELECT * FROM travel");
    $jumlah7 = mysqli_num_rows($sql7);
?>

<?php
    include "config.php";
    $sql8 = mysqli_query($connection, "SELECT * FROM kategoriberita");
    $jumlah8 = mysqli_num_rows($sql8);
?>

<?php
    include "config.php";
    $sql9 = mysqli_query($connection, "SELECT * FROM movie");
    $jumlah9 = mysqli_num_rows($sql9);
?>


<div class="row">           

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Jumlah Data Destinasi Wisata: <?php echo $jumlah2?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tabeldestinasi.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Jumlah Data Foto Destinasi: <?php echo $jumlah3?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tabelfotodes.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Jumlah Data Hotel: <?php echo $jumlah4?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tabelhotel.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Jumlah Data Restoran: <?php echo $jumlah5?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tablerestoran.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Jumlah Data oleh-oleh: <?php echo $jumlah6?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tableoleh2.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Jumlah Data Travel(Lokasi): <?php echo $jumlah7?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tabletravel.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Jumlah Data Berita: <?php echo $jumlah8?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tabelberita.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Jumlah Data Movie: <?php echo $jumlah9?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tablemovie.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div> 

</div>