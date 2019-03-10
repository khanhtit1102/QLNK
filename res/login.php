<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NHK Bắc Ninh - Trang đăng nhập</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="<?php echo base_url('res/'); ?>css/style.css">
</head>
<body>
	<main>
		<div class="container">
			<div class="row">
				<div class="col s8 offset-s2">
					<div class="card card-login">
						<div class="card-login-splash">
							<div class="wrapper">
								<h3>Are you guest?</h3>
								<a class="waves-effect waves-light btn" href="#!">Yes, I'm Guest!</a>
							</div>
							<img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?5818699651879506597" alt="">
						</div>
						<div class="card-content">
							<span class="card-title">Log In As Administrators</span>
							<div class="error center" style="color: red;">
								<?php echo validation_errors('- '); ?>
								<?php if (isset($_SESSION['error'])) {
									echo '<div class="alert alert-success" role="alert">'.$_SESSION['error'].'</div>';
								} ?>
							</div>
							<form action="" method="post">
								<div class="input-field">
									<input id="email" type="text" name="email" class="validate" autocomplete="off" value="khanhnongvan0@gmail.com">
									<label for="email" class="">Email</label>
								</div>
								<div class="input-field">
									<input id="password" type="password" name="password" class="validate" autocomplete="off" value="123456">
									<label for="password" class="">Password</label>
								</div>
								<label>
									<input type="checkbox" />
									<span>Remember me?</span>
								</label>
								<br><br>
								<div>
									<input class="waves-effect waves-light btn right" type="submit" value="Log In">
								</form>
								<a class="waves-effect waves-teal btn-flat modal-trigger" href="#forgot">Forgot Password?</a>
								<div id="forgot" class="modal">
									<div class="modal-content">
										<h4>Reset Your Password</h4>
										<form action="forgot_password" method="POST" role="form">
											<div class="input-field">
												<input id="email_forgot" type="email" name="email_forgot" class="validate" required="">
												<label for="email" class="">Your Email</label>
											</div>
											<button type="submit" name="forgot" value="submit" class="waves-effect waves-light btn">Lấy lại mật khẩu</button>
										</form>
									</div>
									<div class="modal-footer">
										<a href="#!" class="modal-close waves-effect waves-green btn-flat">Đóng</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('res/'); ?>js/customjs.js"></script>
</body>
</html>