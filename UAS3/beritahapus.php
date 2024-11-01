<?php
include ("include/config.php");
if(isset($_GET["hapus"]))
{
    $berKategoriKode = $_GET["hapus"];
    mysqli_query($connection, "DELETE FROM kategoriberita WHERE kategoriberitaKODE = '$berKategoriKode'");
    echo "<script> alert('DATA BERHASIL DIHAPUS'); document.location='inputberita.php'</script>";
}
?>