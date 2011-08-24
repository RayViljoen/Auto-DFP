
<!-- Login Page. -->

<div class="wrap login">
	<div class="icon32 dfp_logo"><br></div>
	<h2>Google DFP Login:</h2><br />

	<form name="dfplogin" id="dfplogin" action="?page=dfp_options" method="post">
	<p>
		<label>Email<br>
		<input type="text" name="dfp_username" id="user_login" class="input" value="" size="20" tabindex="10"></label>
	</p>
	<p>
		<label>Network ID <span>optional</span><br>
		<input type="text" name="dfp_network" class="input" value="" size="20" tabindex="20"></label>
	</p>
	<p>
		<label>Password<br>
		<input type="password" name="dfp_password" id="user_pass" class="input" value="" size="20" tabindex="30"></label>
	</p>


<!-- 	<p class="forgetmenot"><label><input name="dfp_rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90"> Remember Me</label></p> -->
	<p class="submit">
		<input type="submit" name="dfplogin" id="wp-submit" class="button-primary" value="Log In" tabindex="100">
	</p>
	</form>
</div>