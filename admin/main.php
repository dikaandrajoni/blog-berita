<?php
$page=isset($_GET['page']) ? $_GET['page'] : 'home';
if ($page=='home') include 'home.php';
if ($page=='kategori') include 'kategori.php';
if ($page=='user') include 'user.php';
if ($page=='berita') include 'berita.php';
if ($page=='komentar') include 'komentar.php';
if ($page=='logout') include 'logout.php';
