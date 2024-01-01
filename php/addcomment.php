<?php
include "connect.php";
$nama = $_POST['nama'];
$email = $_POST['waktu'];
$notelp= $_POST['notelp'];
$help= $_POST['help'];
$sql = "INSERT INTO pendapatan (jumlah, waktu) VALUES ($jumlah, STR_TO_DATE('$waktu', '%Y-%m-%d'))";

if (mysqli_query($conn, $sql)) {
 
  header("location: ../index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
