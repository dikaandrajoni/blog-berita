
    <a href="index.php" class="a">Home</a> / Berita  
<hr/>
<?php
include_once ("koneksi.php");
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch ($aksi) {
	case 'list' :
?>
<br>
<a href=?page=berita&aksi=entri class="btn a fa fa-plus"> Tambah</a><br>
<h2>List Berita</h2>
<table class="table-striping">
	<thead>
	<tr>
		<th>No</th>
		<th>Kategori</th>
		<th>User</th>
		<th>Judul</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<?php
	$no=1;
	
	$tampil=mysqli_query($koneksi,"SELECT * FROM berita order by id_berita ASC");
	while ($data=mysqli_fetch_array($tampil)) {
		$kategori=mysqli_query($koneksi,"SELECT * FROM kategori WHERE id=$data[id_kategori]");
		$user=mysqli_query($koneksi,"SELECT * FROM user WHERE id=$data[id_user]");
		$u=mysqli_fetch_array($user);
		$k=mysqli_fetch_array($kategori);

	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $k['nama_kategori']; ?></td>
		<td><?php echo $u['username']; ?></td>
		<td><?php echo $data['judul']; ?></td>
		<td><?php echo $data['tgl_posting']; ?></td>
		<td align="center"><a href=?page=berita&aksi=edit&id=<?php echo $data['id_berita']; ?> class="btn-edit fa fa-pencil"></a>
			<a href="aksi_berita.php?page=berita&proses=hapus&id=<?php echo $data['id_berita']; ?>" 
				onclick="return confirm('Yakin akan menghapus data ?');" class="btn-hapus fa fa-trash-o"></td> </a>
	</tr>
	<?php
		$no++;
	}
	?>
						
	</table>
	
<?php
	break;
case 'entri' :	
?>
<a href=?page=berita&aksi=list class="btn fa fa-table"> List berita</a><br>
<h2>Tambah Berita</h2>

<form role="form" method="post" enctype="multipart/form-data" action="aksi_berita.php?page=berita&proses=input">
	<div class="form-group">
		<label class="label">Nama Kategori</label>
		<select name="kategori" class="form-control">
			<?php
			
			$ambil=mysqli_query($koneksi,"SELECT * FROM kategori order by id ASC");
			while ($data=mysqli_fetch_array($ambil)) {
			echo "<option value='$data[id]'>$data[nama_kategori]</option>";
			}
			?>
		</select>
	</div>
    <div class="form-group">
		<label class="label">Judul</label>
		<input type="text" name="judul" class="form-control" placeholder="judul">
	</div>
	<div class="form-group">
		<label class="label">Isi Berita</label>
		<textarea name="berita" class="form-control" rows="5"></textarea>
	</div>
	<div class="form-group">
		<label class="label">Gambar</label>
		<input type="file" name="file_image">
	</div>
	<button type="submit" class="btn fa fa-floppy-o"> Simpan</button>
	<button type="reset" class="btn-hapus fa fa-circle-o"> Reset</button>
</form>
<?php
	break;
case 'edit' :	
$ambil=mysqli_query($koneksi,"SELECT * FROM berita WHERE id_berita=$_GET[id]");
$r=mysqli_fetch_array($ambil);
?>
<a href=?page=berita&aksi=list class="btn btn-danger fa fa-table"> List berita</a><br>
<h2>Edit Berita</h2>

<form role="form" method="post" enctype="multipart/form-data" action="aksi_berita.php?page=berita&proses=update">
	
		<input type="hidden" name="id" value="<?php echo $r['id_berita'];?>" class="form-control">
	
	<div class="form-group">
		<label class="label">Nama Kategori</label>
		<select name="kategori" class="form-control">
			<?php
			$ambil=mysqli_query($koneksi,"SELECT * FROM kategori order by id ASC");
			while ($data=mysqli_fetch_array($ambil)) {
				$select=($r['id_kategori']==$data['id']) ? 'selected' :'';
				echo "<option value='$data[id]' $select>$data[nama_kategori]</option>";
				
			}
			?>
		</select>
	</div>
	<div class="form-group">
		<label class="label">Judul</label>
		<input type="text" name="judul" value="<?php echo $r['judul'];?>" class="form-control">
	</div>
    <div class="form-group">
		<label class="label">Berita</label>
		<textarea name="berita" class="form-control" rows="5"><?php echo $r['isi_berita']; ?></textarea>
	</div>
	<div class="form-group">
		<label class="label">Gambar</label>
		<input type="file" name="file_image"> <br> 

		<?php 
		if ($r['gambar']!='') {
			echo "<img src=foto_berita/$r[gambar] width=100 height=50>";
		}
		else {
			echo "Tidak ada image";
		}
		?>
	</div>
	<button type="submit" class="btn fa fa-floppy-o"> Update</button>
	<button type="reset" class="btn-hapus fa fa-circle-o"> Reset</button>
	
</form>
<?php
	break;
}
?>
 </div>
