<?php
    include "Components/_nav.php";

?>

<style>
    .container{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items: center;
    }

    form{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items: center;
    }
    input{
        width:450px;
        text-align:center;
        height:40px;
        margin:10px;
        border:2px solid black;
    }
    button{
        width:90px;
        height:35px;
    }
</style>
<div class="container">
    <h1>Sign up form</h1>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <input type="text" name="username" id="un" placeholder="Enter your name">
        <input type="email" name="mail" id="em" placeholder="Enter your mail">
        <input type="password" name="pass" id="ps" placeholder="Enter your password">
        <input type="password" name="cpass" id="cps" placeholder="Confirm password">
        <button>Submit form</button>
    </form>
</div>

<?php
    $servername = 'localhost';
    $username = 'root';
    $password = "";
    $database = "lakshmi"; 
    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die('Cannot connect to the data base');
    }else{
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $username = $_POST['username'];
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $cpass = $_POST['cpass'];
            $uniquesql = "Select * from `userdetails` where `username`='$username'";
            $uniquesqlresult = mysqli_query($conn,$uniquesql);
            $noofrows = mysqli_num_rows($uniquesqlresult);
            if($noofrows > 0){
                echo '<script>alert("Username is already taken");</script>';
            }else{
                if($cpass == $pass){
                    $hpass = password_hash($pass,PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `userdetails` ( `username`, `mail`, `password`) VALUES ( '$username', '$mail', '$hpass')";
                     $result = mysqli_query($conn,$sql);
                    if(!$result){
                        echo '<script>alert("You form is not submitted");</script>';
                    }else{
                        echo '<script>alert("You form is successfully submitted");</script>';
                    }
                }else{
                    echo '<script>alert("Your passwords doesnot match");</script>';
                }
            }
        }
        
    }
?>

