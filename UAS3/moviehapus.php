<?php
include ("include/config.php");
if(isset($_GET["hapus"]))
{
    $filmkode = $_GET["hapus"];
    mysqli_query($connection, "DELETE FROM movie WHERE movieKODE = '$filmkode'");
    echo "<script> alert('DATA BERHASIL DIHAPUS'); document.location='movie.php'</script>";
}
?>
