<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            outline: none;
            border: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: "Popinsins", sans-serif;
        }
        body{
            background: #c0e4f4;   
        }
        nav{
            position: sticky;
            top: 0;
            bottom: 0;
            height: 100vh;
            left: 0;
            width: 370px;
            background: #fff;
            overflow: hidden;
            transition: 1s;
        }
        .logo{
            text-align: center;
            display: flex;
            flex-direction: row;
            margin: 10px 0 0 10px;
            padding-bottom: 3rem;
        }
        .logo img{
            width: 45px;
            height: 45px;
        }
        
        .logo span{
            font-weight: bold;
            padding-left: 20px;
            font-size: 18px;
            margin-top: 10px;
            text-transform: uppercase;
        }
        nav a{
            position: relative;
            width: 280px;
            font-size: 14px;
            color: rgb(85, 83, 83);
            display: table;
            padding: 10px;
        }
        nav img{
            position: relative;
            width: 55px;
            height: 55px;
            top: 5px;
            text-align: center;
        }
        .nav-item{
            position: relative;
            top: -20px;
            margin-left: 20px;
        }
        a:hover{
            background: #eee;
        }
        a:hover i{
            color: #34af6d;
            transition: 0.5s;
        }
        .logout{
            position: absolute;
            bottom: 0;
        }
        .container{
            display: flex;
        }
        /* main section */
        .main{
            position: relative;
            padding: 20px;
            width: 100%;
        }
        .main-top{
            display: flex;
            width: 100%
        }
        .thead{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        .th{
            display: flex;
            gap: 50px;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: darkblue;
            height: 60px;
        }
        .th div{
            width: 150px;
            height: auto;
            font-size: 1.3rem;
            font-weight: 600;
            
        }
        .contain{
            display: flex;
            gap: 50px;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #191c24;
            color: #ffffff;
            transition: ease .5s;
            height: 60px;
        }
        .contain div{
            width: 150px;
            height: auto;
            font-size: 1.3rem;
        }
        .action-btn{ 
            border: #000 1px solid ;
            background-color: darkblue;
            color: #ffffff;
        }
        a{
            text-decoration: none;
        }
      
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                    <img src="alogo.png">
                    <span class="nav-main">User Name<?php session_start(); echo $_SESSION['cunm'] ;?></span></a>
                </li>

                <li><a href="cpanel.php">
                    <img src="cancelled.png">
                    <span class="nav-item">request send</span>
                </a>
                </li>

                <li><a href="cworkhistory.php">
                <img src="shopping.png">
                    <span class="nav-item">laborer Work Histroy</span>
                </a>
                </li>

                <li><a href="approved.php">
                <img src="approved.png">
                    <span class="nav-item">Work Type</span>
                </a>
                </li>

                <li><a href="cancel.php">
                    <img src="cancelled.png">
                    <span class="nav-item">Work charge per Day</span>
                </a>
                </li>

                <li><a href="logout.php" class="logout">
                    <img src="cross.png">
                    <span class="nav-item">Logout</span>
                </a>
                </li>
            </ul>
        </nav>
        <section class="main">
        <div class="main-top">
                <h1>Request Send</h1>
            </div>
            <div class="thead">
        <div class="th">
            <div>laborer Name</div>
            <div>Address</Address></div>
            <div>Date</div>
        
           
        </div>
        <?php
   include 'connect.php';

        $select="SELECT * FROM `book` where status='accept'";
        $qry=mysqli_query($conn,$select);
        while($row=mysqli_fetch_array($qry))
        {
          
            ?>
            <div class="contain">
                <div><?php echo $row['l_user']; ?></div>
                <div><?php echo $row['address']; ?></div>
                <div><?php echo $row['date']; ?></div>
          
               
        </div>
            <?php
        }
        ?>
    </div>
        </section>
    </div>
    
</body>
</html>