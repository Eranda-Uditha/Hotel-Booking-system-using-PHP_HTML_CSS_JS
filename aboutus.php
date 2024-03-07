<?php
require_once "Include/db.inc.php";
require_once "Include/validation.inc.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Booking website</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
       </head>
    <body>
        
        <header>

            <a href="index.php" class="logo"><span>REACH H</span>otel</a>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="Book.php">Book</a>
                <a href="index.PHP#packages">Packages</a>
                <a href="index.PHP#services">Our Services</a>
                <a href="gallery.php">Gallery</a>
                <a href="index.PHP#review">Review</a>
                <a href="contact.php">Contact</a>
            </nav>
        </header>
        <section>
        
</section>




<section>

<h1 class="heading">
                <span>AboutUs</span>
            </h1>
<div class="about">
    <h2>A Trusted Partner in Asia’s Economic Growth</h2>
<br>

<div class="image-box" style="padding-left: 100px;">
    <iframe width="800px" height="350px" frameborder="0" src="https://momento360.com/e/u/fc53c63a244b4902a4699f0d4ffdf29b?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true"></iframe>
</div>
<br>
    <p>Headquartered in Hong Kong SAR, the REACH HOTEL Group has grown from a single hotel business to a diverse and integrated global portfolio comprising quality real estate and investment properties, wellness and lifestyle facilities. Today, the Group owns, operates and manages 100+ hotels under our family of four brands: REACH HOTEL and Resorts, Kerry Hotels, JEN, and Traders.</p>
<br/>
<p>We are part of the Kuok Group, one of Asia's most dynamic multinational conglomerates and a leader in properties, logistics, agribusiness, maritime and hospitality.</p>
<br/>
<p>From our strong base in Asia, we have expanded into key gateway cities and markets around the world. Our properties sit on some of the world’s most prestigious addresses and exotic destinations. Through the environments we have created, we enable people to come together to live, work, play, eat, and rest well.</p>

<div class="aboutus">
<div class="box-container">
<div class="box">
                <img src="image/about1.jpg" >
                
            </div>
            <div class="box">
                <img src="image/about2.jpg" >
                
            </div>
            <div class="box">
                <img src="image/about3.jpg" >
                
            </div>
</div>
</div>

<br/>
<p>Our story is also one that closely parallels Asia’s economic growth. Over the years, we have partnered with local authorities and business leaders to bring positive economic benefit to the people and communities wherever we operate.</p>
<br/>
<p>As a Group, REACH HOTEL is well placed to take advantage of Asia’s growing middle class and urbanisation as well as the rise in global affluence. We will leverage our leadership position to pave the way for the future growth of our family of hotels and integrated lifestyle properties.</p>


</div>




</section>
    
        
    <div class="foot">
            <div class="footer">
                <div class="newsletter">
                    <div class="newsletter-left">
                        <h2>Subscribe to our</h2>
                        <h1>Newsletter</h1>
                    </div>
                    <div class="newsletter-right">
                        
                            <form  method = "POST"> 
                            <div class="newsletter-input">
                            <input type="email" name="email" placeholder="Enter email address" required = "required"/>
                            <button name="submit">Submit</button>
                            </div>
                            </form>
                        <?php require_once 'subscribe.php'?>
                        
                    </div>
                </div>
                <div class="footer-content">
                <div class="footer-main">
                        <h2>REACH Hotel</h2><br>
                        <p>A personal tropical sanctuary that is perfect for escaping the city, <br>
                        REACH Hotel Colombo overlooks the Indian Ocean in the heart of the business<br>
                         district with direct access to the most extensive international shopping <br>
                         mall in Sri Lanka, REACH Hotel’s own One Galle Face Mall. The hotel offers <br>
                         the finest accommodation in Colombo, an exciting new dining and social scene<br>
                          and the largest and extensive hotel conference and event facilities.</p>
                        
                    </div>
                    <div class="links">
                        <p>Information</p>
                        <a href="index.php" class="link">Our company</a>
                        <a href="Book.php" class="link">Book</a>
                        <a href="index.php#packages" class="link">Packages</a>
                        <a href="index.php#services" class="link">Our Services</a>
                        <a href="gallery.php" class="link">Gallery</a>
                        <a href="index.php#review" class="link">Review</a>
                        <a href="contact.php" class="link">Contact</a>
                    </div>
                    <div class="links">
                    <div class="social-links">
                            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></i></a>
                            <a href="#"><i class="fa-brands fa-square-twitter"></i></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="copyright">
    Copyright &copy; IT2020109 K.G.E.U.Lakshan | All Right Reserved.</p>
</div>


        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>  
        <script src="main.js"></script>
    </body>
</html>