<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Special+Elite&family=Spectral+SC:wght@500&display=swap" rel="stylesheet">
    <title>Login - Wine</title>
    <style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Inter', sans-serif;
        list-style: none;
        text-decoration: none;
        scroll-behavior: smooth;
        border: none;
        outline: none;
    }
    :root{
        --bg-color: #c0e4f4;
        --secont-bg-color: #101010;
        --main-color: #fff;
        --text-color: #000;
        --second-color: #000;
        --other-color: #808080;

        --h1-font: 7rem;
        --h2-font: 7rem;
        --p-font: 1.4rem;
    }
    body{
        background-color: var(--bg-color);
    }
    .sticky1{
        position: fixed;
        top: 0;
        right: 0;
        z-index: 1000;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: transparent;
        padding: 20px 19% 10px;
        border-bottom: 1px solid transparent;
        transition: all ease .50s;
    }
    .logo{
        color: #000;
        font-size: 40px;
        font-weight: bold;
    }
    .navlist{
        display: flex;
    }
    #menu-icon{
        font-size: 42px;
        color: var(--text-color);
        z-index: 10001;
        cursor: pointer;
        display: none;
    }
    .navlist a{
        color: var(--second-color);
        font-size: var(--p-font);
        font-weight: 600;
        margin: 0 0 0 70px;
        transition: all ease .40s;
        font-family: 'Special Elite', serif;
        align-items: center;
    }
    .navlist a:hover{
        color: var(--main-color);
    }
    section{
        padding: 100px 35% 50px;
    }
    .fa-solid i{
        color: black;
        font-size: 35px;
        text-align: left;
    }
    .login{
        text-align: center;
        align-items: center;
    }
    .heading{
        font-family: 'Caveat', cursive;
        font-size: 5rem;
        font-weight: 800;
        margin-bottom: 3rem;
        color: #000;
        text-align: center;
        margin-top: 140px;
    }
    .log-form{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, auto));
        align-items: center;
        color: #000;
        text-align: left;
        padding-bottom: 1rem;
    }
    .log-form-btn{
        align-items: center;
        color: #000;
        text-align: center;
        padding: 13PX 0 1rem 0;
    }
    .log-form p{
        color: var(--second-color);
        font-size: var(--p-font);
        font-weight: 600;
        transition: all ease .40s;
        font-family: 'Special Elite', serif;
        align-items: center;
    }
    .ip2-mobile input{
        border: solid #000;
        align-items: left;
        height: 40px;
        padding: 0 0 0 10px;
    }
    .submit_1 input{
        border: solid #000;
        align-items: left;
        height: 40px;
        width: 100px;
    }
    .submit_in{
        color: var(--second-color);
        font-size: var(--p-font);
        font-weight: 600;
        transition: all ease .40s;
        font-family: 'Special Elite', serif;
        align-items: center;
    }
    .submit_in:hover{
        cursor: pointer;
    }
   
    </style>
</head>
<body>
<form method="POST" action="login.php">
    <!--header1 section-->
    <header class="sticky1">
    <span class="logo">Laborer</span>
        <ul class="navlist">
        <li><a href="home.php">home</a></li>
            <li><a href="#login">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </header>

    <section class="login" id="login">
        <div class="heading">
            Login
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>username: </p></div>
            <div class="ip2-mobile"><input type="text" name="unm"></div>
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>Password : </p></div>
            <div class="ip2-mobile"><input type="password" name="psw"></div>
        </div>
        <div class="log-form-btn">
            <div class="submit_1"><p><input class="submit_in" type="submit" name="login" value="Login"></p></div>
        </div>
        <div class="log-form-btn">
            <div class="submit_1"><p><a class="submit_in" href="forgot.php">Forgot Password?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php" class="submit_in">New User?</a></p></div>
        </div>
    </section>
</form>
</body>
</html>
<?php
if(isset($_POST['login']))
{
     
    include 'connect.php';
    $u_nm=$_POST['unm'];
    $psw=$_POST['psw'];

  
    $select="SELECT * FROM `l_user` ";
    $qry=mysqli_query($conn,$select);
     while ($row = mysqli_fetch_array($qry))
            {
              if($row['username']==$u_nm && $row['pass']==$psw)
                    
            {
            echo "<script>alert('login succees');</script>";
                exit;
            }
            }
      
}
?>