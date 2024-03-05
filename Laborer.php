<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <!-- <link href="css/doctor.css" rel="stylesheet"> -->
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
    section{
        padding: 120px 19% 100px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 80px;
    }

        


        .card {
            width: 190px;
            height: 254px;
            transition: all 0.2s;
            position: relative;
            cursor: pointer;
            margin-right: 50px;
            margin-top: 50px;
        }

        .card-inner {
            height: auto;
            width: 200px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(10px);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        
        .s_city {
            border: none;
            appearance: none;
            padding: 0 30px 0 15px;
            border-radius: 5px;
         
            color: white;
            background-color:#59695d;
            font-size: 1.2rem;
        }

        .city p {
            font-size: 1.2rem;
            font-weight: 500;
            font-family: sans-serif;

        }

        #btn_show {
            background-color:#59695d;
            border: none;
            border-radius: 5px;
            border-radius: 5px;
         width: 100px;
            height: 20px;
            font-size: 1.2rem;
            color: white;
        }
        #btn_book{
            background-color: skyblue;
            border: none;
            width: 156px;
             height: 32px;
             border-radius: 30px;
           
        }
        #btn_book:hover{
            color: #000;
            background-color:darkblue;
        }
        
    </style>
</head>

<body>
     <!--header section-->
     <header class="sticky">
        <span class="logo">Laborer</span>
        
        <ul class="navlist">
            <li><a href="home.php">Home</a></li>
            <li><a href="Laborer.php">Laborer</a></li>
            <li><a href="#Contect us">Contect us</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </header>
    <section class="home" id="home">
    <form action="Laborer.php" method="post">
            
                <?php
              
                 
                    error_reporting(0);
                    include 'connect.php';
                    session_start();


                       
                    $sql = "SELECT * FROM `l_user` where status='yes'";
                    $result = mysqli_query($conn, $sql);
                
               
                    while ($row = mysqli_fetch_array($result)) {

                ?>

                        <div class="card">
                           
                            <div class="card-inner">
                                <div><img heigh="120px" width="100px" style="border:2px black solid;border-radius:20px;" src="Z97uOjr5.jpg"></div>
                                <div>
                                    <h3>Mr.<?php echo $row['name']; ?></h3>
                                </div>
                                <div>
                                    <h6>Work Type:<?php echo $row['w_type']; ?></h6>
                                </div>
                                <div>
                                    <h6>chrage:<?php echo $row['charge']; ?></h6>
                                </div>
                                <div>
                                    
                                </div>
                                <div></form><form action="book.php" method="get">
                                <!-- <input type="submit" value="Book now" id="btn_book" name="book_now"> -->
                                <button id="btn_book" name="book">
                                <a style="color: white; text-decoration:none;" href="book.php?user=<?php echo $row['username']?>">Book now </a>
                                </button>
                            
                                   </div>
                            </div>
                        </div> <?php }  
                         ?>
                         </div>
                       
    </form>
    </section>
    
</body>

</html>