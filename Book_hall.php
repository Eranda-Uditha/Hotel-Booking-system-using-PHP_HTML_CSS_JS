<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Booking website</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
		
        
		<link rel = "stylesheet" type = "text/css" href = "./css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "./css/style.css" />
        
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
        
        <br/><br/><br/><br/><br/>
        <div style = "margin-left:50px;" class = "container">
		<!-- #e3c5e478; -->
		<div class = "panel panel-default">
			<div class = "panel-body " style="background-image: url('image/Hotel.webp'); background-size:cover;" >
				<br />
                    <?php 
                        require_once 'admin/connect.php';
						$query = $conn->query("SELECT * FROM `hall` WHERE `id` = '$_REQUEST[id]'") or die(mysql_error());
						$fetch = $query->fetch_array();
                    ?>

                <div class = "container">
		<br />
		<br />
		<div class = "col-md-3"></div>
		<div class = "col-md-5">
			<div class = "panel panel-danger" style="border: 2px solid #9e9a9a4f;">
				<div class = "panel-heading">
					<h4>MAKE A RESERVATION</h4>
				</div>
                <div style = "height:300px; width:800px;">
					<div style = "float:left;">
						<img src = "photo/<?php echo $fetch['photo']?>" height = "300px" width = "441px">
					</div>
					
				</div>

				<div class = "panel-body">
                <form method = "POST" enctype = "multipart/form-data">
					<h2>Event Information</h2>
						<div class = "form-group">
							<label>Event Type</label><br>
							<!-- <input type = "text" class = "form-control" name = "firstname" required = "required" /> -->
							<select name="event_type">
								<option value="1">--Select--</option>
								<option value="Wedding">Wedding</option>
								<option value="Engagement">Engagement</option>
                    		</select>
						</div>
						<div class = "form-group">
							<label>Date of Event</label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
						</div>
						<div class = "form-group">
							<label>Number of Guests</label>
							<input type = "number" class = "form-control" name = "guest" required = "required" />
						</div>
						<hr/>
						<h2>Contact Information</h2>
						<div class = "form-group">
							<label>First Name</label>
							<input type = "text" class = "form-control" name = "fname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Last Name</label>
							<input type = "text" class = "form-control" name = "lname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Email</label>
							<input type = "email" class = "form-control" name = "email" required = "required" />
						</div>
						<div class = "form-group">
							<label>Contact No</label>
							<input type = "text" class = "form-control" name = "contactno" required = "required" />
						</div>
						<div class = "form-group">
							<label>Additional Information</label>
							<textarea rows="4" cols="50" class = "form-control" name = "info" required = "required"></textarea>
						</div>

						
						<!-- <div class = "form-group" >
						<label>Days</label>
						<br />
						<input type = "number" min = "0" max = "99" name = "days" class = "form-control" required = "required"/>
					</div> -->
					
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_hallbook"> Submit</button>
						</div>
					</form>
					<?php require_once 'hall_book.php'?>
				</div>
			</div>
		</div>
		<div class = "col-md-3"></div>
	</div>	
	<br />
	<br />
<!-- 
				<br style = "clear:both;" />
				<div class = "col-md-4 ">
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Firstname</label>
							<input type = "text" class = "form-control" name = "firstname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Middlename</label>
							<input type = "text" class = "form-control" name = "middlename" required = "required" />
						</div>
						<div class = "form-group">
							<label>Lastname</label>
							<input type = "text" class = "form-control" name = "lastname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Address</label>
							<input type = "text" class = "form-control" name = "address" required = "required" />
						</div>
						<div class = "form-group">
							<label>Contact No</label>
							<input type = "text" class = "form-control" name = "contactno" required = "required" />
						</div>
						<div class = "form-group">
							<label>Check in</label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_guest"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
				</div>
				<div class = "col-md-4"></div>
			</div>
		 -->
	</div>
</div>
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