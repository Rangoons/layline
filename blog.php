<?php
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <title>Layline Advisors</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="assets/js/main.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Martel+Sans:200,400" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/index.css">
   <link rel="stylesheet" href="assets/css/components.css">
 </head>
 <body>
 <!-- <img src="assets/media/logo.svg" alt="" class="logo"> -->
 <div class="DOMcontainer">
 <section class="one">
   <div class="nav" id="nav">
     <img src="assets/media/logo.png" alt="" class="logo" id="logo">
     <ul>
       <li><a href="#" onClick="activeItem(this)" class="active nav-item" id="home">HOME</a></li>
       <li><a href="services.html" onClick="activeItem(this)" class="nav-item" id="services">SERVICES</a></li>
       <li><a href="about.html" onClick="activeItem(this)" class="nav-item" id="about">WHO WE ARE</a></li>
       <li><a href="blog.php" onClick="activeItem(this)" class="nav-item" id="blog">BLOG</a></li>
       <li><a href="contact.html"><button class="nav-btn">CONTACT</button></a></li>
       <li><a href="login.html"><button class="nav-btn">LOGIN</button></a></li>
       <li><a href="adv.pdf" target='_blank'><button class="nav-btn">ADV</button></a></li>
     </ul>
   </div>
   <!-- <script type="text/javascript">
     $(document).ready(function(){
       $(".nav-container").load("nav.html");
     });
   </script> -->
   <div class="nav-container"></div>
   <div class="title-container">
     <div class="title">
      The blog is coming soon.
     </div>
     <hr class="short-rule-blue">
   </div>
 </section>
</body>
</html>
