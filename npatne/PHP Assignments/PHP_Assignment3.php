<style>
body{
text-align:center;
font-size:40px;
}
</style>
<?php
function getUserIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
           }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
               //ip pass from proxy
               $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
           }else{
               $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
    
}

echo '<h3>User IP Address is' .getUserIp(). '</h3>';


//Browser info
$browserName =  $_SERVER['HTTP_USER_AGENT'];

//PHP script to match Browser name in above string
  if(preg_match('/Trident/i' ,$browserName) || preg_match('/MSIE/i' ,$browserName)) {
    $m_browserName = 'Internet Explorer';
    } elseif(preg_match('/Firefox/i' ,$browserName)) {
    $m_browserName = 'Mozilla Firefox';
      } elseif(preg_match('/Edge/i' ,$browserName)) {
    $m_browserName = 'Microsoft Edge';
        } elseif(preg_match('/OPR/i' ,$browserName)) {
    $m_browserName = 'Opera';
          } elseif(preg_match('/Chrome/i' ,$browserName)) {
    $m_browserName = 'Google Chrome';
            } elseif(preg_match('/Safari/i' ,$browserName)) {
                 $m_browserName = 'Apple Safari';
   }
  echo "Welcome to <strong><i><font size='6' color='red'>$m_browserName</font></i></strong> Browser.";
?>

