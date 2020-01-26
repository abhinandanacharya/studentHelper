<?php



if (isset($_POST['upload'])) 
{
	//include "dbconn.php";

			
extract($_POST);
$name = $_FILES['file']['name'];
//echo $name; exit();
//$trg = "testupload/";
$save="mcapaper/$name";
move_uploaded_file($_FILES['file']['tmp_name'],$save);
	// $save="mcapaper/$name";
	//extract($_POST);

$obj = new db();
$qry="INSERT into mca (file_name,file_path) VALUES('$name','$save')";
//print_r($qry);
//exit();
$res = $obj->insert($qry);
if ($res>0) 
{
	
		//$_SESSION[''] = $email;
		?>
		<script type="text/javascript">
			alert("data added");
			window.location = "../index.php?page=mca";
		</script>
		<?php
	}

//print_r($res);
}

else{echo "failed to upload file";}
// if ($res>0) 
// {
	
// 		//$_SESSION[''] = $email;
// 		?>
 		<!-- <script type="text/javascript">
// 			alert("data added");
// 			window.location = "../index.php?page=mca";
// 		</script> -->
		<?php
// 	}
	// else
	// {
	// 	?>
	 <!-- 	<script type="text/javascript"> -->
	 		<!-- alert("<h3>this account is already registerd</h3>");
		window.location = "index.php?page=fileform";
	</script> -->
	<?php
	// }
  



		
