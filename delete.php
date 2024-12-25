<?php

include("config.php");
$idbarangmainan = $_GET['idbarangmainan'];

$result = mysqli_query($mysqli, "DELETE FROM barangmainan WHERE idbarangmainan=$idbarangmainan");
echo "<script>alert('Maklumat berjaya dihapuskan');"
    . "window.location='index.php'</script>";

?>
