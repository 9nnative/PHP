<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<section class="mainsection">
<div class="uk-section  uk-flex uk-flex-middle uk-animation-fade" uk-height-viewport>
	<div class="uk-width-1-1">
		<div class="uk-container">
			<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
				<div class="uk-width-1-1@m">
					<div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
						<h3 class="uk-card-title uk-text-center">Heureux de vous revoir!</h3>
						<p id="message">
								<?php
									if(isset($_SESSION['error'])){
										echo $_SESSION['error'];
										unset($_SESSION['error']);
									}
								?>
							</p>
						<form  action ="?ctrl=security&method=goLogin" method="POST">
							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									<span class="uk-form-icon" uk-icon="icon: user"></span>
									<input class="uk-input uk-form-large"  name="name" type="text">
								</div>
							</div>
							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									<span class="uk-form-icon" uk-icon="icon: lock"></span>
									<input id="pass_S" name="password" class="uk-input uk-form-large" type="password">	
								</div>
								<input type="checkbox" onclick="showPass()">Afficher le mot de passe</input>
							</div>
							<div class="uk-margin">
								<input type="submit" value ="Connexion" class="uk-button uk-button-primary uk-button-large uk-width-1-1"></input>
							</div>
							<div class="uk-text-small uk-text-center">
								Pas encore parmis nous? <a href="?ctrl=security&method=formRegister">Créer un compte</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


    </section>
</body>
</html>
