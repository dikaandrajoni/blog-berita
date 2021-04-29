
  <form method="POST" id="formKomentar" action="">
  <h3> Komentar Anda</h3><br>
  	<div>
  	 <input type="text" name="nama" placeholder="Nama" />
  	</div>

  	<div>
  	 <input type="text" name="email" placeholder="Email" />
    </div>

  	<div>
  	 <textarea name="komentar" rows="10" placeholder="Komentar"></textarea>
  	</div>

  	<div>
  	  <input name="submit" type="submit" value="Tambahkan Komentar"/>
  	</div>
  </form>
  <?php
	include 'admin/koneksi.php';
	if(isset($_POST['submit'])){
		$kirim=mysqli_query($koneksi,"INSERT INTO komentar (
  								id_berita,
                                nama,
								email,
								isi_komentar)
	                       VALUES(
                                '$_GET[id]',
								'$_POST[nama]',
								'$_POST[email]',
								'$_POST[komentar]')");
		if($kirim){
				echo "<script type='text/javascript'>alert('Komentar berhasil dikirim!');</script>";
		} else{
			echo "<script type='text/javascript'>alert('Gagal dikirim!');</script>";
		}
	}
  
  
  ?>
 