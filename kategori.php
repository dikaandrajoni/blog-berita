<div class='blog-post'>
<?php
include "admin/koneksi.php";
$_GET['module']=isset($_GET['module'])? $_GET['module'] : '';
$berita=isset($_GET['berita']) ? $_GET['berita'] : '';
switch ($berita) {
	case 'teknologi' :	
		if($_GET['module']==''){
			$terkini = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_kategori=1 ORDER BY id_berita DESC LIMIT 3");
	
			while($t=mysqli_fetch_array($terkini)){
				$u = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$t[id_user]'");
				$nu = mysqli_fetch_array($u);
				echo "<a href=?module=detailberita&id=$t[id_berita]><h2 class='blog-post-title'>$t[judul]</h2></a>";
				echo "<p class='blog-post-meta'>$t[tgl_posting] | by : $nu[username]</p>";
		
				if($t['gambar']!=''){
					echo "<img src='admin/foto_berita/$t[gambar]' width=150 height=100 hspace=10 border=0 align=left>";
				}
		
				$isi_berita = htmlentities(strip_tags($t['isi_berita']));
				$isi = substr($isi_berita,0,210);
				$isi= substr($isi_berita,0,strrpos($isi," "));
		
				echo "<p>$isi ... <br/><a  class='continue-lendo' href=?module=detailberita&id=$t[id_berita]>Selengkapnya →</a> <br><br><hr color=white></p> ";
		
			}
	
			echo "<h2>Berita Sebelumnya</h2>";
			$sebelum=mysqli_query($koneksi,"SELECT * FROM berita ORDER BY id_berita DESC LIMIT 1,5");
			while ($s=mysqli_fetch_array($sebelum)){
				echo "<p><a href=?module=detailberita&id=$s[id_berita]>$s[judul]</a></p>";
			}
	
		} else if($_GET['module']=='detailberita'){
			$detail=mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$_GET[id]'");
			$d = mysqli_fetch_array($detail);
			$u = mysqli_query($koneksi, "select * from user where id='[id_user]'");
			$nu = mysqli_fetch_array($u);
	
			echo "<a href=?module=detailberita&id=$d[id_berita]><h2>$d[judul]</h2></a>";
			echo "<p class='blog-post-meta'>$d[tgl_posting] | by : $nu[username]</p>";
			if ($d['gambar']!=''){
				echo "<img src='admin/foto_berita/$d[gambar]' width=150 height=100 hspace=10 border=0 align='left'>";
			}
	
			echo "<p>$d[isi_berita]</p>";
			echo "<br> [ <a href=javascript:history.go(-1)>Kembali</a> ] <br/><br></p>";
			include_once 'form_komentar.php';
	
			$sql=mysqli_query($koneksi, "SELECT * FROM komentar order by id_komentar DESC limit 5");
			echo "<br><h4> Komentar </h4><br>";
			while($ambil=mysqli_fetch_array($sql)){
				$u = mysqli_query($koneksi, "SELECT * FROM komentar WHERE id_berita='$d[id_berita]'");
				$nu = mysqli_fetch_array($u);
				echo "<br><p> $ambil[nama] | $ambil[email] </p>";
				echo "<div id='formKomentar'>$ambil[isi_komentar]</div>";
				echo "<br><hr/><br/>";
			}
			
		}
		break;
		
	case 'pendidikan' :
		if($_GET['module']==''){
		$terkini = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_kategori=5 ORDER BY id_berita DESC LIMIT 3");
	
	while($t=mysqli_fetch_array($terkini)){
		$u = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$t[id_user]'");
		$nu = mysqli_fetch_array($u);
		echo "<a href=?module=detailberita&id=$t[id_berita]><h2 class='blog-post-title'>$t[judul]</h2></a>";
		echo "<p class='blog-post-meta'>$t[tgl_posting] | by : $nu[username]</p>";
		
		if($t['gambar']!=''){
			echo "<img src='admin/foto_berita/$t[gambar]' width=150 height=100 hspace=10 border=0 align=left>";
		}
		
		$isi_berita = htmlentities(strip_tags($t['isi_berita']));
		$isi = substr($isi_berita,0,210);
		$isi= substr($isi_berita,0,strrpos($isi," "));
		
		echo "<p>$isi ... <br/><a  class='continue-lendo' href=?module=detailberita&id=$t[id_berita]>Selengkapnya →</a> <br><br><hr color=white></p> ";
		
	}
	
	echo "<h2>Berita Sebelumnya</h2>";
	$sebelum=mysqli_query($koneksi,"SELECT * FROM berita ORDER BY id_berita DESC LIMIT 1,5");
	while ($s=mysqli_fetch_array($sebelum)){
		echo "<p><a href=?module=detailberita&id=$s[id_berita]>$s[judul]</a></p>";
	}
	
} else if($_GET['module']=='detailberita'){
	$detail=mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$_GET[id]'");
	$d = mysqli_fetch_array($detail);
	$u = mysqli_query($koneksi, "select * from user where id='[id_user]'");
	$nu = mysqli_fetch_array($u);
	
	echo "<a href=?module=detailberita&id=$d[id_berita]><h2>$d[judul]</h2></a>";
	echo "<p class='blog-post-meta'>$d[tgl_posting] | by : $nu[username]</p>";
	if ($d['gambar']!=''){
		echo "<img src='admin/foto_berita/$d[gambar]' width=150 height=100 hspace=10 border=0 align='left'>";
	}
	
	echo "<p>$d[isi_berita]</p>";
	echo "<br> [ <a href=javascript:history.go(-1)>Kembali</a> ] <br/><br></p>";
	include_once 'form_komentar.php';
	$sql=mysqli_query($koneksi, "SELECT * FROM komentar order by id_komentar DESC limit 5");
	echo "<br><h4> Komentar </h4><br>";
	while($ambil=mysqli_fetch_array($sql)){
		$u = mysqli_query($koneksi, "SELECT * FROM komentar WHERE id_berita='$d[id_berita]'");
		$nu = mysqli_fetch_array($u);
		echo "<br><p> $ambil[nama] | $ambil[email] </p>";
		echo "<div id='formKomentar'>$ambil[isi_komentar]</div>";
		echo "<br><hr/><br/>";
	}

	
}
		break;
		
	case 'olahraga' :
		if($_GET['module']==''){
		$terkini = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_kategori=2 ORDER BY id_berita DESC LIMIT 3");
	
	while($t=mysqli_fetch_array($terkini)){
		$u = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$t[id_user]'");
		$nu = mysqli_fetch_array($u);
		echo "<a href=?module=detailberita&id=$t[id_berita]><h2 class='blog-post-title'>$t[judul]</h2></a>";
		echo "<p class='blog-post-meta'>$t[tgl_posting] | by : $nu[username]</p>";
		
		if($t['gambar']!=''){
			echo "<img src='admin/foto_berita/$t[gambar]' width=150 height=100 hspace=10 border=0 align=left>";
		}
		
		$isi_berita = htmlentities(strip_tags($t['isi_berita']));
		$isi = substr($isi_berita,0,210);
		$isi= substr($isi_berita,0,strrpos($isi," "));
		
		echo "<p>$isi ... <br/><a  class='continue-lendo' href=?module=detailberita&id=$t[id_berita]>Selengkapnya →</a> <br><br><hr color=white></p> ";
		
	}
	
	echo "<h2>Berita Sebelumnya</h2>";
	$sebelum=mysqli_query($koneksi,"SELECT * FROM berita ORDER BY id_berita DESC LIMIT 1,5");
	while ($s=mysqli_fetch_array($sebelum)){
		echo "<p><a href=?module=detailberita&id=$s[id_berita]>$s[judul]</a></p>";
	}
	
} else if($_GET['module']=='detailberita'){
	$detail=mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$_GET[id]'");
	$d = mysqli_fetch_array($detail);
	$u = mysqli_query($koneksi, "select * from user where id='[id_user]'");
	$nu = mysqli_fetch_array($u);
	
	echo "<a href=?module=detailberita&id=$d[id_berita]><h2>$d[judul]</h2></a>";
	echo "<p class='blog-post-meta'>$d[tgl_posting] | by : $nu[username]</p>";
	if ($d['gambar']!=''){
		echo "<img src='admin/foto_berita/$d[gambar]' width=150 height=100 hspace=10 border=0 align='left'>";
	}
	
	echo "<p>$d[isi_berita]</p>";
	echo "<br> [ <a href=javascript:history.go(-1)>Kembali</a> ] <br/><br></p>";
	
	include_once 'form_komentar.php';
	$sql=mysqli_query($koneksi, "SELECT * FROM komentar order by id_komentar DESC limit 5");
	echo "<br><h4> Komentar </h4><br>";
	while($ambil=mysqli_fetch_array($sql)){
		$u = mysqli_query($koneksi, "SELECT * FROM komentar WHERE id_berita='$d[id_berita]'");
		$nu = mysqli_fetch_array($u);
		echo "<br><p> $ambil[nama] | $ambil[email] </p>";
		echo "<div id='formKomentar'>$ambil[isi_komentar]</div>";
		echo "<br><hr/><br/>";
	}

}
		break;
		
	case 'otomotif' :
		if($_GET['module']==''){
	$terkini = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_kategori=3 ORDER BY id_berita DESC LIMIT 3");
	
	while($t=mysqli_fetch_array($terkini)){
		$u = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$t[id_user]'");
		$nu = mysqli_fetch_array($u);
		echo "<a href=?module=detailberita&id=$t[id_berita]><h2 class='blog-post-title'>$t[judul]</h2></a>";
		echo "<p class='blog-post-meta'>$t[tgl_posting] | by : $nu[username]</p>";
		
		if($t['gambar']!=''){
			echo "<img src='admin/foto_berita/$t[gambar]' width=150 height=100 hspace=10 border=0 align=left>";
		}
		
		$isi_berita = htmlentities(strip_tags($t['isi_berita']));
		$isi = substr($isi_berita,0,210);
		$isi= substr($isi_berita,0,strrpos($isi," "));
		
		echo "<p>$isi ... <br/><a  class='continue-lendo' href=?module=detailberita&id=$t[id_berita]>Selengkapnya →</a> <br><br><hr color=white></p> ";
		
	}
	
	echo "<h2>Berita Sebelumnya</h2>";
	$sebelum=mysqli_query($koneksi,"SELECT * FROM berita ORDER BY id_berita DESC LIMIT 1,5");
	while ($s=mysqli_fetch_array($sebelum)){
		echo "<p><a href=?module=detailberita&id=$s[id_berita]>$s[judul]</a></p>";
	}
	
} else if($_GET['module']=='detailberita'){
	$detail=mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$_GET[id]'");
	$d = mysqli_fetch_array($detail);
	$u = mysqli_query($koneksi, "select * from user where id='[id_user]'");
	$nu = mysqli_fetch_array($u);
	
	echo "<a href=?module=detailberita&id=$d[id_berita]><h2>$d[judul]</h2></a>";
	echo "<p class='blog-post-meta'>$d[tgl_posting] | by : $nu[username]</p>";
	if ($d['gambar']!=''){
		echo "<img src='admin/foto_berita/$d[gambar]' width=150 height=100 hspace=10 border=0 align='left'>";
	}
	
	echo "<p>$d[isi_berita]</p>";
	echo "<br> [ <a href=javascript:history.go(-1)>Kembali</a> ] <br/><br></p>";
	
	include_once 'form_komentar.php';
	$sql=mysqli_query($koneksi, "SELECT * FROM komentar order by id_komentar DESC limit 5");
	echo "<br><h4> Komentar </h4><br>";
	while($ambil=mysqli_fetch_array($sql)){
		$u = mysqli_query($koneksi, "SELECT * FROM komentar WHERE id_berita='$d[id_berita]'");
		$nu = mysqli_fetch_array($u);
		echo "<br><p> $ambil[nama] | $ambil[email] </p>";
		echo "<div id='formKomentar'>$ambil[isi_komentar]</div>";
		echo "<br><hr/><br/>";
	}

}
		break;
	case 'politik' :
		if($_GET['module']==''){
	$terkini = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_kategori=4 ORDER BY id_berita DESC LIMIT 3");
	
	while($t=mysqli_fetch_array($terkini)){
		$u = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$t[id_user]'");
		$nu = mysqli_fetch_array($u);
		echo "<a href=?module=detailberita&id=$t[id_berita]><h2 class='blog-post-title'>$t[judul]</h2></a>";
		echo "<p class='blog-post-meta'>$t[tgl_posting] | by : $nu[username]</p>";
		
		if($t['gambar']!=''){
			echo "<img src='admin/foto_berita/$t[gambar]' width=150 height=100 hspace=10 border=0 align=left>";
		}
		
		$isi_berita = htmlentities(strip_tags($t['isi_berita']));
		$isi = substr($isi_berita,0,210);
		$isi= substr($isi_berita,0,strrpos($isi," "));
		
		echo "<p>$isi ... <br/><a  class='continue-lendo' href=?module=detailberita&id=$t[id_berita]>Selengkapnya →</a> <br><br><hr color=white></p> ";
		
	}
	
	echo "<h2>Berita Sebelumnya</h2>";
	$sebelum=mysqli_query($koneksi,"SELECT * FROM berita ORDER BY id_berita DESC LIMIT 1,5");
	while ($s=mysqli_fetch_array($sebelum)){
		echo "<p><a href=?module=detailberita&id=$s[id_berita]>$s[judul]</a></p>";
	}
	
} else if($_GET['module']=='detailberita'){
	$detail=mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$_GET[id]'");
	$d = mysqli_fetch_array($detail);
	$u = mysqli_query($koneksi, "select * from user where id='[id_user]'");
	$nu = mysqli_fetch_array($u);
	
	echo "<a href=?module=detailberita&id=$d[id_berita]><h2>$d[judul]</h2></a>";
	echo "<p class='blog-post-meta'>$d[tgl_posting] | by : $nu[username]</p>";
	if ($d['gambar']!=''){
		echo "<img src='admin/foto_berita/$d[gambar]' width=150 height=100 hspace=10 border=0 align='left'>";
	}
	
	echo "<p>$d[isi_berita]</p>";
	echo "<br> [ <a href=javascript:history.go(-1)>Kembali</a> ] <br/><br></p>";
	
	include_once 'form_komentar.php';
	$sql=mysqli_query($koneksi, "SELECT * FROM komentar order by id_komentar DESC limit 5");
	echo "<br><h4> Komentar </h4><br>";
	while($ambil=mysqli_fetch_array($sql)){
		$u = mysqli_query($koneksi, "SELECT * FROM komentar WHERE id_berita='$d[id_berita]'");
		$nu = mysqli_fetch_array($u);
		echo "<br><p> $ambil[nama] | $ambil[email] </p>";
		echo "<div id='formKomentar'>$ambil[isi_komentar]</div>";
		echo "<br><hr/><br/>";
	}

}
		break;
		
	default:
		break;

}

?>
</div>