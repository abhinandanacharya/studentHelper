<?php include "cdnmew.php"; 
include "navbar.php";
include "admin/dbconn.php";
//include "link_files/files.php";
session_start();
//session_start();
if(isset($_GET['page']))
{  $page = $_GET['page'];

	switch ($page) {

		// case 'home':
		// 		include 'home.php';	
		// 		break;
		case 'Features';	
				include 'Features.php';
		case 'bca':
				include'bca.php';
				break;
		case 'mca':
				include'mca.php';
				break;
		case 'msc':
				include'msc.php';
				break;
		case 'download':
				include'download.php';
		default:
			# code...
			break;
	}
}
