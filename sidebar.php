
<div class="sidebar-module">
<h2>Berita Terbaru</h2><hr/><br>

<ol class="list-unstyled">
	<?php
		include_once 'admin/koneksi.php';
		$terkini = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5");
		while($t=mysqli_fetch_array($terkini)){
			$u = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$t[id_user]'");
			$nu = mysqli_fetch_array($u);
			echo "<li><a href=?module=detailberita&id=$t[id_berita]>$t[judul]</a></li><br>";
		}
	?>
</ol><br>
	<h2>Follow</h2><hr/><br>
	<ol class="list-unstyled">
		<li><a href="https://www.facebook.com/dika.andrajoni"> Facebook</a></li>
		<li><a href="https://twitter.com/joni_dika"> Twitter</a></li>
		<li><a href="https://www.instagram.com/ddiiiiiikkkka"> Instagram</a></li>
	</ol>
</div>