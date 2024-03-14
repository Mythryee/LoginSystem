<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <style>
        body{
            margin:0;
            padding:0;
        }
        #navbar{
            display: flex;
            width:100%;
            align-items:center;
            justify-content: space-between;
            border:2px solid;
            background-color:black;
            color:white;
        }
        #navbar ul{
            display:flex;
            width:85%;
            justify-content: space-between;
            text-align:center;
            margin-right:75px; 
        }
        #navbar ul li{
            list-style:none;        
        }
        button{
            background-color:black;
            color:white;
            border:2px solid white;
        }
        button a:hover{
            background-color:white;
            color:black;
            border:2px solid black;
        }
        a{
            text-decoration:none;
            font-size:large;
            color:white;
        }
        h1{
            margin:5px;
        }

    </style>
</head>
<body>
    <nav id="navbar">
        <h1>KL</h1>
        <ul>
            <li><a href="http://localhost/LoginSystem/welcome.php">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">contact us</a></li>
            <button><a href="http://localhost/LoginSystem/login.php">Login</a></button>
            <button><a href="http://localhost/LoginSystem/signup.php">Sign up</a></button>
            <button><a href="http://localhost/LoginSystem/logout.php">Logout</a></button>
        </ul>
    </nav>
</body>
</html>