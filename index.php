<?php

require_once('lib/otphp.php');

?>

 <!DOCTYPE html>
 <html>
 <body>

 <h2>MFA</h2>

 <form action="index.php" method="POST">
   <label for="login">Login: </label><br>
   <input type="text" id="login" name="login" value="Hugo"><br>

   <label for="pw">Password :</label><br>
   <input type="password" id="pw" name="pw" value="Hugo123"><br><br>

   <label for="otp">OTP :</label><br>
   <input type="text" id="otp" name="otp" value=""><br><br>

   <input type="submit" value="Valider">
 </form>

 </body>
 </html>


<?php

 session_start();
   if (isset($_POST["login"]) && isset($_POST["pw"]) && isset($_POST["otp"])) {
     if($_POST["login"] == "Hugo" && $_POST["pw"] == "Hugo123"){
       $decalage = 0; // (en secondes)

       date_default_timezone_set('Europe/Paris');

       $maintenant = time() + $decalage;

       print(date('Y-m-d H:i:s',$maintenant));

       $totp = new \OTPHP\TOTP("NRQXK43FNZQXU===",array('interval'=>30));
       echo $totp->at($maintenant);
       if ($_POST["otp"] == $totp->at($maintenant)) {
         print("connected !");
       }
     }
   }



?>
