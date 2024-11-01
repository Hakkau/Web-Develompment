<?php
include ("include/config.php");
if(isset($_GET["hapus"]))
{
    $kodedestinasi = $_GET["hapus"];
    mysqli_query($connection, "DELETE FROM destinasib2 WHERE destinasiKODE = '$kodedestinasi'");
    echo "<script> alert('DATA BERHASIL DIHAPUS'); document.location='destinasi.php'</script>";
}
?>
