<?php 
	// get canonical url
	$canonical_url_building = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	
	// Identify URL and set values
	switch($_SERVER['PHP_SELF']){
		case '/webapps/members/index.php':
			$title = 'Natalia Hot Teen';
			$keywords = '';
			$body_class = 'view-index';
			$identifier = 'index';
			$description = '';
			$canonical_url = $canonical_url_building;
			break;

		case '/webapps/members/models-wanted.php':
			$title = 'Models Wanted';
			$keywords = '';
			$body_class = 'view-models-wanted';
			$identifier = 'modelswanted';
			$description = '';
			$canonical_url = $canonical_url_building;
			break;

		default:
			$title = '';
			$keywords = '';
			$body_class = 'view-index';
			$identifier = 'index';
			$description = '';
			$canonical_url = $canonical_url_building;
	}


	// Urls
	$url_index = 'index.php';
	$url_members = 'members.php';
	$url_modelswanted = 'models-wanted.php';


	// navbar config
	require_once 'config-navbar.php';

	// index config
	require_once 'config-index.php';

	// footer config
	require_once 'config-footer.php';
?>