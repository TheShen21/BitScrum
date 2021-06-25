<?php

require_once "../lib/backend/connection.php";

$query_id = "select count(*) from javascript";

$stmt = $link->prepare($query_id);

$stmt->execute();
$result = $stmt->get_result();
foreach ($result as $row) {
    $random = rand(1, $row["count(*)"]);
}



$query = "select code from javascript where id=?";
// $result = $link->query($query);

$stmt = $link->prepare($query);
$stmt->bind_param("i", $random);

$stmt->execute();

$result = $stmt->get_result();

foreach ($result as $row) {
    $rng = $row["code"];
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>random</title>
</head>
<body>
    <div><?php echo "<h2>$rng</h2>";?></div>
</body>
</html>
