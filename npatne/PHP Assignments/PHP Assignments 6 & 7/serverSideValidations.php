<?php

if(empty($firstName)){
    echo"<script>

alert('Firstname Should not be empty');
document.location.href='Registration.php';

</script>";

return false;

}

elseif (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {

echo"<script>

alert('Only letters and white space allowed in First Name');
document.location.href='Registration.php';

</script>";

return false;
}


elseif(empty($lastName)){
 echo"<script>

alert('Last Name Should not be empty');
document.location.href='Registration.php';

</script>";

return false;
}


elseif (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {

echo"<script>

alert('Only letters and white space allowed in Last Name');
document.location.href='Registration.php';

</script>";

return false;
}

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {   //Filter for Email

echo"<script>

alert('Invalid email format');
document.location.href='Registration.php';

</script>";

return false;
}

?>