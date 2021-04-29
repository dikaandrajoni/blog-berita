
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login dulu!</title>
    <link rel="stylesheet" href="../css/login-style.css">
	
	<script src="../js/login.js"></script>
    
  </head>
  <body>
    <div class="container">
	<header>
	<img src="../img/logo.png" alt="login-dulu" width=150 height=150/><br/>
	Silahkan Login
	  </header>
      <form action="" method="POST">
        <div class="input-field">
          <input type="text" name="username" required>
          <label>Username</label>
        </div>

		<div class="input-field">
          <input class="pswrd" name="password" type="password" required>
          <span class="show">SHOW</span>
          <label>Password</label>
        </div>
		<div class="button">
          <div class="inner">
			</div>
			<button name="submit" type="submit">LOGIN</button>
        </div>
</form>
<script src="../js/login.js"></script>
<script>
      var input = document.querySelector('.pswrd');
      var show = document.querySelector('.show');
      show.addEventListener('click', active);
      function active(){
        if(input.type === "password"){
          input.type = "text";
          show.style.color = "#1DA1F2";
          show.textContent = "HIDE";
        }else{
          input.type = "password";
          show.textContent = "SHOW";
          show.style.color = "#111";
        }
      }
    </script>

<?php
	if(isset($_POST['submit'])){
		include 'koneksi.php';
		$pass = md5($_POST['password']);
		$cek=mysqli_query($koneksi,"SELECT * from user where username='$_POST[username]' AND password='$pass'");
		$data = mysqli_fetch_array($cek);
		$result = mysqli_num_rows($cek);
		if($result==1){
			session_start();
			$_SESSION['iduser'] = $data['id'];
			$_SESSION['username'] = $data['username'];
			$_SESSION['level'] = $data['level'];
			echo "<script><alert>Login anda berhasil!</alert></script>";

			header('location:index.php?page=home');
		}else{
			echo "<script><alert>Anda gagal login, cek lagi username dan password!</alert></script>";

		}
	}

	?>

  </body>
</html>
