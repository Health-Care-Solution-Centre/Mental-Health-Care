<?php

$SERVERNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DB="mentalhealth";
$conn= mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DB);
if(!$conn)
{
echo 'Not connected';
}
if(!mysqli_select_db($conn,$DB))
{
echo 'Database not selected';
}
?>