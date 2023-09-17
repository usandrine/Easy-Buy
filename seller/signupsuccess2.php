<?php9
include('sandrineog/sandrineproject/sellertable2/connection2.php');
if(isset($_POST['confirm']))
{
    $productname=$_POST["prodname"];
    $productdescription=$_POST["proddescription"];
    $price=$_POST["price"];
    $availablequantity=$_POST["availableqty"];
    $category=$_POST["category"];
    $productimage=$_POST["prodimage"]
    //insert into database.
    $select="SELECT * FROM seller2 WHERE email='$email'";
    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0)
    {
echo"<script>alert('your email already used')</script>";
    }
    else{
    $insert="INSERT INTO SELLER2 (productname,productdescription,price,availabequantity,category,productimage) VALUES('$productdescription','$productdescription','$price','$availabequantity','$category',$productimage)";

    if(mysqli_query($conn,$insert))
    {
echo"<script>alert('new seller registered')</script>";
header('location:accountlogin.php');
    }
 
    else{
        echo"<script>alert('Your forbidden to register')</script>".mysqli_error($conn);
  
    }
}

}