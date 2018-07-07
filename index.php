<?php 
	include('functions.php');
	if (!isLoggedIn()) {
	$_SESSION['msg'] = "Tienes que Logearte Primero";
	header('location: login.php');
}

?>
<?php 

$max = 1000000; 
$aleatorio = mt_rand(1, $max); //Genereamos aleatorio 
$usados[] = $aleatorio; //Guardamos el primero en un array ya que el primero no puede estar repetido 

for ($i = 0; $i < 6; $i++) { 
     
    $aleatorio = mt_rand(1, $max); //Generamos aleatorio 
    while(in_array($aleatorio,$usados)) { //buscamos que no este repetido 
        $aleatorio = mt_rand(1, $max); 
    } 

    $usados[] = $aleatorio;    //No esta repetido, luego guardamos el aleatorio 
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user_profile.png">
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
             
					<strong><?php echo $_SESSION ['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION ['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">Salir</a>
					</small>

				<?php endif ?>
			</div>
            <?php
	
	$query = "SELECT * FROM users WHERE id='$id'";
	$result = mysqli_query($db, $query);
	$user = mysqli_fetch_assoc($result);
	return $user;
	$user=['id'];
?>
		</div> 
        <form method="post" action="">
<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $str['username']; ?>">
	</div>
    
     <div class="input-group">
		<label>Department</label>
		<input type="text" name="area" value="<?php echo $str['area']; ?>">
	</div>
    
     <div class="input-group">
		<label>No. Ticket</label>
		<input type="text" name="numero" value="<?php echo $aleatorio; ?>"/>
	</div>
    <div class="input-group">
		<label>Prioridad</label>
	<select name="carlist" form="carform">
  	<option value="volvo">Alta</option>
  	<option value="saab">Media</option>
  	<option value="opel">Baja</option>
	</select>
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $str['email']; ?>"/>
	</div>
	<div class="input-group">
		<label>Descripcion</label>
		<textarea name="case"></textarea>
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
	<a href="login.php">Ingresar al Sistema</a>
	</p>
</form>
	</div>
</body>
</html>

