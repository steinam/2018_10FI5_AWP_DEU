<?php

function imdbMovieTopMovie(){

$timestamp = time();
$uhrzeit = date("H:i",$timestamp);
echo $uhrzeit;

//Bitte die data.tsv mit den Ratings ins root verzeichnis kopieren..

#$inputFile = fopen('data.tsv', 'r') or die("Die Datei will nicht gelesen werden.");;

$inputFile = fopen('title.ratings.tsv', 'r') or die("Die Datei will nicht gelesen werden.");;



$line = fgets($inputFile); // skipping tsv header -> 'don't care
$line = fgets($inputFile); // first line with actual data

$tempRes = substr($line, 0, 9);
$tempMaxRating = substr($line, 10, 10);
$tempMaxUsers = intval(substr($line, 14, strlen($line)-1 ));

while($line){

if(
    (intval(substr($line, 10, 12) > $tempMaxRating)) || 
    (
    (substr($line, 10, 10) == $tempMaxRating) &&
    ( $tempMaxUsers < intval(substr($line, 14, strlen($line) -1 )))
    )
) {
    $tempRes = substr($line, 0, 9);
    $tempMaxRating = substr($line, 10, 10);
    $tempMaxUsers = intval(substr($line, 14, strlen($line) -1));
}

$line = fgets($inputFile);
}


fclose($inputFile);

$timestamp = time();
$uhrzeit = date("H:i",$timestamp);
echo $uhrzeit;

return $tempRes;

}

function getName($imdbId){
    //billiger Trick :-D
return getTitle('https://www.imdb.com/title/' . $imdbId . '/');
    
}

// credits: https://w3guy.com/php-retrieve-web-page-titles-meta-tags/
function getTitle($url) {
    $data = file_get_contents($url);
       $title = preg_match('/<title[^>]*>(.*?)<\/title>/ims', $data, $matches) ? $matches[1] : null;
       return $title;
}


$timestamp = time();
$uhrzeit = date("H:i",$timestamp);
echo $uhrzeit;


//echo getName('tt0059592');

imdbMovieTopMovie();

$timestamp = time();
$uhrzeit = date("H:i",$timestamp);
echo $uhrzeit;


?>