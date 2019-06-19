<?php
$host = "host=127.0.0.1";
$port = "port=5432";
$dbname = "dbname=User_info";
$credentials = "user=postgres password=Nickpatne";
$db = pg_connect( "$host $port $dbname $credentials" );
if(!$db){
echo "Error : Unable to open database\n";
}

$email = $_GET['q'];


  if ($email = "all") {
    $query3 = "SELECT * FROM info";
    }else {
    $query3 = "SELECT * FROM info WHERE email='$email'";
 
   }

 


$rs = pg_query($db,$query3) or die("Cannot execute query: $query3\n");
?>
<br><br><br>
<div align="center">
<form name="frm" action="" method="POST">
<table border="0" cellspacing="1 px" cellpadding="21px" rules="">
<tr>

<th>Full Name</th>
<th>Last Name</th>
<th>Email</th>



<th>photo</th>

<th>Address L1</th>
<th>Address L2</th>
<th>City</th>

<th>State</th>
<th>country</th>




</tr>
<?php
 
//TO Display Records in tabular format

while ($row = pg_fetch_row($rs)) {
    echo"<tr>
     <td>".$row[0]."</td>
     <td>".$row[1]."</td>
     <td>".$row[2]."</td>
    
    

     <td><a href='".$row[4]."'><img src='".$row[4]."' height='70' width='70'></a></td>

     <td>".$row[5]."</td>
     <td>".$row[6]."</td>
     <td>".$row[7]."</td>
     <td>".$row[8]."</td>
     <td>".$row[9]."</td>";
   
  ?>
  


<?php
echo"</tr>";
}










?>
</table>
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

transform:scale(3.6);

}
body{
background:url(back2.jpg);
background-size: cover;
}

</style>
</html>