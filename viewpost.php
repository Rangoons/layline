<?php require('includes/config.php');

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta charset="UTF-8">
	      <title>Blog - <?php echo $row['postTitle'];?></title>
	  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Martel+Sans:200,400" rel="stylesheet">
	  <link rel="stylesheet" href="assets/css/components.css">
	  <link rel="stylesheet" href="assets/css/blog.css">
	  <link rel="stylesheet" media="screen and (max-device-width: 800px)" href="assets/css/blog-mobile.css" />

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="assets/js/main.js"></script>
	  <script src="assets/js/nav.js" charset="utf-8"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
	  <div class="DOMcontainer">
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

	  <section class="one">
	    <img src="assets/media/logo.png" alt="" class="mlogo">

	    <div class="nav" id="nav">
	      <a href="index.php"><img src="assets/media/logo.png" alt="" class="logo" id="logo"></a>
	      <ul>
	        <li><a href="index.php" onClick="activeItem(this)" class="nav-item" id="home">HOME</a></li>
	        <li><a href="services.html" onClick="activeItem(this)" class="nav-item" id="services">SERVICES</a></li>
	        <li><a href="pricing.html" onClick="activeItem(this)" class="nav-item" id="pricing">PRICING</a></li>
	        <li><a href="about.html" onClick="activeItem(this)" class="nav-item" id="about">WHO WE ARE</a></li>
	        <li><a href="blog.php" onClick="activeItem(this)" class="nav-item" id="blog">BLOG</a></li>
	        <li><a href="contact.html"><button class="nav-btn">CONTACT</button></a></li>
	        <li><a href="#"><button class="nav-btn">LOGIN</button></a></li>
	        <li><a href="adv.pdf" target='_blank'><button class="nav-btn">ADV</button></a></li>
	      </ul>
	    </div>
	    <div class="menu"></div>
	  </section>
	  <section class="two">
			<h2><a href="blog.php">Return to blog index</a></h2>
	    <div class="l-post">
	     <?php
			 echo '<div>';
 				echo '<h1>'.$row['postTitle'].'</h1>';
 				echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
 				echo '<p>'.$row['postCont'].'</p>';
 			echo '</div>';
	 		?>
	  </div>
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
</body>
</html>
