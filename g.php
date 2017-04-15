
 <?php
 compileIndex();
 function compileIndex(){
   $url = 'http://localhost:9000/concept/index.php';
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
  echo "<ul><li>";
  recurseDir($folders[$i]);
  echo "</li></ul>";
}

function recurseDir($folderpath) {
	echo "<ul><li><b>$folderpath</b></li>";
  // check if has sub folders
  $files = scandir($folderpath);

  foreach($files as $file){
    if($file != '.' && $file != '..'){
      if(is_dir($folderpath . '/' . $file)){
        echo "<li> $file <i>Subfolder</i>";
        $file_path = $folderpath . DIRECTORY_SEPARATOR . $file;
        recurseDir($file_path);
        echo "</li>";
      }else{
        echo "<li>$folderpath -> $file</li>";
        viewSource($folderpath, $file);
      }
    }
  }
  echo "</ul>";
  // chdir("../");
  // echo getcwd();
}


/* read php files then output html */
function viewSource($folderpath, $page){
  chdir($folderpath); // go to the dir
  // define the URL to load
  $url = 'http://localhost:9000/concept/'. $folderpath . '/' . $page;
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
  //echo "$output -> converting";
  $outputfile = str_replace(".php", "", "{$page}.html");
  file_put_contents($outputfile, $output);
  // go back to the right levels
  if (substr_count($folderpath, "/") == 1){
      chdir("../../");
  } else{
      chdir("../");
  }

}
?>
