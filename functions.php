 <?php
// Reset this to compile large nesting level of less
ini_set('xdebug.max_nesting_level', 500);
// remove old mockup css if it exists, every time refresh page
// $cssfile = 'dist/css/mockup.css';
// if (file_exists($cssfile)) {
//  unlink($cssfile);
// }

//Compile less to output a css file
// require "lessc.inc.php";
// $less = new lessc;
// $less->checkedCompile("build/less/mockup.less", "dist/css/mockup.css");


$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$lastSegment = basename(parse_url($url, PHP_URL_PATH));
$rootfolder = array("index", "index.php");
if (in_array($lastSegment, $rootfolder)) {
	$resURL = '';
} else {
	$resURL = '../';
}


// Display pages as links from a folder
function listElementsAsOptions($type) {
	$files = array();
	$handle = opendir($type . '/');
	while (false !== ($file = readdir($handle))):
		if (stristr($file, '.php')):
			$files[] = $file;
		endif;
	endwhile;
	sort($files);
	foreach ($files as $file):
		$filename = preg_replace("/\.php$/i", "", $file);
		$title = preg_replace("/\-/i", " ", $filename);
		$title = ucwords($title);
		echo '<li><a href="' . $type . '/' . $filename . '">' . $title . '</a></li>';
	endforeach;
}

?>
