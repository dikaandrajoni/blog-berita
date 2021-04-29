<a href="index.php" class="a">Home</a> / Kategori
<hr/>     
<?php
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch ($aksi) {
	case 'list' :
?>
<br>
<a href=?page=kategori&aksi=entri class="btn a fa fa-plus"> Tambah</a><br/>
<h2>List Kategori</h2>
<table class="table-striping">
	<tr>
		<th>No</th>
		<th>Nama Kategori</th>
		<th>Keterangan</th>
		<th>Aksi</th>
	</tr>
	<?php
	include ("koneksi.php");
	$no=1;
	$tampil=mysqli_query($koneksi,"SELECT * FROM kategori order by nama_kategori ASC");
	while ($data=mysqli_fetch_array($tampil)) {

	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['nama_kategori']; ?></td>
		<td><?php echo $data['keterangan']; ?></td>
		<td><a href=?page=kategori&aksi=edit&id=<?php echo $data['id']; ?> class="btn-edit fa fa-pencil"></a>
			<a href="aksi_kategori.php?page=kategori&proses=hapus&id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin akan menghapus data ?');" class="btn-hapus fa fa-trash-o"></a></td>
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
<a href=?page=kategori&aksi=list class="btn fa fa-table"> List Kategori</a>
<h2>Tambah Kategori</h2>

<form role="form" method="POST" action="aksi_kategori.php?page=kategori&proses=input">
	<div class="form-group">
		<label class="label">Nama Kategori</label>
		<input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori">
	</div>
    <div class="form-group">
		<label class="label">Keterangan</label>
		<input type="text" name="ket" class="form-control" placeholder="keterangan">
	</div>
	<br>
	<button type="submit" class="btn fa fa-floppy-o"> Simpan</button>
	<button type="reset" class="btn-hapus fa fa-circle-o"> Reset</button>
</form>
<?php
	break;
case 'edit' :	
include_once ("koneksi.php");
$ambil=mysqli_query($koneksi,"SELECT * FROM kategori WHERE id=$_GET[id]");
$r=mysqli_fetch_array($ambil);
?>
<a href=?page=kategori&aksi=list class="btn btn-danger fa fa-table"> List Kategori</a>

<h2>Edit Kategori</h2>

<form role="form" method="POST" action="aksi_kategori.php?page=kategori&proses=update">
	<div class="form-group">
		<label class="label">id Kategori</label>
		<input type="text" name="id" value="<?php echo $r['id'];?>" class="form-control" readonly>
	</div>
	<div class="form-group">
		<label class="label">Nama Kategori</label>
		<input type="text" name="nama_kategori" value="<?php echo $r['nama_kategori'];?>" class="form-control">
	</div>
    <div class="form-group">
		<label class="label">Keterangan</label>
		<input type="text" name="ket" value="<?php echo $r['keterangan'];?>" class="form-control">
	</div>
	<br>
	<button type="submit" class="btn fa fa-floppy-o"> Update</button>
	<button type="reset" class="btn-hapus fa fa-circle-o"> Reset</button>
</form>
<?php
	break;
}
?>
      