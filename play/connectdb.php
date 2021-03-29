<?php
$dbhost = 'localhost';
$dbuser =  'root';
$dbpass = '';
$dbname = 'codephp62';


$myConn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($myConn->connect_errno) {
    printf("Connect failed: %s\n", $myConn->connect_error);
    exit();
}