<?php  if(isset($_SESSION['Username'])) {
    redirect(site_url('user/view'));}?>
<center>
<?php echo validation_errors(); ?>
<?php echo form_open('user/login'); ?>
<table><tr><tr><th colspan=2>Login</th></tr><td>
<label for="username">Username:</label></td><td>
<input type="input" name="username" />
</td></tr><tr><td>
<label for="password" >Password:</label></td><td>
<input type="password" name="password" value=""></td></tr>
<tr><td colspan=2><input type="submit" name="submit" value="Login" /></td></tr>
</table>
</center>
</form>
