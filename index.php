<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Layline Advisors</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/nav.js" charset="utf-8"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Martel+Sans:200,400" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" media="screen and (max-width: 800px)" href="assets/css/index-mobile.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- <img src="assets/media/logo.svg" alt="" class="logo"> -->
<div class="DOMcontainer">
<!-- <img src="assets/media/menu.png" alt="" class="menu"> -->
<div id="menu-icon">
  <span></span>
  <span></span>
  <span></span>
</div>
<div class="mobile-menu">


<div class="menu-wrapper">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="services.html">Services</a></li>
    <li><a href="pricing.html">Pricing</a></li>
    <li><a href="about.html">Who We Are</a></li>
    <li><a href="blog.html">Blog</a></li>
  </ul>
  <hr class="short-rule-white">
  <ul>
    <li><a href="contact.html">Contact</a></li>
    <li><a href="login.html">Login</a></li>
    <li><a href="adv.pdf" target="_blank">ADV</a></li>
  </ul>
</div>
</div>

<div class="nav" id="nav">
  <a href="index.php"><img src="assets/media/logo.png" alt="" class="logo" id="logo"></a>
  <ul>
    <li><a href="#" onClick="activeItem(this)" class="active nav-item" id="home">HOME</a></li>
    <li><a href="services.html" onClick="activeItem(this)" class="nav-item" id="services">SERVICES</a></li>
    <li><a href="pricing.html" onClick="activeItem(this)" class="nav-item" id="pricing">PRICING</a></li>
    <li><a href="about.html" onClick="activeItem(this)" class="nav-item" id="about">WHO WE ARE</a></li>
    <li><a href="blog.php" onClick="activeItem(this)" class="nav-item" id="blog">BLOG</a></li>
    <li><a href="contact.html"><button class="nav-btn">CONTACT</button></a></li>
    <li><a href="login.html"><button class="nav-btn">LOGIN</button></a></li>
    <li><a href="adv.pdf" target='_blank'><button class="nav-btn">ADV</button></a></li>
  </ul>
</div>
<section class="one">
<img src="assets/media/logo.png" alt="" class="mlogo">

  <div class="title-container">
    <div class="title">
      Proactive planning, <br><br> Intelligent portfolio design
    </div>
    <hr class="short-rule-blue">
    <div class="subtitle">
      This is Layline Advisors.
    </div>
    <a href="#two"><button class="white-blue-button">Learn More</button></a>
  </div>
</section>
<section class="two" id="two">
  <div class="about-container">
    <div class="about-title">Emphasizing the big picture.</div>
    <div class="about-subtitle">Our independent advice helps you focus on your goals.</div>
    <hr class="short-rule-white">
    <div class="about-content">
      Layline Advisors is a fully independent fee-only registered investment advisor. We build deep client relationships through our financial planning and investment advisory services.
<br><br>
As an independent fee-only firm, we're here to serve you as fiduciaries - at all times, without exception. That means placing your best interests above all else. We do not sell products. We offer our professional advice, and are committed to managing your assets in accordance with your risk tolerance and personal goals.
    </div>
    <button class="white-button"><a href="services.html">Learn More</a></button>
  </div>
</section>
<section class="three">
  <div class="quality-container">
    <div class="quality">
      <h1>Independent </h1>
      <p>
 As a fee-only advisor, our obligation is to always put our clients’ interests first. We provide advice and prudent investment management. No products. No broker-dealer conflicts of interest.      </p>
    </div>
    <span class="divide-line"></span>
    <div class="quality">
      <h1>Research-Driven</h1>
      <p>
Our approach to both planning and investing is deeply-rooted in research and focused on proven strategies. We hold ourselves to the highest standard of professional competence.     </p>
      <button class="white-button"><a href="services.html">Learn More</a></button>
    </div>
    <span class="divide-line"></span>
    <div class="quality">
      <h1>Dynamic </h1>
      <p>
Today’s client demands more than an office visit. We leverage technology and tools to keep you engaged, and with minimal hassle. This increases our responsiveness and ability to deliver value.
     </p>
    </div>
  </div>
</section>
<section class="four">
  <div class="container">
    <img src="assets/media/mark-p.png" class="selfie">
    <div class="bio">
      <div class="title">Mark Wyand</div><div class="position">, CFA</div>
      <hr class="short-rule-blue">
      <div class="FA">Founder, Advisor</div>
      <div class="about">
        Mark Wyand founded Layline Advisors in the fall of 2016 after spending five years in the independent broker-dealer world and four years before that on the institutional side of the financial services industry. The Layline vision is to provide clients the highest quality planning and investment management through a fully independent and flexible service model. Maintaining a strong focus on planning is central to Layline Advisors’ model.
      </div>
    </div>
  </div>
