<?php include('../view/header.php'); ?>

<main class="main bg">
<div class="containerF">
    <div class="change-form">
		<div id="change-login" class="change change-login">
		<strong><span>Đăng nhập</span></strong>
	</div>
	<div id="change-signup"class="change change-signup">
		<strong><span>Đăng kí nhanh</span></strong>
	</div>
	</div>
	<div class="containerF-login containerF-form" id="containerF-login">
		<form method="POST">
			<div>
                            <i class="fas fa-user" style="color: gray"></i>
				<input type="text" class="value-in" name="username" placeholder="Nhập tên tài khoản...">
			</div>
			<div>
				<i class="fas fa-lock" style="color: gray"></i>
				<input type="password" class="value-in" name="password" placeholder="Nhập mật khẩu...">
			</div>
				<input class="login" type="submit" name="login" value="Đăng nhập">
		</form>
	</div>

	<div class="containerF-signup containerF-form" id="containerF-signup">
		<form method="POST">
			<div>
				<i class="fas fa-user" style="color: gray"></i>
				<input type="text" class="value-in" name="username" placeholder="Nhập tên tài khoản...">
			</div>
			<div>
				<i class="fas fa-lock" style="color: gray"></i>
				<input type="text" class="value-in" name="password" placeholder="Nhập mật khẩu...">
			</div>
			<div>									<i class="fas fa-lock" style="color: gray"></i>
				<input type="text" class="value-in" name="password" placeholder="Nhập lại mật khẩu...">
			</div>
		
			<input type="submit" name="signup" value="Đăng kí">
		</form>
	</div>
	
	</div>
</main>
	<script type="text/javascript" src="../js/login.js"></script>

	<?php include('../view/footer.php') ?>
