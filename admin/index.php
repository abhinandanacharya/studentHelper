<?php
session_start();
 if(isset($_SESSION['admin_id'])) { include "header.php";}else {include 'cdn.php';}

//include "../link_files/files.php";
include "dbconn.php";


if(isset($_GET['page']))
{  $page = $_GET['page'];

	switch ($page) {
		// case 'home':
		// 	include 'home.php';
		case 'home':
		include 'home.php';
		break;
		case 'login':
				include 'login.php';
				break;
		// case 'request':
		// 		include 'request.php';
		 case 'forminsert':
		 		include'forminsert.php';
		 		//include "header.php";
		 		break;
		case 'logout':
				include 'logout.php';
				break;
		// case 'fileform':	
		// 		include 'fileform.php';
		 case 'uploaddata':
		 		include'uploaddata.php';
		 		break;
		 case 'formmca':
		 		include 'formmca.php';
		 		break;
		
		 		case 'mscupload':
				 include 'mscupload.php';
				 break;
		default:
			echo "string";
			break;
	}
} else {
	include 'login.php';
}



