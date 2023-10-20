<?php


$data_source='025EmaanUMS.mssql.somee.com';
$user='zarifsiddiqui_SQLLogin_1';
$password='cthredrpld';
$database="025EmaanUMS";


 

 

$conn = odbc_connect("Driver={SQL Server Native Client 11.0};Server=$data_source;Database=$database;", $user, $password);

if( !$conn ) {
    echo "Connection could not be established.<br />" .$conn ;
} 

?>