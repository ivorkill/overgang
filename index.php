<?php
//Header & Navigation
include 'views/head.php';
include 'views/header.php';
$page = (empty($_GET['page'])) ? '' : $_GET['page'];
switch ($page) {
	//Home page
	case 'home':
		//Views
		include 'views/home.php';
		break;
	//Song page
	case 'songs':
		//Model
		require_once 'models/get_songs.php';
		//Views
		include 'views/songs.php';
		break;
	//About page
	case 'about':
		//Views
		include 'views/about.php';
		break;
	//Default
	default:
		//Views
		include 'views/home.php';
		break;
}
//Footer
include 'views/footer.php';
?>