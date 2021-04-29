<?php
session_start();
include("koneksi.php");
$page=isset($_GET['page']) ? $_GET['page'] : '';
$proses=isset($_GET['proses']) ? $_GET['proses'] : '';

if ($page=='komentar' AND $proses=='hapus'){
  mysqli_query($koneksi,"DELETE FROM ".$page." WHERE id_komentar='$_GET[id]'");
  header('location:index.php?page='.$page);
}
?>