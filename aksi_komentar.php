<?php
include_once "admin/koneksi.php";
$page=isset($_GET['page']) ? $_GET['page'] : '';
$proses=isset($_GET['proses']) ? $_GET['proses'] : '';
$_GET['module']=isset($_GET['module'])? $_GET['module'] : '';
$id = $_GET['id'];
if($page=='home' AND $proses=='tambah'){
		$kirim=mysqli_query($koneksi,"INSERT INTO komentar (
  								id_berita,
                                nama,
								email,
								isi_komentar)
	                       VALUES(
                                $id,
								'$_POST[nama]',
								'$_POST[email]',
								'$_POST[komentar]')");
		if($kirim){
				echo "<script><alert>Komentar berhasil dikirim!</alert><script>";
				header('location:index.php?page='.$page);
		} else{
			echo "<script><alert>Komentar gagal dikirim!</alert><script>";
		}
	}

?>
