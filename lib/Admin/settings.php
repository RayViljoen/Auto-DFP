
<!-- Logged in page. -->

<div class="wrap">
<div id="icon-themes" class="icon32"><br></div>
<h2><?php echo __( 'Auto DFP', 'menu-test' ) ?></h2>

<?php if($this->saved): ?>
	<div class="updated"><p><strong>
		<?php _e('settings saved.', 'menu-test' ); ?>
	</strong></p></div>
<?php endif; ?>

<h1>LOGGED IN</h1>

	<form name="dfplogout" action="" method="post">
		<input type="submit" name="dfplogout" id="wp-submit" class="button-primary" value="Log Out" tabindex="100">
	</form>


</div>