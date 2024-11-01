<?php
include ("include/config.php");
if(isset($_GET["hapus"]))
{
    $olehkode = $_GET["hapus"];
    mysqli_query($connection, "DELETE FROM oleh2 WHERE olehKODE = '$olehkode'");
    echo "<script> alert('DATA BERHASIL DIHAPUS'); document.location='oleh2.php'</script>";
}
?>