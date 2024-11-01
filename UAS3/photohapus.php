<?php
include ("include/config.php");
if(isset($_GET["hapus"]))
{
    $inputkode = $_GET["hapus"];
    mysqli_query($connection, "DELETE FROM fotodestinasi WHERE fotodestinasiKODE = '$inputkode'");
    echo "<script> alert('DATA BERHASIL DIHAPUS'); document.location='photodestinasi.php'</script>";
}
?>
