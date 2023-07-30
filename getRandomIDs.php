<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "abangkecil";

$conn = mysqli_connect($servername, $username, $password, $database, "3306");
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$length_article = mysqli_query($conn, "SELECT COUNT(id) FROM article");
$length_hero = mysqli_query($conn, "SELECT COUNT(id) FROM hero");
$length_funfact = mysqli_query($conn, "SELECT COUNT(id) FROM funfact");
$length_gallery = mysqli_query($conn, "SELECT COUNT(id) FROM gallerie");

function getRandomIDs($length, $num_of_item){
    $arr_result = array();
    for ($x = 0; $x < $num_of_item; $x++){
        $temp = rand(1, $length);
        while(in_array($temp, $arr_result)){
            $temp = rand(1, $length);
        }
        array_push($arr_result, $temp);
    }
    return $arr_result;
}
?>