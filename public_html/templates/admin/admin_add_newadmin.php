<?php
	/**
	 * Add new Admin Page for RSA
	 * 
	 * @author     Tiandre Turner
	 * @version    Release: 1.0
	 * @date       11/17/17
	 */
	 
	$page='RAIHN Add new Admin';
	$path_to_root="./../../";
	
	// Setting up template system and loads functions for Admin
	require_once($path_to_root.'../BUS/GeneralTemplate.class.php');
	require_once($path_to_root.'../BUS/admin/AdminFunctions.class.php');

	$generalTemplate = new GeneralTemplate($page, $path_to_root);
	$adminFunctions = new AdminFunctions($page, $path_to_root);

	// Starting the session
	session_start();
	
	// Inserting header and navigation onto page via template system
	echo $generalTemplate->insertHeader();
	echo '<link href="'.$path_to_root.'css/admin.css" rel="stylesheet">';

	// $congID = $_GET['congregation'];
	// $cong = $adminFunctions->getCongregation($congID)[0];
	// $user = $adminFunctions->getUser($cong->getContactId())[0];
?>
	<div id="adminLink">
		<a href="profile.php">Admin Home</a> > <a href="admin_add_newadmin.php">Add New Admin</a>
	</div>
	<h1>Add A New Admin</h1>
	<div id="admin_container">
		<form id="add-admin-form" align="middle">
			<input id="edit-name" class="fulltext" type="text" name="admin_first" value="First Name">
			<input id="edit-leader-name" class="fulltext" type="text" name="admin_last" value="Last Name">
			<br><br>
				<select id='admin_role' name='role'>
						<option value='-1'>Select a Role</option>
						<option value='3'>Bus Driver Admin</option>
						<option value='2'>Congregation Admin</option>
						<option value='1'>General Admin</option>
					</select>
			<input class="editright" type="submit" value="Save">
		</form>		
	</div>
<?php
	echo $generalTemplate->insertFooter();
?>