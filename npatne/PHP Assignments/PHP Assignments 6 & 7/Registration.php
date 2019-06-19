<html>
    <head>
        <title>Registration Form</title>
            <link rel="stylesheet" href="Ass6_css.css"/>
    
     </head><br><br>
   
         <h2>New Applicant Registration:</h2>
            
            <div class="loginBox">
          
            <form name="frm" action="PHP_Assignment6.php" method="POST"  onsubmit=" return validateForm()" enctype="multipart/form-data">
            <br>
            
          
            <p>&nbsp;&nbsp;&nbsp;&nbsp;First Name:</p>
              <!-- Input Field For first name --><input type="text"name="firstname"  id="firstname"    required/>
            
            
              <!-- Input Field For Last name -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Last Name:</p>
            <input type="text"name="lastname"  required/>

              <!-- Input Field For Email -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:</p>
            <input type="email" name="email" required>
            
             
              <!-- Input Field For Password -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;passowrd:</p>
            <input type="password"name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at 
            least one number and one uppercase and lowercase letter, and at least 8 or more characters"required/>
            
              <!-- Input Field For Password Confirmation -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Confirm passowrd:</p>
            <input type="password" name="conpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at 
            least one number and one uppercase and lowercase letter, and at least 8 or more characters"    required/>


         
              <!-- Input Field For Uploading Image -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Upload image</p>
            <input type="file" name="uploadfile"  style="background:transparent; height:30px;width:300px" required><p>
            
              <!-- Input Field For Address Line1 -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Address Line1</p>
            <input type="text" name="addr1" required/>
            
              <!-- Input Field For Address Line2 -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Address Line2</p>
            <input type="text" name="addr2" required/>

              <!-- Input Field For City -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;City</p>
            <input type="text" name="city" required/>
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;State</p>
            <input type="text" name="state" required/>
            
              <!-- Input Field For Country -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Country</p>
            <input type="text" name="country" required/>
            
            
            <input type="submit"name="submit"value="Sign Up"><br>
            <br><input type="reset" name="reset" value="Clear Form"/>


            </form>
            </div>
            
            </body>
            </html>




    
            