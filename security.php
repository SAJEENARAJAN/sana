<?php
session_start();
include('database/dbconfi.php');

if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: database/dbconfi.php");
}
?>
