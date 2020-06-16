<?php
  if (isset($_POST["login"]) && isset($_POST["pw"])) {
    if($_POST["login"] == "Hugo" && $_POST["pw"] == "Hugo123"){
      print("connected !");
    }
  }

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
   <input type="password" id="otp" name="otp" value=""><br><br>

   <input type="submit" value="Valider">
 </form>

 </body>
 </html>
