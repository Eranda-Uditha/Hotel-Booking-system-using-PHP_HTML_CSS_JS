<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Booking website</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
       
<!-- First comment -->
    <body>
        
        <header>

            <a href="index.php" class="logo"><span>REACH H</span>otel</a>
            <nav class="navbar">
                <a href="index.PHP">Home</a>
                <a href="Book.php">Book</a>
                <a href="index.PHP#packages">Packages</a>
                <a href="index.PHP#services">Our Services</a>
                <a href="gallery.PHP">Gallery</a>
                <a href="index.PHP#review">Review</a>
                <a href="contact.PHP">Contact</a>
            </nav>
           
        </header>
        <section>
      
    </section>
        <div class="bookpage" id="bookpage">
            <h1 class="heading">
                <span>Booking</span>
            </h1>
        <?php
			require_once 'admin/connect.php';
			$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
			while($fetch = $query->fetch_array()){
		?>
        <div class="row">
            <div class="img1" >
                <img src = "photo/<?php echo $fetch['photo']?> " style="width:500px; height:300px;"/>
            </div>
            <div class="column2">
            <h1><?php echo $fetch['room_type']?></h1>
                <h2><?php echo "Rs. ".$fetch['price'].".00"?></h2>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <h3> Features </h3>
                <p>Bedroom &nbsp &nbsp   Balcony </p>
                <h3> Facilities </h3>
                <p>Air Conditions &nbsp &nbsp   Television &nbsp &nbsp Room Heaters &nbsp &nbsp Mini Bar</p>
                <h3> Guests </h3>
                <p>4 Adults &nbsp &nbsp   3 Children </p>
                </div>
            <div class="column3" id="register-btn">
            <a href="Bookroom.php?room_id=<?php echo $fetch['room_id']?>"  class="btn">Book now</a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>

    
          
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