<?php 
//session_start();
if (isset($_POST['sub'])) {
	include "dbconn.php";
	extract($_POST);
	// print_r($_POST);die;
	$obj = new db();
	$qry = "SELECT * from admin where admin_id = '$admin_id' AND password = '$password' ";
	$count = $obj->checkuser($qry);

	//print_r($count);
	//exit();
	if ($count>0) 
	{
		$_SESSION['admin_id'] = $admin_id;
		?>

		<script type="text/javascript">
			alert("welcome here");
			window.location.href = "index.php?page=forminsert"."<?php include 'header.php';?>"
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("invalid email or password");
			//window.location = "index.php?page=login";
		</script>
		<?php
	}
}
?>