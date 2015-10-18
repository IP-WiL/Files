<html>
<head>
<link rel="stylesheet" type="text/css" href="css/login.css"/>
</head>
<?php

include_once("layout/header.php");

if($_POST){
   $email = $_POST['email'];
   $password = $_POST['password'];

   $sqlLogin = "SELECT * FROM customer WHERE Email = '$email'";

   if($rstLogin = $db->query($sqlLogin)){
      $row = $rstLogin->fetch_assoc();

      //Password in DB compared to Password given
      if($row['Password'] == $password){      
         $id = $row['Customer_Id'];
         header("Location: index.php?Action=LoginSuccessful&id=$id");
      }
   }else{
      echo "No such email exists";
   }

}else{
   $email = "";
   $password = "";
}

$strHTML = "<h2>Welcome to Vision, please log in below</h2>
	<form action='' method='post'>
      <table id='loginTbl'>
         <tr>
            <td><label for='email'>Email:</td>
            <td><input type='email' name='email' id='email' value='$email'></td>
         </tr>
         <tr>
            <td><label for='password'>Password:</td>
            <td><input type='password' name='password' id='password' value='$password'></td>
         </tr>
         <tr>
            <td><button type='rest' name='rest'>Reset</button></td>
            <td><input type='submit' name='submit' id='submit' value='Submit'></td>
      </table>
   </form>";

echo $strHTML;

include_once("layout/footer.php");


?>
</html>