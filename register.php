<?php

	include_once("layout/header.php");

   if($_POST){
         $fName = $_POST['fName'];
         $lName = $_POST['lName'];
         $phone = $_POST['phone'];
         $email = $_POST['email'];
         $street = $_POST['street'];
         $postCode = $_POST['postCode'];
         $age = $_POST['age'];
         $password = $_POST['password'];

         $sqlRegister = "INSERT INTO customer (fName, LName, Phone, Email, Street, City, Postal_Code, Age)
                           VALUES ('$fName', '$lName', '$phone', '$email', '$street', '$city', '$postCode', '$age')";

         if($db->query($sqlRegister) === TRUE){
           header('Location: index.php?Action=RegSuccessful');
         }else{
            echo "Error bitches";
         }

         
   }else{
      $fName = "";
      $lName = "";
      $phone = "";
      $email = "";
      $street = "";
      $city = "";
      $postCode = "";
      $age = "";
      $password = "";
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
            <td><label for='age'>Age:</label></td>
            <td><input type='number' min='18' max='100' id='age' name='age' value='$age'></td>
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
            <td><label for='password'>Password:</label></td>
            <td><input type='password' name='password' id='password' value='$password'></td>
         </tr>
         <tr>
            <td><label for='confirmPass'>Confirm Password:</label></td>
            <td><input type='password' name='confirmPass' id='confirmPass'></td>
         </tr>
         <tr>
            <td><label for='street'>Street:</label></td>
            <td><textarea name='street' id='street' rows='4' cols='30'>$street</textarea>
         </tr>
         <tr>
            <td><label for='postCode'>Postal Code:</label></td>
            <td><input type='text' name='postCode' id='postCode' value'$postCode'></td>
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