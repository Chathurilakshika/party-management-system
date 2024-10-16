<?php session_start();?> 
<html>
<head><title>Administration</title>
<link rel="stylesheet" type="text/css" href="administration.css">
<div class="adminlabel">
    <h1>ADMINISTRATION</h1>
</div>

</head>

<body>
 <div class="ADDBOX">
       
		   <div class="button-box">
   <div id="twobuttons"></div>
<button name='add' class="buton" type="button" id="adminbutton" onclick="ADDslide()">Add user</button>

<button name='update' class="buton" id="updatebutton" type="button" onclick="UPDATEslide()">Update user</button>

<button name='delete' class="buton" id="deletebutton" type="button" onclick="DELETEslide()">Delete user</button>

   </div>
   
	  <form method="POST" onsubmit="add()" id="userForm">
    <h2>ADD USER</h2>
   

  
        <div class="formbox">
     
               <br>
			   <br>
			   <br>
          
            <div>
            <label for ="textName" class="addinputs">Name</label>
            <input id="txtName" name="user" class="iadmin" >
            </div>
            <br>
            <br>
            <div>
            <label for ="Contact" class="addinputs">ContactNumber</label>
            <input id="Contact" name="usercontact" class="iadmin"  >
            </div>
            <br>
            <br>
            <div>
            <label for ="Address" class="addinputs">Address</label>
            <input id="Adress" name="userAddress"  class="iadmin" >
            </div>
            
            <br>
            <br>
            
            
            
            <input class="male" value="male" id="gender" type="radio" name="genders" value="male" >
            <label class="malelabel" for="male" required>Male</label>
            
            
            <input class="female" id="gender" type=radio name="genders" value="female">
            <label class="femalelabel" for="female" required>Female</label>
            <br>
            <br>
            
            </div>
            <br>
            <br>
            <label for="pwdpass" class="addinputs">CreatePassword</label>
            <input type=password id="pwdpass"  name="password" class="iadmin" >
            <br>
            <br>
            <div>
            <br>
            <br>
            <label for="pwdpass" class="addinputs">ConfirmPassword</label>
            <input type=password id="pwdpass"  name="passwords" class="iadmin" >
            <br>
            <br>
            
          
                
            <div class="subbutton">
            <input type="submit" name="submits" class="p">
            </div>
            <br>
            
            <div class="resetbutton">
            <input type=reset  class="p">
            
            </div>
            </form>
            
            </div>

            


 <form id="update" method="POST">
  
    <h2>UPDATE USER</h2>
   
   <br>
   <br>
   <br>
  

        
            <label for="uname">
              Username
            </label>
                <input name="updatename" id="usersname">
               <br>
               <br>
                <label for="uaddress">
                    Address
                  </label>
                      <input name="updateaddress" id="usersaddress">
                      <br>
                      <br>
               

            <label for="ucontact">
                ContactNo
               </label>
                   <input name="updatecontact" id="userscontact">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
     <br>
     <br>


            <input name="submission"  type="submit" class="updatebutton" value="Update">
            <br>
            <br>
            <input  type="reset" class="updatebutton">
</form>





    
    
    
   

   




    <form method="POST" id="delete">
        <h1>DELETE USER</h1>
        <label for="uname">
            Username
          </label>
              <input name="delete" id="usename">
             <br>
             <br>
              
          <br>
          <br>
        <br>
        <br>
          <input name="submissions" type="submit" class="m" value="Delete">
          <br>
          <br>
          <input  type="reset" class="m">
		
</form>	
 </div>	
 
</body>
   <script>
var Add=document.getElementById("userForm");
var Update=document.getElementById("update");
var Delete=document.getElementById("delete");
var buttonz=document.getElementById("twobuttons");

function ADDslide(){
   Add.style.left="60px";
   Update.style.top="-100px";
   Update.style.left="400px";
   buttonz.style.left="100px";
    Delete.style.left="400px";
   }

function UPDATEslide(){
    Add.style.left="-400px";
     Update.style.top="80px";
   Update.style.left="100px";
   buttonz.style.left="210px";
    Delete.style.left="400px";
}




function DELETEslide(){
   Add.style.left="-900px";
   Update.style.top="-400px";
   Delete.style.left="100px";
      Delete.style.top="200px";
   buttonz.style.left="350px";}

</script>
<?php 
include('db.php');
if(isset($_POST['submits']))

{

    $uname=$_POST['user'];
    $contact=$_POST['usercontact'];
    $Address=$_POST['userAddress'];
    $gender=$_POST['genders'];
    $createPassword=$_POST['password'];
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
    window.location="logins.php"
    </script>
    <style>
    ';
}

}


require_once('db.php');
$query="SELECT UserName,ContactNo,Addresses,Gender FROM  userregistration";

$result=mysqli_query($con,$query);

?>
<!--take data from database table-->

   <table id="i"scope="col" border="3px">
    <thead>
<tr>
<td>Username</td>

<td>ContactNo</td>

<td>Address</td>
<td>Gender</td>
</tr>
</thead>
<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<td><?php echo $row['UserName']?></td>
<td><?php echo $row['ContactNo']?></td>
<td><?php echo $row['Addresses']?></td>
<td><?php echo $row['Gender']?></td>
</tr>
<?php
}

?>
</table>



<?php

require_once('db.php');

if(isset($_POST['submission'])){
    $username=$_POST['updatename'];
    $address=$_POST['updateaddress'];
  
    $contact=$_POST['updatecontact'];

// Check if the user already exists
    $checkUserQuery = "SELECT * FROM userregistration WHERE UserName='$username'";
    $checkUserResult = mysqli_query($con, $checkUserQuery);

    if (mysqli_num_rows($checkUserResult) ==1) {
        // User exists, proceed with the update
        $updatequery = "UPDATE userregistration SET ContactNo='$contact', Addresses='$address' WHERE UserName='$username'";
        $updatedresult = mysqli_query($con, $updatequery);

        if ($updatedresult) {
            echo '<script>alert("Update successful");</script>';
        } else {
            echo '<script>alert("Update failed");</script>';
        }
    } else {
        echo '<script>alert("User not found");</script>';
    }
}

  





?>
<?php

require_once('db.php');
if(isset($_POST['submissions'])){
    $usersname = $_POST['delete'];
    $checkUserQuery = "SELECT * FROM userregistration WHERE UserName='$usersname'";
    $checkUserResult = mysqli_query($con, $checkUserQuery);

    if (mysqli_num_rows($checkUserResult) > 0) {
        // User exists, proceed with deletion
        $deletequery = "DELETE FROM userregistration WHERE UserName='$usersname'";
        $deletedresult = mysqli_query($con, $deletequery);

        if ($deletedresult) {
            echo '<script>alert("Deleted successfully");</script>';
        } else {
            echo '<script>alert("Deletion error");</script>';
        }
    } else {
        echo '<script>alert("User not found");</script>';
    }
}
?>
<!--send to server side-->




</html>

