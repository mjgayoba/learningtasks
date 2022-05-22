<?php 
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MJ Gayoba\'s Portfolio</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header>

    <div class="user">
        <img src="/LT6/Images/profile1.jpg" alt="">
        <h3 class="name">Mar Jan Gayoba</h3>
        <p class="post">BSIT-1B</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">info</a></li>
            <li><a href="#portfolio">learning tasks</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

</header>

<div id="menu" class="fas fa-bars"></div>

<section class="home" id="home">

    <h3>Hello everyone!</h3>
    <h1>I am <span>Mar Jan Gayoba</span></h1>
    <p>And this is my portfolio.
    </p>

</section>

<section class="about" id="about">

<h1 class="heading"> <span>my</span> info </h1>

<div class="row">

    <div class="counter">

        <div class="box">
            <span>Mar Jan Gayoba</span>
            <h3>Name</h3>
        </div>

        <div class="box">
            <span>19</span>
            <h3>age</h3>
        </div>

        <div class="box">
            <span>BSIT-1B</span>
            <h3>course/year</h3>
        </div>

        <div class="box">
            <span>English</span>
            <h3>language</h3>
        </div>

    </div>

</div>

</section>

<section class="portfolio" id="portfolio">

<h1 class="heading"> my <span>learning tasks</span> </h1>

<div class="box-container">

    <div class="box">
        <a href=http://mjgayoba.herokuapp.com/LT2/index.html target="_blank"><img src="/LT6/Images/LT2.png" alt="Learning Task 2"></a>
    </div>

    <div class="box">
        <a href=http://mjgayoba.herokuapp.com/LT3/index.html target="_blank"><img src="/LT6/Images/LT3.png" alt="Learning Task 3"></a>
    </div>

    <div class="box">
        <a href=http://mjgayoba.herokuapp.com/CLE1MT/index.html target="_blank"><img src="/LT6/Images/CLE1.png" alt="Culminating Learning Evidence 1"></a>
    </div>

    <div class="box">
        <a href=http://mjgayoba.herokuapp.com/LT4/index.html target="_blank"><img src="/LT6/Images/LT4.png" alt="Learning Task 4"></a>
    </div>

    <div class="box">
        <a href=http://mjgayoba.herokuapp.com/LT5/index.html target="_blank"><img src="/LT6/Images/LT5.png" alt="Learning Task 5"></a>
    </div>

</div>

</section>

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i> s2121067@USLS.EDU.PH </h3>
            <h3> <i class="fas fa-phone"></i> 09609268866 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> Brgy. Gargato, Hinigaran, Negros Occidental, Philippines, 6106 </h3>
        </div>

    </div>
</div>

</section>

<a href="#home" class="top">
    <img src="/LT6/Images/scroll2top.png" alt="">
</a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/script.js"></script>


</body>
</html>';
