<?php
include "include/config.php";

if (isset($_GET['hapus'])) {
    $restoranKODE = $_GET['hapus'];
    mysqli_query($connection, "DELETE FROM restoran WHERE restoranKODE = '$restoranKODE'");
    echo "<script> alert('DATA BERHASIL DIHAPUS'); document.location='restoran.php'</script>";
}
?>