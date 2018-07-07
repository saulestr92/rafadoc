<?php include('functions.php') ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
    <div class="input-group">
		<label>Usertype</label>
		<input type="text" name="user_type">
	</div>
    
     <div class="input-group">
		<label>Department</label>
		<input type="text" name="area">
	</div>
    
     <div class="input-group">
		<label>No. Ticket</label>
		<input type="text" name="numero" value="<?php echo $aleatorio; ?>"/>
	</div>
    
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
	<a href="login.php">Ingresar al Sistema</a>
	</p>
</form>
</body>
</html>