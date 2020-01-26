<?php
//;
//include "header.php";

if (isset($_POST['upload'])) 
{
	//include "dbconn.php";

			
extract($_POST);
$name = $_FILES['file']['name'];

//$trg = "testupload/";
$folder="testupload/$name";
move_uploaded_file($_FILES['file']['tmp_name'],$folder);
//extract($_POST);
	// $folder="testupload/$name";
$obj = new db();
$qry="INSERT into bca (file,path_name) VALUES('$name','$folder')";
//print_r($qry);
//exit();
$res = $obj->insert($qry);

//print_r($res);
}

else{echo "failed to upload file";}
if ($res>0) 
{
	
		//$_SESSION[''] = $email;
		?>
		<script type="text/javascript">
			alert("data added");
			window.location = "../index.php?page=bca";
		</script>
		<?php
	}
	// else
	// {
	// 	?>
	// 	<script type="text/javascript">
	// 		alert("<h3>this account is already registerd</h3>");
	// 		window.location = "index.php?page=fileform";
	// 	</script>
	// 	<?php
	// }
  
?>
?>


		
