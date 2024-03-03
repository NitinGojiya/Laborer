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
            width: 280px;
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

      
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                    <img src="alogo.png">
                    <span class="nav-main">Admin</span></a>
                </li>

                <li><a href="aadmin.php">
                <img src="shopping.png">
                    <span class="nav-item">Arrived Bookings</span>
                </a>
                </li>

                <li><a href="approved.php">
                <img src="approved.png">
                    <span class="nav-item">Approved Bookings</span>
                </a>
                </li>

                <li><a href="cancel.php">
                    <img src="cancelled.png">
                    <span class="nav-item">Cancelled Bookings</span>
                </a>
                </li>

                <li><a href="#" class="logout">
                    <img src="cross.png">
                    <span class="nav-item">Logout</span>
                </a>
                </li>
            </ul>
        </nav>
        <section class="main">
            
        </section>
    </div>
    
</body>
</html>