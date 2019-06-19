<?php
class CDisplayUser{
    function displayUserRecord(){
$host = "host=127.0.0.1";
$port = "port=5432";
$dbname = "dbname=User_info";
$credentials = "user=postgres password=Nickpatne";
$db = pg_connect( "$host $port $dbname $credentials" );
if(!$db){
echo "Error : Unable to open database\n";
}

if($_POST['submit']){
    $delRecord = $_POST['keyToDelete'];
     $delQuery = pg_query("DELETE FROM info where email='$delRecord'");
   

}



$query3 = "SELECT * FROM info"; 
$rs = pg_query($db,$query3) or die("Cannot execute query: $query3\n");





?>
<div align="center">
<br>
<br>
<br>
<br>
<br>
<form name="frm" action="" method="POST">
<table border="0" cellspacing="1 px" cellpadding="21px" rules="">
<tr>

<th>First Name</th>
<th>Last Name</th>
<th>Email</th>

<th>photo</th>

<th>Address L1</th>
<th>Address L2</th>
<th>City</th>

<th>State</th>
<th>country</th>



<th>Select </th>
<th>Delete??</th>



</tr>
<?php
 
//TO Display Records in tabular format

while ($row = pg_fetch_assoc($rs)) {
    echo"<tr>
     <td>".$row['firstname']."</td>
     <td>".$row['lastname']."</td>
     <td>".$row['email']."</td>
    
  

     <td><a href='".$row['imgsource']."'><img src='".$row['imgsource']."' height='70' width='70'></a></td>

     <td>".$row['addressLine1']."</td>
     <td>".$row['addressLine2']."</td>
     <td>".$row['city']."</td>
     <td>".$row['state']."</td>
     <td>".$row['country']."</td>";
  ?>

<td><input type='checkbox' name='keyToDelete' value= "<?php  echo $row['email']?>"></td>

<td><input type='submit' name='submit' value='Delete'></td>

<?php
echo"</tr>";
}


?>

</form>



<html>
<style>


td{
    color:white;
    font-size:19px;

    text-align:center;
}
table{

    border:3px solid black;
}

th{

  background-color: #4CAF50;
  color: white;

}

tr:hover{
    background-color:gray;
    transform:scale(1.03);
    transition: transform .6s  ease-in
}

img{

    transition: transform .9s  ease-in
    
}

img:hover{

transform:scale(4);

}
body{
background:url(back2.jpg);
background-size: cover;
}

</style>
</html>
<?php

    }
}
?>



       