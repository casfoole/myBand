<?php

$query = "SELECT * FROM news ORDER BY id DESC LIMIT $limit_starting_number,$result_per_page";

    $result = $mysqli->query($query) or die ('Error querying');