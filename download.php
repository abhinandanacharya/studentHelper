<?php
if(isset($_GET['dow']))
{
	 echo "hello";
	$folder=$_GET['dow'];
	$qry=my_query("SELECT * FROM bca WHERE path_name='$folder'");
	print_r($qry);
	exit();
	header('content-type: application/octet-stream');
	header('content-disposition: attechment; filename="'.basename($folder).'"');
	header('content-length:'. filesize($folder));
	readfile($folder);
}