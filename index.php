<!DOCTYPE html>
<html>
<head>
	<title>PutraMinang News | Blog Berita</title>
	<link rel="stylesheet" type="text/css" href="css/blog-style.css">
	<link rel="stylesheet" type="text/css" href="css/style-blog-dika.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>

<div class="wrap">
		<!-- menu	 -->
		<div class="logo" style="background:#FFF;">
			<a href="index.php?page=home"><img src="img/logo.png" style="padding:5px;" width="120" height="120"/></a>
			<p style="float:right; padding:10px;"><a href="#"><?php echo date('l, d M Y'); ?></a></p>
		</div>

		<nav>
		<div id='cssmenu'>
		<ul>
			<li class="active"><a href='index.php?page=home'><span>Home</span></a></li>
			<li class='has-sub'><a href='#'><span>Kategori</span></a>
			<ul>
				<li class='has-sub'>
					<a href='index.php?page=kategori&berita=pendidikan'><span>Pendidikan</span></a>
				</li>
				<li class='has-sub'>
					<a href='index.php?page=kategori&berita=teknologi'><span>Teknologi</span></a>
				</li>
				<li class='has-sub'>
					<a href='index.php?page=kategori&berita=olahraga'><span>Olahraga</span></a>
				</li>
				<li class='has-sub'>
					<a href='index.php?page=kategori&berita=otomotif'><span>Otomotif</span></a>
				</li>
				<li class='has-sub'>
					<a href='index.php?page=kategori&berita=politik'><span>Politik</span></a>
				</li>
			</ul>
			</li>
			<li><a href='index.php?page=biodata'><span>Biodata</span></a></li>
			<li class='last'><a href='#'><span>Contact</span></a></li>
			<form style="float:right;padding:10px;" method="POST" action="index.php?page=cari">
				<input type="text" class="fa fa-search" name="kata_kunci" placeholder="Search..."/>
				<input type="submit" name="submit" value="Cari">
			</form>
			
		</ul>
		
		</div>
		
		</nav>
		<!-- menu -->

		<!-- sidebar -->
		<aside class="sidebar">
			<div class="widget">
				<?php
					include_once 'sidebar.php';
				?>
				<p></p>
			</div>
			<div class="widget">
				<h3>Komentar Terbaru</h3>
				<hr>
				<p><?php include_once 'komentar.php';?></p>
			</div>
		</aside>

		<!-- Berita -->
		<div class="blog">
			<div class="contentku">
				<?php
					include_once 'main.php';
				?>

			</div>

			</div>

		</div>

		<div class="footer">
		<div class="footer2">
			<a href="https://twitter.com/joni_dika"><img src="img/twit.png" class="icon"></a><a href="https://youtu.be/nupC3_VEqxA"><img src="img/yt.png" class="icon"></a>
			<a href="https://www.facebook.com/dika.andrajoni"><img src="img/fb.png" class="icon"><a href="https://api.whatsapp.com/send?phone=+6282390661445&text=Hallo,%20Artikel%20Anda%20Menarik%20Sekali!"><img src="img/wa.png" class="icon"></a></a><br>
			<small>Made with <span>❤</span> by <a href="#" target="_blank">Dika Andra Joni</a><br>
			<p> &copy Copyright <?php echo date('Y'); ?></p>
			
				</small>

		</div>
		</div>

	</div>

</body>
</html>
