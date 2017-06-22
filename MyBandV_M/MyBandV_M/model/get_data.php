<?php
$query = "SELECT * FROM news ORDER BY id DESC 
          LIMIT $limit starting number,$result_per_page";

    $result = mysqli_query($dbc,$query) or die ('Error querting');