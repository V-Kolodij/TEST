<?php
header('Content-Type: aplication/txt');
header('Content-Disposition: attachment; filename="file.txt"');
readfile('file.txt');
?>