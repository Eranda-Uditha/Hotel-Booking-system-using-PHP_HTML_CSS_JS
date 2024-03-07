<?php
    session_start();
    if(isset($_SESSION["user_email"])){
        header("location: ./profile.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Booking website</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    </head>

    <body>

        <header>

            <a href="index.php" class="logo"><span>REACH H</span>otel</a>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="Book.php">Book</a>
                <a href="#packages">Packages</a>
                <a href="#services">Our Services</a>
                <a href="gallery.php">Gallery</a>
                <a href="#review">Review</a>
                <a href="contact.php">Contact</a>
            </nav>
            
        </header>

        <section class="home" id="home">
            <div class="content">
                <h3>Feeling Special In a Magical Place</h3>
                <a href="aboutus.php" class="btn">Discover more</a>
            </div>

            <div class="controls">
                <span class="vid-btn active" data-src="image/video2.mp4"></span>
                <span class="vid-btn" data-src="image/video3.mp4"></span>
                <span class="vid-btn" data-src="image/video1.mp4"></span>
            </div>
            
            <div class="video-container">
                <video src="image/video2.mp4" id="video-slider" loop autoplay muted></video>

            </div>

        </section>

        <section class="book" id="book">
            <h1 class="heading">
                <span>AVAILABILITY</span>
            </h1>

            <div class="row1">
                <div class="img1">
                    <img src="Booking.svg">
                </div>

                <form action="">
                    <div class="inputBox">
                        <h3>Arrivals</h3>
                        <input type="date" >
                    </div>
                    <div class="inputBox">
                        <h3>Leving</h3>
                        <input type="date" >
                    </div>
                    <div class="inputBox">
                        <h3>Adult</h3>
                        <input type="number" placeholder="">
                    </div>
                    <div class="inputBox">
                        <h3>Children</h3>
                        <input type="number" placeholder="">
                    </div>
                   
                    <input type="submit" class="btn" value="submit">


                </form>

            </div>


        </section>

        <section class="packages" id="packages">
            <h1 class="heading">
                <span>Packages</span>
              
            </h1>
            <?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `hall` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
			?>
        <div class="box-container">
            <div class="box">
                <img src="photo/<?php echo $fetch['photo']?>" />
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> <?php echo $fetch['hall_type'] ?></h3>
                    <p><?php echo $fetch['description'] ?></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price"><?php echo "Rs. ".$fetch['price'].".00"?> <span>Rs. 175000</span></div>
                    <a href="book_hall.php?id=<?php echo $fetch['id']?>" class="btn">Book now</a>
                </div>
                    </div>
                    </div>
          

            <!-- <div class="box">
                <img src="image/hall2.jpg" >
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> Lotus</h3>
                    <p>Rejoice in your unique and unrepeatable love story in 
                        a setting with the timeless charm of the beauty 
                        and sophistication of a unique star class style.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price"> Rs. 140000<span> Rs. 160000</span></div>
                    <a href="packagebook.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <img src="image/hall3.jpg" >
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> Orchid</h3>
                    <p>Our Newest and Largest Banquet, Orchid offers 
                        you state-of-the-art facilities with a five-star 
                        elegance to make your dream picture perfect.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price"> Rs. 125000<span> Rs. 150000</span></div>
                    <a href="packagebook.php" class="btn">Book now</a>
                </div>
            </div> -->
            </div>
            <?php
					}
				?>
        

</section>

<section class="services" id="services">
    <h1 class="heading">
        <span>Our
        <span class="space"></span>
       Services</span>
       
    </h1>
<div class="box-container">
    <div class="box">
        <i class="fa-solid fa-dumbbell"></i>
        <h3>Gym & yoga</h3>
        <p>Healthy body, fit mind, peaceful soul. Our yoga and fitness menu has 
            everything you need to optimise your fitness, strength, flexibility and health. 
            Take a look at the diverse workouts we have on offer.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-bullhorn"></i>
        <h3>Safty guide</h3>
        <p>Video provides a powerful way to help you prove your point.
             When you click Online Video, you can paste in the embed 
             code for the video you want to add. You can also type a keyword to 
             search online for the video that best fits your document.
        </p>
    </div>
    <div class="box">
        <i class="fas fa-utensils"></i>
        <h3>Food and drinks</h3>
        <p>Food and beverage services or F&B service is a professional industry that 
            includes restaurants, bars, cafeterias, canteens, food courts and other 
            food-based hospitality businesses which provide meals to its customers for
             various purposes like meetings, gatherings, recreation etc
        </p>
    </div>
    <div class="box">
        <i class="fas fa-spa"></i>
        <h3>Spa and massage</h3>
        <p>A Spa Hotel typically offers luxurious spa facilities, 
            signature spa treatments (massages, facials and body treatments) 
            specific to that Spa/ Hotel only and a 
            higher level of amenities and customer service
        </p>
    </div>
    <div class="box">
        <i class="fas fa-umbrella-beach"></i>
        <h3>Umbrella beach</h3>
        <p>Whether you want to relax by the sandy beach or enjoy the 
            panoramic views of the ocean from your safety of your
             room this 5-star hotel can fulfill everyone's requirements.
        </p>
    </div>
    <div class="box">
        <i class="fa-solid fa-user-doctor"></i>
        <h3>Docter on call</h3>
        <p>The team of exclusive and private doctors are available for your 
            assistance 24×7. You can call in case of minor 
            emergencies or book an appointment whenever you need
        </p>
    </div>
</div>
</section>


<section class="review" id="review">
    <h1 class="heading">
        <span>Review</span>   
    </h1>

    <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/profile1.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">Went for the dinner buffet in the Central restaurant. 
                                Ordered two cocktails and Ice latte. That’s the best iced latte I have ever had. 
                                Its costed only 750/- and the coffee was awesome. The mains were good. The dessert variety was not good. 
                                Only limited items were there. Service was great.</p>

                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                        </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/profile2.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Thashy Abey</h2>
                            <p class="description">We went there for hightea. The staff was really 
                                professional and friendly. The atmosphere was excellent. The desserts and
                                 savory items were really tasty. 👌💯 If you are looking for one real 5-star hotel in Colombo, this is it.
                                 I saw huge difference between other star hotels that I've visited.</p>

                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                        </div>                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/profile3.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Buddhika Bandara</h2>
                            <p class="description">Love this hotel. Great location with beach view and direction 
                                connection to the One Galle Face mall. The service is great and the staff are polite and attentive. 
                                Spacious ballroom is highly recommended for weddings or corporate parties.</p>

                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                        </div>                        
                    </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/profile4.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Vy Nguyen</h2>
                            <p class="description">Love this hotel. Great location with beach view 
                                and direction connection to the One Galle Face mall. The service is great, 
                                staffs are polite and attentive. The café, bar and Shang Palace upstairs all provide great food and drinks. 
                                Breakfast buffet is good, hoppers are must-try!</p>

                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                        </div>                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/profile5.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Jonathan Osborne</h2>
                            <p class="description">Beautiful facilities. Robust international
                                 breakfast options and live jazz club. Also thoughtful security protocol that feels like an
                                 additional service rather than an airport queue.</p>

                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                        </div>
                      </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/profile6.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mayuran Tharmalingam</h2>
                            <p class="description">Five star hotel. Went for an party, they offering party
                                 hall and wedding hall as well. Good service. We can hire their music groups 
                                 as well. Very good environment..</p>

                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                        </div>                        
                    </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/profile7.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">ziard Hassim</h2>
                            <p class="description">TEverything was very clean and elegant. Friendly staff and management. Great selection of food at the buffets and fine quality.</p>

                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                        </div>
                 </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/profile8.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Rosheale Nonis</h2>
                            <p class="description">Dined at Shang Palace Saturday night. Had great time with my family. The food was delicious and staff was very friendly and attentive . Sanjeewa went out of way to treat us inorder give us a great dinning experience. Keep up the good work Sanjeewa.

                            </p>

                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                        </div>
                        </div>
                    </div>
                   
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
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
                        <a href="#packages" class="link">Packages</a>
                        <a href="#services" class="link">Our Services</a>
                        <a href="gallery.php" class="link">Gallery</a>
                        <a href="#review" class="link">Review</a>
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
        <script src="js/swiper-bundle.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>