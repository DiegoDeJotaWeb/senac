<?php



require_once "./painel/class/User-class.php";
$class = new User();
$class->criarUser();





?>



<div class="card-body">
	<form method="POST" action="autenticar.php">
		<div class="input-group form-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fas fa-user"></i></span>
			</div>
			<input type="text" class="form-control" placeholder="username" name="email">

		</div>
		<div class="input-group form-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fas fa-key"></i></span>
			</div>
			<input type="password" class="form-control" placeholder="password" name="senha">
		</div>
		<div class="row align-items-center remember">
			<input type="checkbox">Lembre de mim
		</div>
		<div class="form-group">
			<input type="submit" value="Login" class="btn float-right login_btn">
		</div>
	</form>
</div>
<div class="card-footer">
	<!-- <div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div> -->
	<div class="d-flex justify-content-center">
		<a href="#">Esqueceu sua senha?</a>
	</div>
</div>

</body>

</html>