<?php 
// @author p4nth3r-5237

$fileName=$_GET['file'];
$command = "cat ".$fileName;
$output = system($command);
?>
