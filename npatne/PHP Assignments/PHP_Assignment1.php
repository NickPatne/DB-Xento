<html>
<body>
<h2 align="center">Assignment 1</h2>
</body>
</html>
<!-- Start PHP Script -->
<?php
echo"<h3 align='center'> PHP general  information</h3>";

//For General Information
phpinfo( INFO_GENERAL );  // OR phpinfo(1);

//For Configuration Information
echo"<h3 align='center'> PHP Configuration information</h3>";
phpinfo( INFO_CONFIGURATION );  // OR phpinfo(4);

//For Environment Information
echo"<h3 align='center'> PHP Environment information</h3>";
phpinfo( INFO_ENVIRONMENT );    // OR phpinfo(16);

//For Licenced Information
echo"<h3 align='center'> PHP License information</h3>";
phpinfo( INFO_LICENSE );     //OR phpinfo(64);

?>