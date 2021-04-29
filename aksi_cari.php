<?php
	require_once 'admin/koneksi.php';
	if(isset($_POST['submit'])){
	$kata = $_POST['kata_kunci'];
	$data = mysqli_query($koneksi,"select * from berita where judul like '%$kata%' ORDER BY id_berita DESC");
	
	while($t=mysqli_fetch_array($data)){
		$u = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$t[id_user]'");
		$nu = mysqli_fetch_array($u);
		echo "<a href=?module=detailberita&id=$t[id_berita]><h2 class='blog-post-title'>$t[judul]</h2></a>";
		echo "<p class='blog-post-meta'>$t[tgl_posting] | by : $nu[username]</p>";

		if($t['gambar']!=''){
			echo "<img src='admin/foto_berita/$t[gambar]' width=150 height=100  hspace=10 border=0 align=left>";
		}

		$isi_berita = htmlentities(strip_tags($t['isi_berita']));
		$isi = substr($isi_berita,0,210);
		$isi= substr($isi_berita,0,strrpos($isi," "));

		echo "<p>$isi ... <br/><a  class='continue-lendo' href=?module=detailberita&id=$t[id_berita]>Selengkapnya →</a><br/> <br/><hr color=white></p><br/><br/> ";

	}
	echo "<h2>Berita Sebelumnya</h2>";
	$sebelum=mysqli_query($koneksi,"SELECT * FROM berita ORDER BY id_berita DESC LIMIT 1,5");
	while ($s=mysqli_fetch_array($sebelum)){
		echo "<p><a href=?module=detailberita&id=$s[id_berita]>$s[judul]</a></p>";
	}
}
?>