<?php
	$page='RAHIN Login';
	$path="./";
	include($path."./templates/header.php");
?>

<form action="">
	<div class="container">
	<form action="">
	<h2>RSA Login</h2>

		<input type="text" placeholder="Enter Username" name="username" required>
		<br><br>
		<input type="password" placeholder="Enter Password" name="pw" required>
        <br><br>
		<button type="submit">Login</button>
		<button type="submit">Request Account</button>
	</form>
	</div>
<?php
	include($path."./templates/footer.php");
?>