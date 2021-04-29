<?php 
	include 'admin/koneksi.php';
	$sql=mysqli_query($koneksi, "SELECT id_berita, nama, judul FROM komentar join berita using(id_berita) order by id_komentar DESC limit 5");
	while($ambil=mysqli_fetch_array($sql)){
		$u = mysqli_query($koneksi, "SELECT * from komentar ORDER BY id_berita DESC");
		$data = mysqli_fetch_array($u);
		echo "<p style='text-size:7;'><b>$ambil[nama]</b> di <a href=?module=detailberita&id=$ambil[id_berita]>$ambil[judul]</a><br>";
		echo "</p><br/>";
		echo "";
	} 
?>