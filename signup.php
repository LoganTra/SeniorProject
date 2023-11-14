<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="login.php">
        <h1>Sign up</h1>
        <div class="textbox">
            <input type="text" placeholder="username" name="username">
        </div>
        <div class="textbox">
            <input type="password" placeholder="password" name="password">
        </div>
        <input type="submit" value="Signup" class="loginbtn" name="login_btn">
        <div class="signup">
            Click to Login
            </br>
            <a herf="login.php">Sign up</a>
        </div>
    </form>

</body>

</html>

<?php
$conn = mysqli_connect("localhost", "root","");
if(isset($_POST['login_btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql= "SELECT * FROM websitelogin.logindetails WHERE username = '$username'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $resultPassword = $row['password'];
        if($password == $resultPassword){
            header('Location:index.html');
        }else{
            echo "<script>
                alert('Login unseccessful');
            </script>";
        }
    }
}


?>