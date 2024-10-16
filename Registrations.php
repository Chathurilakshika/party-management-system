<?php session_start();?> 
<html>
    <head>
        <title>Registration</title>

  <link rel="stylesheet" href="registrationcss.css" type="text/css">

       
    </head>
    <div>  <h1>User <br>Registration</h1></div>
  
<body>
 
  

<div class="registerbox"></div>

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
            window.location="index.html";
         </script>
            ';


    }
    else{
echo'
<script>
   alert("error");
   window.location="Registrations.php";
</script>';
    }

    }

else{
    echo'
    <script>

    alert("Passwords does not match");
    window.location="Registrations.php"
    </script>
    <style>
    ';
}

}
?>

 

</html>

