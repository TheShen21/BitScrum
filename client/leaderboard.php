<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php
require_once "../lib/backend/connection.php";

$sql = "SELECT username, cpm FROM users ORDER BY cpm DESC";
$result = $link->query($sql);
$rank = 1;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link rel="stylesheet" href="styles/leaderboard.css">
</head>
<body>
<!--menu-->
<header><a href="index.php"><img id="logo" src="img/logo.svg"></a>
        <div class="user">

        </div>
        </header>

    <ul class="menu">
        <li><a  href="../TypeRacer/typeracer.html"><img src="img/logo_yellow.png">Play Game</a></li>

        <li><a href="about.php"><img src="img/info_yellow.png"><p class="left-margin">About</p></a></li>

        <li><a href="#"><img src="img/leaderboard_yellow.png"><p class="left-margin">Leaderboard</p></a></li>

       <li class="user"><a href="settings.php"><img id="user-icon" src="img/user_yellow.png" alt=""></a></li>

        <li class="user"> <p class="bottom-margin"><?php echo htmlspecialchars($_SESSION["username"]); ?></p></li>
        </ul>

<!--leaderboard-->
<table id="leaderboard">
    <tr id = "head">
        <th>Rank</th>
        <th>Username</th>
        <th>Cpm</th>

    </tr>
    <?php
    if (mysqli_num_rows($result)){
        while ($row = mysqli_fetch_assoc($result)){
            if($rank === 1){
            echo "<tr id='first_row'>
                <td id='first'>{$rank}</td>
                <td>{$row['username']}</td>
                <td>{$row['cpm']}</td>
            </tr>";
            } else {
            echo "<tr>
            <td>{$rank}</td>
            <td>{$row['username']}</td>
            <td>{$row['cpm']}</td>
            </tr>";    
            }
            $rank++;
        }

    }
?> 
              
</table>

</body>
</html>