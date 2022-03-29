<?php 
include("includes/includedFiles.php"); 
?>

<h1 class="pageHeadingBig">These Are Similar</h1>
<div class="gridViewContainer">
<?php
$albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 10");


while ($row = mysqli_fetch_array($albumQuery)) {

    echo "<div class='gridViewItem'>
    <span role='link' tableIndex='0' onclick='openPage(\"album.php?id=" . $row['id'] . "\")' >
    <img src='" . $row['artworkPath'] . "'>
    <div class='gridViewInfo'>"
    . $row['title'] .
    "</div>
    </span>
    </div>";
}

// echo "<pre>";
// var_dump($con);
// echo "</pre>";
?>

</div>
