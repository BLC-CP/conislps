<?php
session_start();
include '../config/config.php';

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = mq("SELECT * FROM tb_admin WHERE username = '$username' && password = '$password' ");

	$dataUser = mfa($query);

	if (mnr($query) > 0) {
		header("Location:index.php");

		if ($dataUser['level'] == 'admin') {
			$_SESSION['status'] = 'logins';
			$_SESSION['level'] = 'admin';
			$_SESSION['idadmin'] = $dataUser['id_admin'];
			header("Location:../");
		} elseif ($dataUser['level'] == 'user') {
			$_SESSION['status'] = 'logins';
			$_SESSION['level'] = 'user';
			$_SESSION['idadmin'] = $dataUser['id_admin'];
			header("Location:../");
		} else {
			header("Location:?status=loginLaDiak");
		}
	} else {
		header("Location:?status=loginLaDiak");
	}
}


?>


<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<style>
		body {
			background-image: url('../img/es.jpg');
			background-size: cover;
			background-attachment: fixed;
		}

		.login {
			background-color: rgba(0, 0, 0, 0.7);
			padding: 5px;
			width: 30%;
			border-radius: 10px;
		}

		label {
			color: white;
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-lg bg-primary">
		<div class="container">
			<a class="navbar-brand text-white" href="#">ESG-NKSL</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<!-- <li class="nav-item">
						<a class="nav-link active text-white" aria-current="page" href="#">Baranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active text-white" href="#">Galery</a>
					</li> -->
					<!-- <li class="nav-item">
						<a class="nav-link active text-white" href="#">Login</a>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>

	<div class="container mt-5 login">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<?php if ($_GET['status'] == "loginlai") { ?>
					<div class="alert alert-success text-center">Favor Priennse Usernname ho Password hodi bele assesu sistema</div>
				<?php } elseif ($_GET['status'] ==  'loginLaDiak') { ?>
					<div class="alert alert-danger text-center">Usernname ka Password Salah</div>
				<?php } elseif ($_GET['status'] == 'ok') { ?>
					<div class="alert alert-warning text-center">Ita boot sai ona husi sistema</div>
				<?php } ?>
				<form method="post" action="">
					<div class="mb-3">
						<label for="username" class="form-label">Email address</label>
						<input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" name="password" id="password">
					</div>
					<button type="submit" name="login" class="btn btn-primary btn-sm">Login</button>
				</form>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>