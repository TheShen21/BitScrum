<?php
require_once "../lib/backend/config.php";

$sql = "SELECT username, cpm FROM users ORDER BY cpm DESC";
$result = $conn->query($sql);
$rank = 1;




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link rel="stylesheet" href="leaderboard.css">
</head>
<body>
<table id="leaderboard">
    <tr>
        <th>Rank</th>
        <th>Username</th>
        <th>Cpm</th>

    </tr>
    <?php
    if (mysqli_num_rows($result)){
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>
              <td>{$rank}</td>
              <td>{$row['username']}</td>
              <td>{$row['cpm']}</td>
              </tr>";

            $rank++;
        }

    }
?>

</table>

</body>
</html>