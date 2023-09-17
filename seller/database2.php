<?php
$conn = mysqli_connect('localhost','root','','');
if(!$conn)
{
    die("failed".mysqli_connnect_error());
}
//create your database
$db="CREATE DATABASE EASYBUY2";
//binding the query on localhost
$result=mysqli_query($conn,$db);
if($result)
{
    echo"Database success";

}
else
{
    echo"backend error->".mysqli_error($conn);
}
