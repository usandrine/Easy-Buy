<?php
$conn = mysqli_connect('localhost','root','','EASYBUY2');
if(!$conn)
{
    die("failed".mysqli_connnect_error());
}
//create your database
$db="CREATE TABLE seller2 ( 'productname' int(13) primary key AUTO_INCREMENT,productdescription text(34),price int(15),availablequantity varchar(125),category varchar(18),productimage text(40))";
//binding the query on localhost
$result=mysqli_query($conn,$db);
if($result)
{
    echo"Table success";

}
else
{
    echo"backend error->".mysqli_error($conn);
}
