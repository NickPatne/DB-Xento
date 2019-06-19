


<html>
    <head>
        <title>Registration Form</title>
            <link rel="stylesheet" href="Ass6_css.css"/>
    
     </head><br><br>
   
         <h2>Update Your Info</h2>
            
            <div class="loginBox">
          
            <form name="frm" action="validUpdate.php" method="POST"  enctype="multipart/form-data">
            <br>
             <div id="fname_div">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;First Name:</p>
            <input type="text"name="firstname"  id="firstname"   autocomplete="off"  />
            <div id="fname_error"></div>
            </div>

            <p>&nbsp;&nbsp;&nbsp;&nbsp;Last Name:</p>
            <input type="text"name="lastname"  autocomplete="off" />
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:</p>
            <input type="email" name="email" >
            
             
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;passowrd:</p>
            <input type="password"name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at 
          least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
            
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Confirm passowrd:</p>
            <input type="password" name="conpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at 
          least one number and one uppercase and lowercase letter, and at least 8 or more characters"    />


         
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Upload image</p>
            <input type="file" name="uploadfile"  style="background:transparent;
            outline:none;
            height:30px;border:none;width:300px" ><p>
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Address Line1</p>
            <input type="text" name="addr1" />
            
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Address Line2</p>
            <input type="text" name="addr2" />
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;City</p>
            <input type="text" name="city" />
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;State</p>
            <input type="text" name="state" />
            
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Country</p>
            <input type="text" name="country" />
            
            
            <input type="submit"name="submit"value="Sign Up"><br>
            <br><input type="reset" name="reset" value="Clear Form"/>


            </form>
            </div>
            
            </body>
            </html>




    
            