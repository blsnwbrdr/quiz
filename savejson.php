<?php
$scores = json_decode(file_get_contents("scores.json"));
$data = json_decode($_GET["data"]);
array_push($scores,$data);
file_put_contents("scores.json", json_encode($scores))



//$myFile = "scores.json";
//$fh = fopen($myFile, 'r') or die("can't open file");
//$current_scores = fread($myFile,filesize("scores.json"));
//$array = json_decode($current_scores);
//$array = array($decode);
//fclose($myFile);
//$data = $_GET["data"];
//array_push($array,$data);
//echo json_encode($array);
?>