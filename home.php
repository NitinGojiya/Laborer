<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Special+Elite&family=Spectral+SC:wght@500&display=swap" rel="stylesheet">
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
        color: white;
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
    }
    .home{
        position: relative;
        min-height: 100vh;
        width: 100%;
        background: url(home.jpg);
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }
    .hero-text h3{
        font-family: 'Caveat', cursive;
        color: var(--second-color);
        font-size: 60px;
        font-weight: 600;
        text-align: left;
        margin-left: 16px;
    }
    .hero-text h4{
        font-family: 'Caveat', cursive;
        color: var(--second-color);
        font-size: 60px;
        font-weight: 600;
        text-align: left;
    }
    .hero-text h1{
        font-family: 'Caveat', cursive;
        font-size: 150px;
        color: var(--text-color);
        font-weight: 800;
        letter-spacing: 2px;
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

    <section class="home" id="home">
            <div class="hero-text">
                <h3>WE</h3>
                <h1>For</h1>
                <h4>Working People</h4>
            </div>
    </section>
</body>
</html>