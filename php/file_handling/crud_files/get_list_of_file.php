<?php
$directoryName = '.';
$items = scandir($directoryName);
$items = array_diff(scandir($directoryName), array('.', '..'));
echo "<h2><b>Your Files List Are: </b></h2>";
foreach ($items as $item) {
    echo "<ul>";
    echo "<li><a href=./$item>$item></a></li>";
    echo "</ul>";
}