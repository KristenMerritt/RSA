<?php
	/**
	 * Congregation Schedule Page for RSA
	 * 
	 * @author     Chevy Mac	 
	 * @author     Kristen Merritt
	 * @author     Tiandre Turner	 
	 * @version    Release: 1.0
	 * @date       11/16/17
	 */
	 

	$page='Congregation Schedule';
	$path_to_root="./../";

	// Setting up template system
	require_once($path_to_root.'../BUS/GeneralTemplate.class.php');
	$generalTemplate = new GeneralTemplate($page, $path_to_root);

	// Starting the session
	session_start();

	// Inserting header and navigation onto page via template system
	echo $generalTemplate->insertHeader();
	echo '<link href="'.$path_to_root.'css/schedule.css" rel="stylesheet">';

	// Setting up functions for Congregation Schedule and inserts the schedule to the page
	require_once($path_to_root.'../BUS/schedule/CongregationSchedule.class.php');
	$congregationSchedule = new CongregationSchedule($path_to_root, $page);
?>

	<div class="schedule-container clearfix">
		<?php echo $congregationSchedule->insertCongregationSchedule(); ?>
	</div>

<?php
	echo $generalTemplate->insertFooter();
?>