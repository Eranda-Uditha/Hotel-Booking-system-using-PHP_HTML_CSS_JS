<?php
require_once "Include/db.inc.php";
require_once "Include/validation.inc.php";
?>

<?php
	
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$number=$_POST['number'];
		$subject=$_POST['subject'];
		$msg=$_POST['msg'];
        $status='Pending';
		
		$request= "INSERT INTO contact(name, email, number, subject, msg,status) VALUES
		(?,?,?,?,?,?)";
		
		$stmt = $conn->prepare($request);
        $stmt->bind_param("ssssss", $name, $email, $number,$subject, $msg ,$status);
        $stmt->execute();

		//echo "pass";
		
        // echo '<script>alert("Your Submition  success,We Will Contact You Soon")</script>';
		header('location:contact.php');
	}
	else{
        echo mysqli_error($conn);
	}
	
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Booking website</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
       

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
        <section class="contact" id="contact">
            <h1 class="heading">
                <span>Contact</span>
            </h1>
        <div class="row1">
            <div class="img1">
                <img src="contact.svg" alt="">
            </div>
            <form action="contact.php" method="POST">
                <div class="inputBox">
                    <input type="text" name="name" placeholder="Name" required = "required">
                    <input type="email" name="email" placeholder="Email" required = "required">
                </div>
                <div class="inputBox">
                    <input type="text" name="number" placeholder="Mobile Number" required = "required">
                    <input type="text" name="subject" placeholder="Subject" required = "required">
                </div>
                <textarea placeholder="Message" name="msg" cols="30" rows="10" required = "required"></textarea>
                <input type="submit" name="submit" class="btn" value="Send Message" >
            </form>
            <div class="con_row">
               <div class="con_column">
                <h2>Address</h2>
                    <p>Godagama Reach Hotel<br>
                    No. 23/3, Padukka Rd, Godagama,<br>
                    Homagama.</p>
                    <hr>
            </div> 
            <div class="con_column">      
                    <h2>Hotlines</h2>
                    <p>Hotline:+94 777 480 964<br>
                    Manager:+94 767 480 964<br>
                    Hotel:+94 112 751 385</p>
            </div>
            <div class="con_column">
                    <h2>E-mail</h2>
                    <p>godagamareachhotel@gmail.com</p>
            </div>
            </div>
        </div>
        
    </section>
    
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.58585940703!2d79.
        78616385260246!3d6.922003947550573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
        1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1669290758004!5m2!1sen!2slk" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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