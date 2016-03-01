<?php
require 'config/config.php';
require 'config/dbconnect.php';
//Head
include "views/head.php";
//Header
include "views/header.php";
//Model voor de aside
require 'models/aside_songs.php';
//Aside
include 'views/aside.php';
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
		//Krijg het pagina nummer
		$page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;
		//Model
		require_once 'models/select_song.php';
		//Views
		include 'views/songs.php';
		//Pagination
		include 'views/pagination.php';
		break;
	//Song details
	case 'song_detail':
		//Model
		require_once 'models/song_detail.php';
		// //Vars
		// $song_id = $songList['id'];
		// $song_title = $songList['song_title'];
		// $album_title = $songList['album_title'];
		// $artist_name = $songList['artist_name'];
		// $audio = $songList['audio'];
		//Views
		include 'views/song_detail_page.php';
		break;
	//About page
	case 'about':
		//Views
		include 'views/about.php';
		break;
	case 'search':
		include 'views/search.html';
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