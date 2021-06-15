<?php

require_once "../lib/backend/config.php";

$random = rand(1,2);

$query = "select code from javascript where id=?";
// $result = $link->query($query);

$stmt = $link->prepare($query);
$stmt->bind_param("i", $random);

$stmt->execute();

$result = $stmt->get_result();

foreach ($result as $row) {
    echo $row["code"];
}




?>