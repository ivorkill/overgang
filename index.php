<?php
//Maak db connectie
require 'config/config.php';
require 'config/dbconnect.php';
//Head
include "views/head.php";
//Header
include "views/header.php";
$page = (empty($_GET['page'])) ? '' : $_GET['page'];
$song_id = (empty($_GET['song_id'])) ? '' : $_GET['song_id'];
switch ($page) {
	//Home page
	case 'home':
		//Views
		include 'views/home.php';
		break;
	//Song page
	case 'songs':		
		//Model
		require 'models/select_song.php';
		//Views
		include 'views/songs.php';
		//Pagination
		include 'views/pagination.php';
	break;	
	//Song details
	case 'song_detail':
		//Model
		require 'models/song_detail.php';
		//Views
		include 'views/song_detail_page.php';
		break;
	//About page
	case 'about':
		//Views
		include 'views/about.php';
		break;
	//Featured page
	case 'featured':
		//Model
		require 'models/featured_songs.php';
		//Views
		include 'views/featured.php';
	//Default
	default:
		//Views
		include 'views/home.php';
		break;
}
//Footer
include 'views/footer.php';
?>