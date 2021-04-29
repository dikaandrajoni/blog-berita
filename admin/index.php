<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header("location:login.php");
	}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard | Berita harian</title>
	
    <link rel="stylesheet" href="../css/style.css">
  <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
	
</head>
<body>
 <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fa fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3><span>Dashboard</span></h3>
      </div>
      <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
<section>
  <div class="nav">
      <center>
        <img src="../img/logo.png" class="profile_image" alt="">
        <h4>Admin</h4>
      </center>
	<ul>
      <li> <a href="index.php?page=home"><i class="fa fa-desktop"></i><span> Home</span></a></li>
      <li><a href="index.php?page=kategori"><i class="fa fa-th"></i><span> Kategori</span></a></li>
      <li><a href="index.php?page=berita"><i class="fa fa-globe"></i><span> Berita</span></a></li>
      <li><a href="index.php?page=komentar"><i class="fa fa-comments"></i><span> Komentar</span></a></li>
      <li><a href="index.php?page=user"><i class="fa fa-user"></i><span> Users</span></a></li>
	</ul>
	</div>
	<article>
    <?php
			include_once 'main.php';
		?>
  </article>
</section>
	<footer>
	<small>Made with <span style="color:red;">❤</span> by <a href="#" class="a">Dika Andra Joni</a>
    </small>
  <p>&copy Copyright <?php echo date('Y'); ?></p>
</footer>
  
</body>
</html>