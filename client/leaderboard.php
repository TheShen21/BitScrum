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