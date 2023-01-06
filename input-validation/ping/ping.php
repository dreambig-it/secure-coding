<?php
    $targetIP = $_GET[ 'ip' ];
    $cmd = "ping -c 1 ".$targetIP;
    echo exec( $cmd);
?>