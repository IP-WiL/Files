<?php

	include_once("layout/header.php");

   if($_POST){
         $fName = $_POST['fName'];
         $lName = $_POST['lName'];
         $phone = $_POST['phone'];
         $email = $_POST['email'];
         $street = $_POST['street'];

         header('Location: index.php?ACTION=Successful');
   }else{
      $fName = "";
      $lName = "";
      $phone = "";
      $email = "";
      $street = "";
      $city = "";
      $postCode = "";
      $age = "";
   }

	$strHTML = "
   	<h2>Welcome! Please fill in the fields below to sign up!</h2>
   	<form action='' method='post'>
   	<table id='registerForm'>
         <tr>
            <td><label for='fName'>Name:</label></td>
            <td><input type='text' name='fName' id='fName' value='$fName'></td>
         </tr>
         <tr>
            <td><label for='lName'>Surname:</label></td>
            <td><input type='text' name='lName' id='lName' value='$lName'></td>
         </tr>
         <tr>
            <td><label for='phone'>Phone:</label></td>
            <td><input type='text' name='phone' id='phone' value='$phone'></td>
         </tr>
         <tr>
            <td><label for='email'>Email:</label></td>
            <td><input type='email' name='email' id='email' value='$email'></td>
         </tr>
         <tr>
            <td><label for='street'>Street:</label></td>
            <td><textarea name='street' id='street' rows='4' cols='30'>$street</textarea>
         </tr>
         <tr>
            <td>City:</td>
            <td><select>
               <option value='capetown'>Cape Town</option>
               <option value='johannesburg'>Johannesburg</option>
               <option value='pe'>Port Elizabeth</option>
               <option value='durban'>Durban</option>
               </select>
            </td>
         </tr>
         <tr>
            <td><button type='reset'>Reset</button></td>
            <td><input name='submit' type='submit' value='Submit'></td>
         </tr>
      </table>
   	</form>
   	";

   echo $strHTML;

   include_once("layout/footer.php");

?>