<?php
require_once "../lib/backend/connection.php";

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
elseif(!isset($_POST["score"])){
    echo "nope";
    exit;
}
$user = $_SESSION["username"];
$sql = "select cpm from users where username = '$user'";
$result = mysqli_query($link, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $cpm = $row['cpm'];
    }
}
$new_cpm = $_POST["score"];
echo $new_cpm;

if($new_cpm > $cpm){

    $mysql = "update users set cpm = '$new_cpm' where username = '$user';";
    mysqli_query($link,$mysql);

}

$link->close();
?>