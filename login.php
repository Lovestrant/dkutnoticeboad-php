<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    color:#444;

}
body{
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    width:100vw;

}
.login{
    text-align:center;
    position:relative;
    width:200px;
}
#signin{
    width:100%;
    border:0;
    border-radius:40%;
    padding:12px;
    background-image:green;
    margin-bottom:26px;

}
input{
       padding:13px 40px 12px 20px;

}
#details{
margin-bottom:10px;
position:relative;
}
p{
    margin-bottom:6px;
}
a{
    color:blue;
}
h2{
    color: green;
}
</style>
<body>
  <div class="login">
  <form action="login.php" method="post">
       <h2>login to Dkut Online Noticeboard</h2>
       <input type="email"  id="details" name="email"  placeholder="email" required="required" class="form-control input-md"><br>
         <input type="password" id="details" name="pass" placeholder="password" required="required" 
         class="form-control input-md"><br>
         <button id="signin" class="btn btn-info btn-lg" name="login">login</button><br>
         <p><a  data-toggle="tooltip" title="reset password" href=
          "forgot_password.php"></a><p><br>
       
        <?php
  if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['pass'];
 
     if($email=="dekutadmin@gmail.com" && $password=="123456789"){
        echo"<script>location.replace('adminpage.php');</script>";
     }elseif($email=="dekutstudent@gmail.com" && $password=="studentlogin"){
        echo"<script>location.replace('textposts.php');</script>"; 
     }
     else {
       echo"<script>alert('your details are incorrect')</script>";
      }
  
 }

        ?> 
  </form> 
    </div> 
</body>
</html>