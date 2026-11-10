<?php

require "db.php";

$sql = "SELECT * FROM `aircraft`";

$response = $conn->query($sql);

$aircraft = $response->fetch_all();

echo (json_encode($aircraft));