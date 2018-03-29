  <center>
<?php echo validation_errors(); ?>

<?php echo form_open('user/create'); ?>
<table>
  <tr>
    <th colspan=2>  
      <center><?php echo $title; ?></center>
    </th>
  </tr>
  <tr>
    <td>
      <label for="username">Username:</label>
    </td><td>
      <input type="input" name="username" />
    </td>
  </tr>
  <tr>
    <td>
      <label for="email">Email:</label>
    </td><td>
      <input type="email" name="email" />
    </td>
  </tr>
  <tr>
    <td>
      <label for="password" style="padding-right: 4px;">Password:</label>
    </td><td>
      <input type="password" name="password" value="">
    </td>
  </tr>
  <tr>
    <td colspan=2>  
      <center><input type="submit" name="submit" value="Create User" /></center>
    </td>
  </tr>
</table>
</form>
</center>
