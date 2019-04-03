<?php


ini_set('max_execution_time', 60);
//Laufzeit ca 30 Sekunden
ini_set('memory_limit', 2048);


$highestRating = "0";
$numVotes = "0";
$id = "";
$highestRatedMovie = array(
      'id' => "",
      'rating' => "",
      'numVotes' => "",
      'name' => "",
    );

function file_get_contents_chunked($file,$chunk_size,$callback) {
    try {
        $handle = fopen($file, "r");
        $i = 0;
        while (!feof($handle)) {
            call_user_func_array($callback,array(fread($handle,$chunk_size),&$handle,$i));
            $i++;
        }
        fclose($handle);
    }
    catch(Exception $e) {
         trigger_error("file_get_contents_chunked::" . $e->getMessage(),E_USER_NOTICE);
         return false;
    }
    return true;
}

function compareMovies($temp) {
  global $highestRating;
  global $numVotes;
  global $id;
  if ($temp[0] != 'tconst' && count($temp) > 2) {
    $rating = isset($temp[1]) ? $temp[1] : null;
    $newNumVotes = isset($temp[2]) ? $temp[2] : null;
    if ($rating > $highestRating) {
      $id = $temp[0];
      $highestRating = $temp[1];
      $numVotes = $temp[2];
    } else if ($rating == $highestRating && $numVotes < $newNumVotes) {
      $id = $temp[0];
      $highestRating = $temp[1];
      $numVotes = $temp[2];
    }
  }
}

function getName($movie) {
  global $highestRatedMovie;
  global $highestRating;
  global $numVotes;
  global $id;
  if ($movie[0] == $id) {
    $highestRatedMovie['id'] = $id;
    $highestRatedMovie['rating'] = $highestRating;
    $highestRatedMovie['numVotes'] = $numVotes;
    $highestRatedMovie['name'] = $movie[2];
  }
}

$timestamp = time();
$uhrzeit = date("H:i",$timestamp);
echo $uhrzeit;

file_get_contents_chunked("./title.ratings.tsv",4096,function($chunk,&$handle,$iteration){
  $arrayOfStrings = preg_split('/\r\n|\r|\n/', $chunk);
  foreach($arrayOfStrings as $line) {
    $temp = preg_split('/[\t]/', $line);
    compareMovies($temp);
  }
});

file_get_contents_chunked("./title.basics.tsv",4096,function($chunk,&$handle,$iteration){
  $arrayOfStrings = preg_split('/\r\n|\r|\n/', $chunk);
  foreach($arrayOfStrings as $line) {
    $temp = preg_split('/[\t]/', $line);
    getName($temp);
  }
});

$timestamp = time();
$uhrzeit = date("H:i",$timestamp);
echo $uhrzeit;

var_dump($highestRatedMovie);

?>