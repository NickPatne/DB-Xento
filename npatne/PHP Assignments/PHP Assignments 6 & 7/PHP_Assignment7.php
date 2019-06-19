<!DOCTYPE html>
<html>
<head>
   <title>View Users</title>
   <style>
body{

background:url(back2.jpg);
background-size: cover;

}
</style>

<script>
//Ajax Code to Display Record Without posting a form 
function getUser(str) {
   if (str == "") {
      document.getElementById("displayUser").innerHTML="";
      return;
   }else{

      //Create object of XMLHttpRequest()
      httpR = new XMLHttpRequest(); 
      httpR.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
            document.getElementById("displayUser").innerHTML=this.responseText;
         }
      };

      //Get Query string from data.php
      httpR.open("GET","data.php?q="+str,true);
      httpR.send();
   }
}
</script>
<style>
select{
width:300px;
height:45px;
background-color:black;
color:white;
font-size:20px;
margin-left:600px;
margin-top:80px;
padding:10px;
cursor:pointer;
}

select:hover{
   background-color:gray;
}

 .DeleteButton button{
width:200px;
height:40px;
background-color:black;
color:white;
font-size:20px;
margin-left:1200px;
margin-top:60px;
cursor:pointer;
border-radius:20px;
}

.DeleteButton button:hover{
   background-color:gray;
   color:yellow;
}


.UpdateButton button{

width:200px;
height:40px;
background-color:black;
color:white;
font-size:20px;
margin-left:100px;
margin-top:-25px;
cursor:pointer;
border-radius:20px;
}

.UpdateButton button:hover{
   background-color:gray;
   color:yellow;
}
h1{
   text-align:center;
   color:white;
   font-size:50px;


}
</style>
</head>

<body>
   <div class="DeleteButton">
      <a href="Display.php">
         <button>Delete User</button></a>
   </div>



   <div class="UpdateButton">
      <a href="UpdateRecord.php">
         <button>Update info</button></a>
   </div>



   <h1>User Records</h1>
   <select name="user" onchange="getUser(this.value)">
      <option value="">Select User</option>
      <option value="all">All Records</option>

   <?php
   $host = "host=127.0.0.1";
   $port = "port=5432";
   $dbname = "dbname=User_info";
   $credentials = "user=postgres password=Nickpatne";
   $db = pg_connect( "$host $port $dbname $credentials" );

   $users = pg_query("SELECT * FROM info");
   while ($u = pg_fetch_row($users)) {
   ?>
 
   <option value="<?php echo $u[2] ?>"> <?php echo $u[2] ?> </option>
   <?php
   }
   ?>
   </select>
</form>
   <div id="displayUser"></div>
</body>
</html>