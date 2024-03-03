<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
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
        --main-color: #fff;
        --text-color: #000;
        --second-color: #000;
        --other-color: #808080;

        --h1-font: 7rem;
        --h2-font: 7rem;
        --p-font: 1.1rem;
    }
    body{
        background-color: #c0e4f4;
    }
    header{
        position: fixed;
        top: 0;
        right: 0;
        z-index: 1000;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: transparent;
        padding: 28px 11%;
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
        margin: 0 40px;
        transition: all ease .40s;
        font-family: 'Special Elite', serif;
    }
    .navlist a:hover{
        color: var(--main-color);
        font-size: 25px;
        transition: all ease .30s;
    }
   .main{
    margin-top: 100px;
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
    <!--header section-->
    <header class="sticky">
        <span class="logo">Laborer</span>
        <div class="fa-solid fa-bars" id="menu-icon"></div>
        <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="Laborer.php">Laborer</a></li>
            <li><a href="#Contect us">Contect us</a></li>
            <li><a href="details.php">Details</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </header>

    
        <section class="main">
            <div class="thead">
        <div class="th">
            <div>Laborer Name</div>
            <div>Date</div>
            <div>charge</div>
        </div>
        <?php
        $con=mysqli_connect('localhost','root','',"dj");
        $select="select * from book_request where status='panding'";
        $qry=mysqli_query($con,$select);
        while($row=mysqli_fetch_array($qry))
        {
            $id=$row['id'];
            ?>
            <div class="contain">
                <div><?php echo $row['nm']; ?></div>
                <div><?php echo $row['nm']; ?></div>
                <div><?php echo $row['nm']; ?></div>
                <div><?php echo $row['nm']; ?></div>
                <form action="add-services.php" method="GET"><a  href="take.php?takeid=<?php echo $id;?>"><div class="action-btn">Take Action</div></a></form>
        </div>
            <?php
        }
        ?>
    </div>
        </section>
    
    
</body>
</html>