</section>
<!-- <div class="slope"></div> -->
<div class="rectangle">
  <p class="rect-text">
    Ready to get started? Contact us now.
  </p>
   <a href="contact.html"><button class="cta-button">Contact</button></a>
</div>
<section class="five">
  <div class="title">Blog</div>
  <hr class="short-rule-blue">
  <div class="blog-posts">
    <?php
     try {

       $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate, postPic FROM blog_posts ORDER BY postID DESC LIMIT 3');
       while($row = $stmt->fetch()){

         echo '<div class="post" style="background:url('.$row['postPic'].') no-repeat;background-size:cover;">';
           echo '<div class="post-date">'.date('jS M Y H:i:s', strtotime($row['postDate'])).'</div>';
           echo '<div class="post-title"><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></div>';
         echo '</div>';

       }

     } catch(PDOException $e) {
         echo $e->getMessage();
     }
   ?>
    <!-- <div class="post">
      <div class="post-date">11.20.16 - Investing, Tips</div>
      <div class="post-title">This Election Post</div>
    </div>
    <div class="post">
      <div class="post-date">11.20.16 - Investing, Tips</div>
      <div class="post-title">Long Title, a very very long title detailing Layline.</div>
    </div>-->
  </div>
  <div class="disclaimer">
LAYLINE ADVISORS, LLC (“LAYLINE ADVISORS”) is a registered investment adviser offering advisory services in the States of New York and Texas and in other jurisdictions where exempted. Registration does not imply a certain level of skill or training. The presence of this website on the Internet shall not be directly or indirectly interpreted as a solicitation of investment advisory services to persons of another jurisdiction unless otherwise permitted by statute. The information on this site is provided “AS IS” and without warranties of any kind either express or implied. To the fullest extent permissible pursuant to applicable laws, LAYLINE ADVISORS disclaims all warranties, express or implied, including, but not limited to, implied warranties of merchantability, non-infringement and suitability for a particular purpose. LAYLINE ADVISORS does not warrant that the information will be free from error. None of the information provided on this website is intended as investment, tax, accounting or legal advice, as an offer or solicitation of an offer to buy or sell, or as an endorsement of any company, security, fund, or other securities or non-securities offering. The information should not be relied upon for purposes of transacting securities or other investments. Your use of the information is at your sole risk. Under no circumstances shall LAYLINE ADVISORS be liable for any direct, indirect, special or consequential damages that result from the use of, or the inability to use, the materials in this site, even if LAYLINE ADVISORS or a LAYLINE ADVISORS authorized representative has been advised of the possibility of such damages. In no event shall LAYLINE ADVISORS, LLC have any liability to you for damages, losses and causes of action for accessing this site. Information on this website should not be considered a solicitation to buy, an offer to sell, or a recommendation of any security in any jurisdiction where such offer, solicitation, or recommendation would be unlawful or unauthorized.  </div>
</section>
<footer>
  <div class="section-one">
    <div class="logo-lite">
      <div class="footer-title">
        LAYLINE ADVISORS
      </div>
    </div>
    <div class="contact-info">
      <ul>
        <li>Layline Advisors, LLC</li>
        <li>Mark Wyand, CFA</li>
        <li>17 Prince Street</li>
        <li>Rochester, NY 14607</li>
        <li>+1 (585) 210-8222</li>
      </ul>
    </div>
  </div>
  <span class="divide"></span>
  <div class="section-two">
    <div class="footer-nav">
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="services.html">SERVICES</a></li>
        <li><a href="pricing.html">PRICING</a></li>
        <li><a href="about.html">WHO WE ARE</a></li>
        <li><a href="blog.php">BLOG</a></li>
      </ul>
    </div>
  </div>
  <span class="divide"></span>
  <div class="section-three">
    <iframe width="335" height="237" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=17%20Prince%20St%20Rochester%20NY&key=AIzaSyDAa4U5hQCHEK7gW3RQCFlo-5TXLAvjoPY" allowfullscreen></iframe>
  </div>
  <span class="divide"></span>
  <div class="section-four">
    Get in touch. <a href="contact.html"><button class="white-button">CONTACT</button></a>
    Access your accounts. <a href="login.html"><button class="white-button">LOGIN</button></a>
  </div>
</footer>
</div>
</body>
</html>
