<?php 

$host="localhost";
$user="root";
$password="";
$db="loginn";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
if(isset($_POST['Email'])&&($_POST['password'])
)
{
    $sql="INSERT INTO USERS (Email,Password) VALUES (:Email,:password);";
$stmt=$conn->prepare($sql);
$stmt->execute(array(
    ':Email'=>$_POST['Email'],
    ':password'=>$_POST['password']
));
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
<header>
    <DIv class="container">
    <a href="index.html">
    <img src="images/logo.png" alt=""/>
</a>
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
</header>
</body>
</html>