<div class="d-flex left-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <a href="index.php" class="a">Home</a> /User
        
      </div>
	  <hr>
<?php
include_once ("koneksi.php");
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch ($aksi) {
	case 'list' :
?>
	  
<a href=?page=user&aksi=entri class="btn a fa fa-plus"> Tambah</a><br>
<h2> List User</h2>
<table class="table-striping">
	<tr>
		<th>No</th>
		<th>Username</th>
		<th>Level</th>
		<th>Aksi</th>
	</tr>
	<?php
	include ("koneksi.php");
	$no=1;
	$tampil=mysqli_query($koneksi,"SELECT * FROM user order by id ASC");
	while ($data=mysqli_fetch_array($tampil)) {

	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['username']; ?></td>
		<td><?php echo $data['level']; ?></td>
		<td><a href=?page=user&aksi=edit&id=<?php echo $data['id']; ?> class="btn-edit fa fa-pencil"></a>
			<a href="aksi_user.php?page=user&proses=hapus&id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin akan menghapus data ?');" class="btn-hapus btn-sm fa fa-trash-o"></td> </a>
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
<a href=?page=user&aksi=list class="btn btn-danger fa fa-table"> List User</a>
<h2>Tambah User</h2>

<form role="form" method="POST" action="aksi_user.php?page=user&proses=input">
	<div class="form-group">
		<label class="label">Username</label>
		<input type="text" name="username" class="form-control" placeholder="Username">
	</div>
    <div class="form-group">
		<label class="label">Password</label>
		<input type="text" name="pass" class="form-control" placeholder="Password">
	</div>
	<div class="form-group">
	<label class="label">Level</label>
		<select name="level" class="form-control">
		<option>Administrator</option>
		<option>Moderator</option>
		<option>Operator</option>
	</select>
	</div>
	<br>
	<button type="submit" class="btn btn-primary fa fa-floppy-o"> Simpan</button>
	<button type="reset" class="btn btn-default">Reset</button>
</form>
<?php
	break;
case 'edit' :	
include_once ("koneksi.php");
$ambil=mysqli_query($koneksi,"SELECT * FROM user WHERE id=$_GET[id]");
$r=mysqli_fetch_array($ambil);
?>
<a href=?page=user&aksi=list class="button-logout fa fa-table"> List User</a>

<h2>Edit User</h2>

<form role="form" method="POST" action="aksi_user.php?page=user&proses=update">
	
	<div class="form-group">
		<label class="label">Username</label>
		<input type="text" name="username" value="<?php echo $r['username'];?>" class="form-control">
	</div>
    <div class="form-group">
		<label class="label">Password</label>
		<input type="text" name="pass" class="form-control">*Kosongkan jika tidak ada perubahan
	</div>
	<div class="form-group">
		<label class="label">Level</label>
		<select name="level" class="form-control">
		<option>Administrator</option>
		<option>Moderator</option>
		<option>Operator</option>
		</select>
	</div><br>
	<button type="submit" class="btn btn-primary fa fa-floppy-o"> Update</button>
	<button type="reset" class="btn btn-default">Reset</button>
</form>
<?php
	break;
}
?>
      