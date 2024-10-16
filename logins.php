<?php session_start();?>
<html>
<head>

<title>Login</title>

<link rel="stylesheet" type="text/css" href="logincss.css">


</head>
<body>

<div class="login-box">
<div class="button-box">
<div id="twobuttons"></div>
<button name='adminlogin' class="buton" type="button" id="adminbutton" onclick="adminslide()">Administration</button>

<button name='userlogin' class="buton" id="userbutton" type="button" onclick="userslide()">User</button>

</div>

<form id="adminform" action=""  method="POST" class="input-group">
<h2><span>ENTER YOUR LOGIN CREDENTIALS</span></h2>
<div class="x">
<label for ="name">AdminName</label>
<br>
<input id="name" value="" name="txtname" >
</div>
<br>
<br>
<div class="y">
<label for ="ids">Password</label>
<br>
<input id="ids" value="" name="userpassword" type="password" >
</div>
<div>
   <button name='login' class="btn" id="placelogin" type="submit">Log In</button>
       </div>


</form>
<!--user login-->
<form id="userform" action=""   method="POST" class="input-group">
<h2><span>ENTER YOUR LOGIN CREDENTIALS</span></h2>
<div class="x">
<label for ="user">UserName</label>
<br>
<input id="user" value="" name="users" type="text" >
</div>
<br>
<br>
  <div class="y">
   <label for ="pwd">Password</label>
   <br>
   <input id="pwd" value="" name="userspassword" type="password" >
   </div>

   <div>
       <button name='logins' class="btn" id="userlogin" type="submit">Log In</button>
   </div>
   
</form>


</div>
</div>


<script>
var adminform=document.getElementById("adminform");
var userform=document.getElementById("userform");
var button=document.getElementById("twobuttons");

function adminslide(){
   adminform.style.left="-400px";
   adminform.style.top="-100px";
   userform.style.left="30px";
   button.style.left="0px";
}
function userslide(){
   adminform.style.left="-900px";
   adminform.style.top="-400px";
   userform.style.left="-400px";
   button.style.left="120px";
}

 




</script>

<?php 
include('db.php');
if(isset($_POST['login']))
{   
    $uname=$_POST['txtname'];
    $password=$_POST['userpassword'];

    $query = mysqli_query($con, "SELECT * FROM admin WHERE UserName='$uname' and Pasword='$password'");
   
    $row=mysqli_num_rows($query);

    if($row==1)
    {
        $_SESSION['admin']='admin';
            echo'
            <script>
                alert("logged in");
                window.location="administration.php";
                </script>
                ';


    }
    else{
            echo'
            <script>
            alert("Access denied");
            window.location="logins.php";
            </script>';
                }


}


?>
<?php 
include('db.php');
if(isset($_POST['logins']))
{   
    $unames=$_POST['users'];
    $passwords=$_POST['userspassword'];

    $queryl = mysqli_query($con, "SELECT * FROM userregistration WHERE UserName='$unames'");
   
    $row=mysqli_fetch_assoc($queryl);

    if(mysqli_num_rows($queryl)>0)
    {
    if($passwords==$row["CreatePassword"]){ 
       
            $_SESSION['user_name']=$unames;
            echo'<script>
            window.location="index1.php"
            </script>';

    }

    else{
        echo'
        <script>
        alert("wrong password");
        window.location="logins.php";
        </script>';

    }
           


    }
    else{
            echo'
            <script>
            alert("login error");
            window.location="logins.php";
            </script>';
                }


}


?>
</body>

    </html>