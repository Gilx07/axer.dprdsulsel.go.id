<?php

// Set the file path on the server
$file = 'main/1.zip';

// Set the headers for the response
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Content-Length: ' . filesize($file));

// Read the file and output it to the user's device
readfile($file);

?>