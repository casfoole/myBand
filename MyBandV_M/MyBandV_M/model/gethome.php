<?php

$sql = "SELECT * FROM news ORDER BY id DESC";
$result = $mysqli->query($sql);

$result_list = array();
while($item = $result->fetch_assoc()){
    $result_list[] = $item;}

