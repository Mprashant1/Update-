<?php
    $siteurl="http://localhost/training/php/admin/";
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="admin";
    $c=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
    if($c->connect_error){
        die("Connection failed: ".$c->connect_error);
    }
?>