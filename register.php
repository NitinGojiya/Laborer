<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Special+Elite&family=Spectral+SC:wght@500&display=swap" rel="stylesheet">
    <title>Register - Wine</title>
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
        --bg-color: #191919;
        --secont-bg-color: #101010;
        --text-color: #000;
        --second-color: #000;
        --other-color: #808080;

        --h1-font: 7rem;
        --h2-font: 7rem;
        --p-font: 1.4rem;
    }
    body{
        background-color: #c0e4f4;
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
    .register{
        text-align: center;
    }
    .heading{
        font-family: 'Caveat', cursive;
        font-size: 5rem;
        font-weight: 800;
        margin-bottom: 3rem;
        color: #000;
        text-align: center;
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
    .log-form-btn a{
        color: darkblue;
    }
    .log-form-btn a:hover{
        font-size: 25px;
        color: #fff;
    }
   
    </style>
</head>
<body>

<form action="register.php" method="post" enctype="multipart/form-data">
    <!--header1 section-->
    <header class="sticky1">
    <span class="logo">Laborer</span>
       
        <ul class="navlist">
            <li><a href="login.php">Login</a></li>
            <li><a href="#register">Register</a></li>
        </ul>
    </header>

    <section class="register" id="register">
        <div class="heading">
            Register
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>your Photo  : </p></div>
            <div class="photo"><input type="file" name="upload"></div>
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>Name : </p></div>
            <div class="ip2-mobile"><input type="text" name="nm"></div>
        </div>
        
        <div class="log-form">
            <div class="ip1-mobile"><p>User Name : </p></div>
            <div class="ip2-mobile"><input type="text" name="u_nm"></div>
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>charge Per Day : </p></div>
            <div class="ip2-mobile"><input type="text" name="cpd"></div>
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>Create Password : </p></div>
            <div class="ip2-mobile"><input type="password" name="psw"></div>
        </div>
        <div class="log-form">
            <div class="ip1-mobile"><p>Work Type : </p></div>
            <div class="ip2-mobile"><input type="text" name="wk"></div>
        </div>
        <div class="log-form-btn">
            <div class="submit_1"><p><input class="submit_in" type="submit" name="register" value="Register"></p></div>
        </div>
        <div class="log-form-btn">
            <div class="submit_1"><p><a class="submit_in" href="Conreg.php">Contractor Ragister?</a></p></div>
        </div>
    </section>
</form>
</body>
</html>
<?php

    if(isset($_POST['register']))
    {
        include 'connect.php';
        $nm=$_POST['nm'];
        $u_nm=$_POST['u_nm'];
        $psw=$_POST['psw'];
        $cpd=$_POST['cpd'];
        $wk=$_POST['wk'];
        $status="yes";
        $photosname=$u_nm.$_FILES["upload"]["name"];
        $type= $_FILES["upload"]["type"];
        $tempname=$_FILES["upload"]["tmp_name"];
        
        $folder="profile_image/".$photosname;
      
        move_uploaded_file($tempname,$folder);
        $sql="INSERT INTO `l_user`(`username`, `pass`, `name`, `w_type`, `status`, `charge`, `photo`) VALUES ('$u_nm','$psw','','$wk','$status','$cpd',' $folder')";
        $result=mysqli_query($conn,$sql);
       
        error_reporting(0);
      
    }   
?>