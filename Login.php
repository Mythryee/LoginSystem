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
    <h1>Login</h1>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <input type="email" name="mail" id="em" placeholder="Enter your mail">
        <input type="password" name="pass" id="ps" placeholder="Enter your password">
        <button>Log in</button>
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
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            
            $sql = "Select * from `userdetails` where `mail`='$mail'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) == 1){
                while($row = mysqli_fetch_assoc($result)){
                    if(password_verify($pass,$row['password'])){
                        session_start();
                        $_SESSION['loggedin'] = true;
                        $_SESSION['mail'] = $mail;
                        header("location:welcome.php");
                    }else{
                        echo '<script>alert("invlaid credentials");</script>';
                    }
                }

            }else{
                echo '<script>alert("invlaid credentials");</script>';
            }
        }
        
    }
?>

