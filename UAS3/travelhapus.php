<?php
include ("include/config.php");
if(isset($_GET["hapus"]))
{
    $lokasikode = $_GET["hapus"];
    mysqli_query($connection, "DELETE FROM travel WHERE lokasiKODE = '$lokasikode'");
    echo "<script> alert('DATA BERHASIL DIHAPUS'); document.location='travel.php'</script>";
}
?>