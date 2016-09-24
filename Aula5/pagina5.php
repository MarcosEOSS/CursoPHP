<html>

	<head>
		<!--MEU CSS (mentira eh do bootsnipp)-->
		<link href="static/pagina5.css" type="text/css" rel="stylesheet" />

		<!--MEU JS (mentira eh do bootsnipp)-->
		<script src="static/pagina5.js"></script>

		<title></title>
		<?php require "../Aula2/bootstrap.php"; ?>
	</head>

	<body>
	    <div class="container">
	        <div class="card card-container">
	            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
	            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
	            <p id="profile-name" class="profile-name-card"></p>
	            
				<?php if (isset($_GET['error'])): ?>
					<div class="alert alert-danger">
						<?php if ($_GET['error'] == 'invalid_login'):?>
						Login ou senha invalidas !!
						<?php endif?>
					</div>
				<?php endif?>
	            <form class="form-signin" action="login.php" method="post">
	                <span id="reauth-email" class="reauth-email"></span>
	                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email"  autofocus>
	                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" >
	                <div id="remember" class="checkbox">
	                    <label>
	                        <input type="checkbox" value="remember-me"> Lembre-se de mim
	                    </label>
	                </div>
	                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
	            </form><!-- /form -->
	            <a href="#" class="forgot-password">
	                Esqueceu a senha?
	            </a>
	        </div><!-- /card-container -->
	    </div><!-- /container -->
	</body>
</html>