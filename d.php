<?php

$folders = array("layouts", "modules", "patterns");
for ($i = 0; $i < count($folders); $i++) {
	readFolders($folders[$i]);
}

function readFolders($foldername) {
	echo "reading $foldername folder <br>";
	$files = array();
	$handle = opendir($foldername . '/');
	while (false !== ($file = readdir($handle))):
		if (stristr($file, '.html')):
			$files[] = $file;
		endif;
	endwhile;
	sort($files);
	chdir($foldername);
	foreach ($files as $file):
		echo "deleting $file <br>";
		unlink($file);
	endforeach;
	chdir("../");
}
echo "<a href='g.php'>Generate</a>";
?>