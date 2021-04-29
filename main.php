<?php
$page=isset($_GET['page']) ? $_GET['page'] : 'home';
if ($page=='home') include_once 'home.php';
if ($page=='biodata') include_once 'biodata.php';
if ($page=='berita') include_once 'berita.php';
if ($page=='pendidikan') include_once 'pendidikan.php';
if ($page=='teknologi') include_once 'teknologi.php';
if ($page=='kategori') include_once 'kategori.php';
if ($page=='cari') include_once 'aksi_cari.php';


?>
