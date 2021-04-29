
<div class="d-flex left-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <a href="index.php" class="a">Home</a> / Komentar     
      </div>

<h2>List Komentar</h2>
<table class="table-striping">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Berita</th>
		<th>Komentar</th>
		<th>Action</th>
		
	</tr>
	<?php
	include ("koneksi.php");
	$no=1;
	$tampil=mysqli_query($koneksi,"SELECT * FROM komentar order by date_created ASC");
	while ($data=mysqli_fetch_array($tampil)) {

	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['email']; ?></td>
		<td><?php echo $data['id_berita']; ?></td>
		<td><?php echo $data['isi_komentar']; ?></td>
		<td><a href="aksi_komentar.php?page=komentar&proses=hapus&id=<?php echo $data['id_komentar']; ?>" 
				onclick="return confirm('Yakin akan menghapus komentar ini ?');" class="btn-hapus fa fa-trash-o"></a> </td>
	</tr>
	<?php
		$no++;
	}
	?>
</table>
      