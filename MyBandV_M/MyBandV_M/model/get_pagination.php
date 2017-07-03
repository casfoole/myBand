<?php
$result_per_page = 3;

$query = "SELECT * FROM news ORDER BY id DESC ";
$result = $mysqli->query($query) or die ('Error querying');
$number_of_result = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_result / $result_per_page);

if(!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$limit_starting_number = ($page - 1) * $result_per_page;
