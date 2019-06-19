<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

?>

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
     $password=md5($_POST['password']);   //use md5 for encryption of password
    $confirmPassword=md5($_POST['conpassword']);

   
    if( $password != $confirmPassword ) {
        
        echo"<script>
         alert( 'Password not matched' );
      
        </script>";
        return false;

        echo"<script>
        documnet.location.href='Registration.php';

        </script>";
       
     }

            

    $filename = $_FILES["uploadfile"]["name"];
    $tmpname =  $_FILES["uploadfile"]["tmp_name"];
    $folder = "Images/".$filename;

    move_uploaded_file($tmpname,$folder);

    $addr1=$_POST['addr1'];
    $addr2=$_POST['addr2'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];

   

    //Added Server Side Validations For Mandatory Fields
//include'serverSideValidations.php';




        $myfolder = 'Registration Details';

        //mkdir()  is used to create folder in PHP

            if(!file_exists($myfolder)){
                mkdir($myfolder);
                         mkdir("$myfolder/$firstName $lastName");
    
            }

            else{

                    mkdir("$myfolder/$firstName $lastName");
                }

            }


    
    //For Creating  text file taking input seprately
$file_fname="Your First Name is : " .$_POST['firstname']. "\n";
$file_lname="Your Last Name is : " .$_POST['lastname']. "\n";
$file_email="Email: " .$_POST['email']. "\n";
$file_password="Password: " .$_POST['password']. "\n";
$file_addr="Your Address is : " .$_POST['addr1']. " " .$_POST['addr2']. "\n";
$file_city="Your City is : " .$_POST['city']. "\n";
$file_state="Your state is : " .$_POST['state']. "\n";
$file_country="Your Country is : " .$_POST['country']. "\n";

//Assigning Name to the text file
 $file_label = $_POST['firstname']. " " .$_POST['lastname'];



//Create textfile and stored in folder
$textfile = fopen("./$myfolder/$firstName $lastName/" . "$file_label.txt","w"); 


//Written contents in file
fwrite($textfile,"Hello ".$firstName);
fwrite($textfile,"\n\n\n");

fwrite($textfile,"Your Credentials are");
fwrite($textfile,"\n\n");


fwrite($textfile,$file_email);
fwrite($textfile,$file_password);

fwrite($textfile,"\n\n\n");
fwrite($textfile,"Other Infornation");
fwrite($textfile,"\n\n");

fwrite($textfile,$file_fname);
fwrite($textfile,$file_lname);

fwrite($textfile,$file_addr);
fwrite($textfile,$file_city);
fwrite($textfile,$file_state);
fwrite($textfile,$file_country);

 //closing  the file
fclose($textfile); 


//Query  to insert a values into database
/* $query = "INSERT INTO info VALUES ('$firstName','$lastName','$email','$password','$folder','$addr1','$addr2','$city','$state','$country')";
$result2 = pg_query($query); */ 

include 'CInsertRecords.php';


//Created Object For Inserting Data
$insert = new CInsertRecord;
$insert->insertRecords($firstName,$lastName,$email,$password,$folder,$addr1,$addr2,$city,$state,$country);











//========================================================================================================================


 

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


//Load Composer's autoloader
 require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'nikhilpatne94@gmail.com';                 // SMTP username
    $mail->Password = '9766189990';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('nikhilpatne94@gmail.com', 'Nikhil Patne');
    $mail->addAddress($email);               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

        
    $textFileDirectory ='C:/xampp/htdocs/SVPM-Baramati/npatne/PHP Assignments/PHP Assignments 6 & 7/Registration Details/' . "$file_label/";

    //Attachments
     $mail->addAttachment("$textFileDirectory"."$file_label.txt");         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your Registration Details';
    $mail->Body    = 'We Sent here your all registration details with text file';
   // $mail->AltBody = 'how are you';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
} 
 









//=============================================================================================================




?>

<script>
alert("Data Inserted Successfully");
document.location.href='Registration.php';
</script>



