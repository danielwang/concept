 <?php
 // $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
 // $lastSegment = basename(parse_url($url, PHP_URL_PATH));
 // $rootfolder = array("index", "index.php");
 // if (in_array($lastSegment, $rootfolder)) {
 // 	$resURL = '';
 // } else {
 // 	$resURL = '../';
// }

 $resURL = getRelativeUrl();

 function getRelativeUrl(){
   $uri = $_SERVER['REQUEST_URI'];
   $path = trim(parse_url($uri, PHP_URL_PATH), '/');
   $level = count(explode('/', $path));
   //var_dump($level); // 2 is index.php

   if($level == 2){
     $resURL = '';
   } elseif ($level == 3) {
     $resURL = '../';
   } elseif ($level == 4) {
     $resURL = '../../';
   }
   return $resURL;
 }


// Reset this to compile large nesting level of less
ini_set('xdebug.max_nesting_level', 500);
//remove old mockup css if it exists, every time refresh page
$cssfile = $resURL .'dist/css/mockup.css';
if (file_exists($cssfile)) {
 unlink($cssfile);
}

//Compile less to output a css file
$lesspath = $resURL . 'build/less/mockup.less';
$csspath = $resURL . 'dist/css/mockup.css';
require "lessc.inc.php";
$less = new lessc;
$less->checkedCompile($lesspath, $csspath);

// Display pages as links from a folder
function listElementsAsOptions($type) {
  $ext = "";
  if ($_SERVER['SERVER_NAME'] == 'localhost') {
   $ext = ".php";
  } else {
   $ext = '.html';
  }
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
    $filepath = $filename . $ext;
  //  echo $filepath;
	  echo '<li><a href="' . $type . '/' . $filepath . '">' . $title . '</a></li>';
	endforeach;
}

?>
