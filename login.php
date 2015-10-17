<?php
session_start();

include_once("layout/header.php");

if($_POST){
   $email = $_POST['email'];
   $password = $_POST['password'];

   $sqlLogin = "SELECT * FROM customer WHERE Email = $email";

   if($rstLogin = $db->query($sqlLogin)){
      $row = $rstLogin->fetch_assoc();

      //Password in DB compared to Password given
      if($row['LName'] == $password){
         $_SESSION['Username'] = $row['FName'];
         print_r($_SESSION);
         die;
         header('Location: index.php?Action=RegSuccessful');
      }
   }else{
      echo "No such email exists";
   }

   header('Location: index.php?Action=LoginSuccessful');
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