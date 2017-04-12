
 <?php
 compileIndex();
 function compileIndex(){
   $url = 'http://localhost:9000/mockup2/index.php';
   $ch = curl_init();
   // tell cURL what the URL is
   curl_setopt($ch, CURLOPT_URL, $url);
   // tell cURL that you want the data back from that URL
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   // run cURL
   $output = curl_exec($ch);
   // end the cURL call (this also cleans up memory so it is
   // important)
   curl_close($ch);
   // display the output
   file_put_contents("index.html", $output);
   echo "<h3>Index is done</h3>";
 }


/* read php files from folders */
$folders = array("layouts", "modules", "patterns");
for ($i = 0; $i < count($folders); $i++) {
	//readFolders($folders[$i]);
  recurseDir($folders[$i]);
  echo "<hr>";
}

function recurseDir($dir) {
  if(is_dir($dir)) {
    if($dh = opendir($dir)){
      while($file = readdir($dh)){
        if($file != '.' && $file != '..'){
          if(is_dir($dir . $file)){
            echo $dir . $file;
            echo "since it is a directory we recurse it.";
            recurseDir($dir . $file . '/');
          }else{
            echo $dir . $file;
            echo "<br/>";
          }
        }
      }
    }
    closedir($dh);
  }
}
// function readFolders($foldername) {
// 	echo "<h3>reading $foldername folder </h3>";
//   // check if has sub folders
//   $files = scandir($foldername);
//   foreach($files as $ff){
//   //  echo "$file";
//    //if($ff != '.' && $ff != '..' && is_dir($ff)){
//       $s = is_dir($ff);
//       echo "$ff $s <br/>";
//       //chdir($file);
//       //loopFiles($file);
//     }
// }

// function loopFiles($folderpath){
//   // stack php files
//   $files = array();
//   $handle = opendir($folderpath . '/');
//   while (false !== ($file = readdir($handle))):
//     if (stristr($file, '.php')):
//       $files[] = $file;
//     endif;
//   endwhile;
//   sort($files);
//   chdir($folderpath);
//   foreach ($files as $file):
//     echo "converting $file <br>";
//     viewSource($folderpath, $file);
//   endforeach;
//   chdir("../");
// }


/* read php files then output html */
function viewSource($folderpath, $page){
  // define the URL to load
  $url = 'http://localhost:9000/mockup2/'. $folderpath . '/' . $page;
  // start cURL
  $ch = curl_init();
  // tell cURL what the URL is
  curl_setopt($ch, CURLOPT_URL, $url);
  // tell cURL that you want the data back from that URL
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  // run cURL
  $output = curl_exec($ch);
  // end the cURL call (this also cleans up memory so it is
  // important)
  curl_close($ch);
  // display the output
  // echo $output;
  $outputfile = str_replace(".php", "", "{$page}.html");
  file_put_contents($outputfile, $output);
}

// function generateStaticPage($foldername, $page) {
// 	ob_start();
// 	$file = (string) $foldername . '/' . $page;
// 	include_once "{$file}";
// 	flushblocks();
// 	$outputfile = str_replace(".php", "", "{$page}.html");
// 	/* output to folders*/
// 	//echo $outputfile;
// 	file_put_contents($outputfile, ob_get_clean());
// }
// echo "<a href='d.php'>Delete all html files</a>";
// ?>
