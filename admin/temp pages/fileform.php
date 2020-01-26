<form method="post" role="form" enctype="multipart/form-data"action="index.php?page=uploaddata" > 
	<input type="file" name="file" id="file" accept="application/pdf" />
	<a href="../index.php?page=bca">
	<button id="send" type="submit" name="upload" class="btn btn-success">Submit
		</button></a>

</form>

<!-- <?php
//;
// if (isset($_POST['upload'])) 
// {
// 	include "dbconn.php";
// extract($_POST);
// $name = $_FILES['file']['name'];
// //$trg = "testupload/";
// move_uploaded_file($_FILES['file']['tmp_name'],$name);
// extract($_POST);
// 	$folder="testupload/$name";
// $obj = new db();
// $qry="INSERT into bca (file,path_name) VALUES('$name','$folder')";
// print_r($qry);
// //exit();
// $res = $obj->insert($qry);
// //print_r($res);
// }
// else{echo "failed to upload file";}

// ?> -->