<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <!-- <link href="css/doctor.css" rel="stylesheet"> -->
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .main {

            width: 1000px;
            height: auto;
            margin-top: 77px;
            margin-left: 90px;
            /* background-color: red; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .sub {
            height: auto;
            width: 1000px;

            display: flex;
            flex-wrap: wrap;
        }

        .city {
            position: absolute;
            top: 51px;
            left: 351px;
            width: 465px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
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
            width: inherit;
            height: inherit;
            background: rgba(255, 255, 255, .05);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(10px);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }


        .card:hover {
            transform: scale(1.04) rotate(1deg);
        }


        @keyframes move-up6 {
            to {
                transform: translateY(-10px);
            }
        }

        @keyframes move-down1 {
            to {
                transform: translateY(10px);
            }
        }
        .city{
            margin-top: 20px;
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
            background-color: #53ef7d;
            border: none;
            width: 156px;
             height: 32px;
             border-radius: 30px;
           
        }
        #btn_book:hover{
            background-color:#10e64a;
        }
        
    </style>
</head>

<body>

    <form action="" method="post">
        <div class="main">
            <div class="sub">
            
                <?php
              
                 
                    error_reporting(0);
                    include 'connect.php';
                 

                       
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
                                    <h6>Exprence:<?php echo $row['w_type']; ?></h6>
                                </div>
                                <div>
                                    <h6>chrage:<?php echo $row['charge']; ?></h6>
                                </div>
                                <div>
                                    
                                </div>
                                <div></form><form action="doctor_book.php" method="get">
                                <!-- <input type="submit" value="Book now" id="btn_book" name="book_now"> -->
                                <button id="btn_book">
                                <a style="color: white; text-decoration:none;" href="#">Book now </a>
                                </button>
                            
                                   </div>
                            </div>
                        </div> <?php }
                         ?>



                     






            </div>

        </div>
        <div>
                         
    </form>
</body>

</html>