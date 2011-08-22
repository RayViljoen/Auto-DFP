
<!-- Login Page. -->

<div class="wrap">

<div id="login">
	<form name="dfplogin" id="loginform" action="" method="post">
	<div id="icon-themes" class="icon32"><br></div>
	<h2><?php echo __( 'Google DFP Login:', 'menu-test' ) ?></h2><br />
	<p>
		<label>Email<br>
		<input type="text" name="dfp_username" id="user_login" class="input" value="" size="20" tabindex="10"></label>
	</p>
	<p>
		<label>Password<br>
		<input type="password" name="dfp_password" id="user_pass" class="input" value="" size="20" tabindex="20"></label>
	</p>
	<p class="forgetmenot"><label><input name="dfp_rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90"> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="dfplogin" id="wp-submit" class="button-primary" value="Log In" tabindex="100">
	</p>
	</form>
</div>	
</div>