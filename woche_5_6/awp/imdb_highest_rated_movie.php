<?php

//https://likegeeks.com/process-large-files-using-php/

ini_set('max_execution_time', 300);
// braucht ca 2 1/2 Minuten
ini_set('memory_limit', 2048);

function getHighestRatedMovie() :array {
  
  $highestRatedMovie = array(
    'id' => '',
    'rating' => '',
    'numVotes' => '',
  );
  $highestRating = 0;
  $id = "";
  $numVotes = "";
  $delimiter = "\t";
  $tsvFile = fopen('./title.ratings.tsv', 'r');  // Pfad zur tsv Datei

  while ( !feof($tsvFile) ) {
    $line = fgets($tsvFile, 2048);
    $data = str_getcsv($line, $delimiter);
    if ($data[0] != 'tconst') {
      $rating = isset($data[1]) ? $data[1] : null;
      $newNumVotes = isset($data[2]) ? $data[2] : null;
      if ($rating > $highestRating) {
        $id = $data[0];
        $highestRating = $data[1];
        $numVotes = $data[2];
      } else if ($rating == $highestRating && $numVotes < $newNumVotes) {
        $id = $data[0];
        $highestRating = $data[1];
        $numVotes = $data[2];
      }
    }
  }           

  $highestRatedMovie['id'] = $id;
  $highestRatedMovie['rating'] = $highestRating;
  $highestRatedMovie['numVotes'] = $numVotes;

  fclose($tsvFile);

  return $highestRatedMovie;
}


function getHighestRatedMovieName() {

  $movieRatings = getHighestRatedMovie();

  $returnMovie = array(
    'id' => '',
    'rating' => '',
    'title' => '',
    'numVotes' => '',
  );

  $delimiter = "\t";

  $tsvFile = fopen('./title.basics.tsv', 'r'); // Pfad zur tsv Datei

  while ( !feof($tsvFile) ) {
    $line = fgets($tsvFile, 2048);

    $data = str_getcsv($line, $delimiter);

    if (is_numeric(intval($data[0]))) {
      if ($data[0] == $movieRatings['id']) {
        $returnMovie['id'] = $movieRatings['id'];
        $returnMovie['rating'] = $movieRatings['rating'];
        $returnMovie['title'] = $data[2];
        $returnMovie['numVotes'] = $movieRatings['numVotes'];
        return $returnMovie;
      }
    }
  }      

}

$timestamp = time();
$uhrzeit = date("H:i",$timestamp);
echo $uhrzeit;

$bestRatedMovie = getHighestRatedMovieName();

$timestamp = time();
$uhrzeit = date("H:i",$timestamp);
echo $uhrzeit;

var_dump($bestRatedMovie);

echo('ID: ' . $bestRatedMovie['id'] . '<br>');
echo('Rating: ' . $bestRatedMovie['rating'] . '<br>');
echo('Title: ' . $bestRatedMovie['title'] . '<br>');
echo('Number of votes: ' . $bestRatedMovie['numVotes'] . '<br>');

?>