<?php
include "koneksi.php";

$id = $_GET['id'];

$qry = $koneksi->query("SELECT * FROM user WHERE id_user = '$id'");
$result = $qry->fetch_assoc();
$location = 'assets/images/'.$result['profile'];
unlink($location);

$koneksi->query("DELETE FROM user WHERE id_user='$id'");

echo "<script>alert('Data berhasil dihapus!');window.location.replace('index.php');</script>";