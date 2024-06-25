<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>
<body>
<h1>Register</h1>
<form>
<table>
<tr>
<td>
<fieldset>
<table>
<legend>General Information:</legend> 
  
  <p><b>First name:</b> <?php echo $_POST ['fname'];
?></p>
  <p><b>Last name:</b><?php echo $_POST ['lname'];
?></p>
  <p><b>Gender:</b>
  <?php echo $_POST ['gender'];
?></p>
  <p><b>Father's name:</b>
  <?php echo $_POST ['faname'];
?></p>
  
  <p><b>Mother's name:</b>
<?php echo $_POST ['mname'];
?></p>
    <p><b>Blood group:</b> <?php echo $_POST ['bg'];
?></p>
   <p><b>Religion:</b> <?php echo $_POST ['religions'];
?></p>
  


</form>
  </td>

</table>
</fieldset>
</td>

<td>
<fieldset>
<table>
<legend>Contact Information</legend> 
<p><b>Email:</b>
<?php echo $_POST ['email'];
?></p>
<p><b>Mobile/Phone:</b>
<?php echo $_POST ['mobilephone'];
?></p>
<p> <?php echo $_POST ['webside'];
?></p>
<p><b>Address:</b></p>
   <td>
<fieldset>
<legend>Present Address</legend>

 <p><b> Address: </b> <?php echo $_POST ['address'];
?></p>
  <p> <?php echo $_POST ['district'];
?></p>
    <p> <?php echo $_POST ['comment'];
?></p>
  <p> <?php echo $_POST ['upid'];
?></p>


</table> 
</fieldset>
</td>




<td>
<fieldset>
<table>
<legend>Account Information</legend> 
<p><b>Username:</b>
<?php echo $_POST ['uname'];
?></p>
<p><b>Password:</b></label>
<?php echo $_POST ['pass'];
?></p>
<p><b>Confirm Password:</b></label>
<?php echo $_POST ['cpass'];
?></p>


</table> 
</fieldset>
</td>

</table>
<input type="submit" value="Register">
</from>
  
</body>
</html>