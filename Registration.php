<?php session_start();?> 


<html>
    <head>
        <title>Registration</title>

  <link rel="stylesheet" href="registrationcss.css" type="text/css">

       
    </head>
    <div>  <h1>User Registration</h1></div>
  
<body>
    <h2>REGISTER WITH US AND GET OUR INFINITY SUPPORT</h2>
  

<div class="whitebox"></div>

<div class="greybox"></div>
<div class="formbox">


<form  target="_blank"  method="POST">
<div>
<label for ="textName">Name</label>
<input id="txtName" name="users" >
</div>
<br>
<br>
<div>
<label for ="Contact">ContactNumber</label>
<input id="Contact" name="usercontact" >
</div>
<br>
<br>
<div>
<label for ="Address">Address</label>
<input id="Adress" name="userAddress" >
</div>

<br>
<br>


<div>
<label>Gender :</h4></label>


<input class="l" value="male" id="gender" type=radio name="genders" value="male">
<label class="o" for="male" required>Male</label>


<input class="h" id="gender" type=radio name="genders" value="female">
<label class="n" for="female" required>Female</label>
<br>
<br>

</div>
<br>
<br>
<label for="pwdpass">CreatePassword</label>
<input type=password id="pwdpass"  name="userpassword">
<br>
<br>
<div>
<br>
<br>
<label for="pwdpass">ConfirmPassword</label>
<input type=password id="pwdpass"  name="passwords">
<br>
<br>


<div class="subbutton">
<input type=submit name="submits" class="p" >
</div>
<div class="resetbutton">
<input type=reset  class="p">

</div>
</form>

<div class="googlebutton">
    <input type="button" name="google" class="google" value="Continue with google"></div>
</div>

<div class="facebookbutton">
    <input type="button" name="google" class="google" value="Continue with facebook"></div>
</div>
<div class="applebutton">
    <input type="button" name="google" class="google" value="Continue with Apple"></div>
</div>

</body>


   
<?php 
include('db.php');
if(isset($_POST['submits']))

{

    $uname=$_POST['users'];
    $contact=$_POST['usercontact'];
    $Address=$_POST['userAddress'];
    $gender=$_POST['genders'];
    $createPassword=$_POST['userpassword'];
    $confirmPassword=$_POST['passwords'];

    if($createPassword==$confirmPassword){

    $query ="INSERT INTO `userregistration` (UserName, ContactNo, Addresses, Gender, CreatePassword, ConfirmPassword) 
    VALUES ('$uname',  $contact, '$Address',  '$gender', ' $createPassword', '$confirmPassword');";
   
    $result=mysqli_query($con,$query);



    if($result)
    {
   
        echo'
        <script>
            alert("Registered Successfully");
            window.location="index1.php";
         </script>
            ';


    }
    else{
echo'
<script>
   alert("error");
   window.location="Registration.php";
</script>';
    }

    }

else{
    echo'
    <script>

    alert("Passwords does not match");
    window.location="logins.php"
    </script>
    <style>
    ';
}

}
?>

</html>

