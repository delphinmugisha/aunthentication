<?php 
$con=new mysqli("localhost","root","","stage");
if(isset($_POST['save'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $ins=$con->query("INSERT INTO works( `fname`, `lname`, `email`, `password`) 
     VALUES ('$fname','$lname','$email','$password')");
    if($ins){
        ?>
        <script>
            window.alert("inserted")
            window.location.href="login.php"
        </script>
        <?php 
    }
    else{
        ?>
        <script>
            window.alert("try again")
            window.history.back()
        </script>
        <?php 

    }
}
?>