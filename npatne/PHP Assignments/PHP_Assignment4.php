<style>
body{
font-size:30px;
text-align:center;
}
</style>
<?php
    $text = 'Nikhil Patne';
      echo'<b><i>Original Text:</i><b>' .$text;
        echo"<br><br>";

      //replacing the properties of the first character of word(Here color)
      $text = preg_replace('/(\b[a-z])/i','<span style="color:red;font-size:40px;">\1</span>',$text);

      echo'<b><i>Modified Text:</i><b>' .$text; 
  
  ?> 