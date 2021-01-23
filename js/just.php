<?php
$host="localhost";
$email="root";
$password="";
$db="login";
mysql_connect($host,$email,$password);
mysql_select_db($db);
if(isset ($_POST['Email'])){
    $uname=$_POST['Email'];
    $password=$_POST['password'];
    $sql="select * from loginform where Email='".$unname."' AND Password='".$password."'
   limit 1 ";
$result=mysql_query($sql);
if(mysql_num_rows($result)==1)
{
    echo"you have successfully logged in";
    exit();
}
else
{
    echo"incorrect";
    exit();
}
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IZON BRUGER</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,700&display=swap" rel="stylesheet">

</head>
<body>
    <DIv class="container">
    <img src="images/logo.png" alt=""/>
    <form method="POST" action="#">
        <div class="form_input">
            <input type="text" name="Email" placeholder="Enter Your Email"/>
        </div>
<DIV class="form-input">
    <input type="password" name="password" placeholder="Enter Your password"/>

</DIV>
<input type="submit" name="submit" value="LOGIN" class="btn_login"/>
    </form>
    </DIv>
</body>
</html>