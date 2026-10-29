<?php
$mysqli = new mysqli("mi-linux.wlv.ac.uk","2465014","7ata9x","db2465014");
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}
?>