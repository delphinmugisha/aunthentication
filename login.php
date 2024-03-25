<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="bo">
    <h1><u> LOGIN FORM</u></h1>
    <div class="dc">
    <form action=""method="POST" >
        <div class="in">
    <label for="">EMAIL</label>
<input type="text" name="email"><br><br>
    <label for="">PASSWORD</label>
<input type="text" name="password"><br><br>
<button name="login">login</button>
</body>
</html>
<?php 
$con=new mysqli("localhost","root","","stage");
if(isset($_POST['login'])){
    $fname=$_POST['email'];
    $lname=$_POST['password'];
    $check=$con->query("SELECT * FROM works WHERE email='$fname' AND password='$lname'");
    if(mysqli_num_rows($check)){
        $row=mysqli_fetch_array($check);
        $_SESSION['id']=$row['stid'];
        $_SESSION['name']=$row['fname']." ".$row['lname'];
    
        ?>
        <script>
            window.alert(login success <?php echo $_SESSION['name'];?>)
            window.history.back()
        </script>
        <?php 
    }
    else{
        ?>
        <script>
            window.alert(" INSERT successfull")
            window.history.back()
        </script>
        <?php 
        
    }
}
?>