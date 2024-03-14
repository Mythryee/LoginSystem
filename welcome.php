<?php
    include "Components/_nav.php";

?>
<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location:Login.php");
        exit;
    }
?>
<h1>Welcome <?php echo $_SESSION['mail'] ?></h1>