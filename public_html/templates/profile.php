<?php
	$page='RAHIN Profile';
	$path="./";
	require_once($path."header.php");
	echo '<link href="'$path.'../css/profile.css" rel="stylesheet">';
?>
<div class="container">
	<h1 id ="profile_h1">Congegation Name</h1>
	<div id="profile_container">
		<div align="left">
		<?php
			$t1 = "test1";
			// If there is any action required, it will display ACTION REQUIRED in red, else it will show regular button with no actions to take.
			if ($t1 == "test") 
			{
				echo '	<button id ="required">ACTION REQUIRED</button>';
			}
			else
			{
				echo '	<button>No Action Required</button>';
			}
		?> 	
			<br>
			<button>View/Request Blackout Dates</button>
			<br>
			<button>Request Schedule Change</button>
		</div>
		<?php 
			$t2 = "test";
			
			// If the profile is for bus driver, display the bus driver schedule, else it will display Congregation Schedule.
			if($t2 == "test")
			{
				require_once($path.'templates/bus_driver/profile.php');
			} 
			else 
			{
				require_once($path.'templates/congregation/profile.php');
			}
		?>

<?php
	require_once($path."footer.php");
?>