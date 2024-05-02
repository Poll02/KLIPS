<?php

// database details
$host = "localhost";
$username = "root";
$password = "";
$dbname = "klips";



// creating a connection
$con = mysqli_connect($host, $username, $password, $dbname);

if(!$con){
    die("connection failed");
}

//funzioni
function getnGG($id, $con){
    $query = "SELECT sum(nGG)/2 as somma from klip JOIN user ON klip.idutente = '$id' ";
    $result = mysqli_query($con,$query);

    
        while($row = mysqli_fetch_array($result)) {
            return (int)$row['somma']; 
        }
    }

function getnKlips($id, $con){
    $query = "SELECT count(distinct klip.id) as num from user join klip on klip.idutente = '$id' ";
    $result = mysqli_query($con,$query);
    
        while($row = mysqli_fetch_array($result)) {
            return $row['num']; 
        } 
}

function getBio($id, $con){
    $query = "SELECT user.bio as biografia from user where user.id = '$id' ";
    $result = mysqli_query($con,$query);

    while($row = mysqli_fetch_array($result)) {
        return $row['biografia']; 
    }
}

function getKlipsIDs($id, $con){
    $array = [];
    $query = "SELECT distinct klip.id as klipid from klip join user on klip.idutente ='$id' ";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)) {
        $array[] = $row["klipid"];
    }
    return $array;
}

function getKlipsPath($id, $con){
    $query = "SELECT klip.path as nome from klip where klip.id = '$id' ";
    $result = mysqli_query($con,$query);
    if(!$result){return "QUERY FAIL";};
    while($row = mysqli_fetch_array($result)) {
        return $row["nome"];
    }
}

function getnKlipsByGames($con, $game){
    $query = "SELECT count(klip.id) as num from klip where klip.gioco = '$game' ";
    $result = mysqli_query($con,$query);


    while($row = mysqli_fetch_array($result)) {
        return $row["num"];
    }
}


      
    
        



?>