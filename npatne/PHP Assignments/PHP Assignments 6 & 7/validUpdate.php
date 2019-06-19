<?php
$host = "host=127.0.0.1";
$port = "port=5432";
$dbname = "dbname=User_info";
$credentials = "user=postgres password=Nickpatne";
$db = pg_connect( "$host $port $dbname $credentials" );
if(!$db){
echo "Error : Unable to open database\n";
}


 if($_POST['submit']){
    $firstName=$_POST['firstname'];
    $lastName=$_POST['lastname'];
    $email=$_POST['email'];
     $password=$_POST['password'];   //use md5 for encryption text
    $confirmPassword=$_POST['conpassword'];
    $filename = $_FILES["uploadfile"]["name"];
    $tmpname =  $_FILES["uploadfile"]["tmp_name"];
   $folder = "Images/".$filename;

   move_uploaded_file($tmpname,$folder);

    $addr1=$_POST['addr1']; 
    $addr2=$_POST['addr2'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];

    $updateQuery = "UPDATE info set firstname='$firstName', lastname='$lastName',imgsource='$folder', city='$city', country = '$country'  WHERE email='$email'";
      $result = pg_query($db, $updateQuery) or die("Error in query: $updateQuery." . pg_last_error($db));
      echo "Success"; 

 }
?>