
<section class="mainsection">
<div class="uk-section  uk-flex uk-flex-middle uk-animation-fade" uk-height-viewport>
	<div class="uk-width-1-1">
		<div class="uk-container">
			<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
				<div class="uk-width-1-1@m">
					<div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
						<h3 class="uk-card-title uk-text-center">Pas encore parmis nous?</h3>
                                        <p id="message">
                                            <?php
                                                if(isset($_SESSION['error'])){
                                                    echo $_SESSION['error'];
                                                    unset($_SESSION['error']);
                                                }
                                            ?>
						<form action ="?ctrl=security&method=goRegister" method="POST">

							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									<span class="uk-form-icon" uk-icon="icon: mail"></span>
									<input type="email" name="email" required class="uk-input uk-form-large">
								</div>
							</div>
                            <div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									<span class="uk-form-icon" uk-icon="icon: user"></span>
									<input type="username" name="name"  class="uk-input uk-form-large" type="text" required>
								</div>
							</div>
							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									<span class="uk-form-icon" uk-icon="icon: lock"></span>
									<input type="password" name="password" minlength="8" required class="uk-input uk-form-large" minlength="8" required>	
								</div>
							</div>
                            <div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									<span class="uk-form-icon" uk-icon="icon: lock"></span>
									<input type="password" name="password_r" minlength="8" required class="uk-input uk-form-large" minlength="8" required>	
								</div>
							</div>

							<div class="uk-margin">
								<input type="submit" value ="S'inscrire" class="uk-button uk-button-primary uk-button-large uk-width-1-1"></input>
							</div>
							<div class="uk-text-small uk-text-center">
								En vous inscrivant, vous acceptez les <a href="?ctrl=home&method=rules">conditions générales du site</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


    </section>



 