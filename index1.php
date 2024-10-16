<?php session_start();?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Party arranagement</title>
        <!-- <link to css> -->
	<link rel="stylesheet" href="style.css">

	
    </head>
    <body>
        <!-- <Navbar> -->
	<header>
        <!-- <Nav container> -->
            <div class="nav-container">
                <!-- <Nav list bar> -->
                <ul class="navbar">
                    <li><a href="#home" class="active"> Home</a></li>
                    <li><a href="#Events"> EVENTS</a></li>
                    <li><a href="#ABOUT"> ABOUT</a></li>
                    <li><a href="#Reviews">Our Reviews</a></li>
                    <li><a href="#blog"> HELP</a></li>
					<li> REGISTERERED</li>
					<br>
					<br>
					<br>
			        <li><a href="logins.php">LOGOUT</a></li>
                </ul>
                    
        </header>
        <!-- <Home> -->
        <section class="home" id="home">
            <div class="text">
                <h1>WE WILL ARRANGE <br> YOU WILL CELEBRATE</H1>
                <p>Choose what your event and we will make you happier</p>
                <!-- <Home Button> -->
				
				<br>
                <a href="#Events" class="btns">SCHEDULE AN EVENT</a>
            </div>
        </section>
        <section class="cars" id="Events">
            <div class="heading">
                <span>All Events</span>
                <h2>We arrange what you need </h2>
                <p>Select an event for more info</p>
            </div>
                    <!--Cars-container-->
                    <div class="event-container container">
                        <!--<Box 1> -->
                        <div class="box">
                            <img src='oip.jfif' alt="">
                            <h2>Musical shows</h2>                
                        </div>
                        <!--<Box 2> -->
                        <div class="box">
                            <img src='birth.jpg' alt="">
                            <h2>Birthday Parties </h2>                
                        </div>
                        <!--<Box 3> -->
                        <div class="box">
                           <img src='wed.jfif' alt=""> 
                           <h2>Wedding parties</h2>               
                        </div>
                        <!--<Box 4> -->
                        <div class="box">
                            <img src="get.jfif" alt="">
                            <h2>Get together</h2>                
                        </div>
                        <!--<Box 5> -->
                        <div class="box">
                            <img src='office.jfif' alt="">
                            <h2>Office conferennce</h2>                
                        </div>
                        <!--<Box 6> -->
                        <div class="box">
                            <img src="awards.jfif" alt="">
                            <h2>Awarding Ceromony</h2>                
                        </div>

                     
        </section>
        <!--<About>-->
            <section class="about container" id="ABOUT">
                <div class="about-img">
                    <img src="staff.jfif" alt="">
                </div>
                <div class="about-text">
                    <span>About Us</span>
               <h2>Get your event <br>Save your pocket<h2>                  
			   <p>We are obliged to give you our best service</p>
                  
                        <a href="#" class="btns">More About Us</a>
                </div>

            </section>
        <!--Parts Section-->
        <section class="parts" id="Reviews">
            <div class="heading">
                <span>CUSTOMER FEEDBACK AND REVIEWS</span>
                <h2>We got 5 million of customer base with our 5 years of excellence.</h2>
                <p>You can ask for an inquiry and get help under the reviews section </p>
            </div>
            <!--Parts Container-->
            <div class="review-container">
                <!--Box 1-->
                <div class="box">
                    <img src="stars.png" alt="">
                    <h3>Saman Kumara</h3>
                    <span>"Web site is very useful for who are busy in life and difficult for find a time slot to add an event."</span>
                    <i class='bx bxs-star' >(6 Reviews)</i>
                    <a href="#" onclick="vote()" class="btns" >Vote Now</a>
               
                </div>
                 <!--Box 2-->
                 <div class="box">
                    <img src="stars.png" alt="">
                    <h3>Kamal Thushara</h3>
                    <span>"This is what i needed from a website.It has not any bugs i founded. Direct to the point.We can schedule any event on any places by this site.</span>
                    <i class='bx bxs-star' >(6 Reviews)</i>
                    <a href="#" onclick="vote()" class="btns" >Vote Now</a>
    
                </div>
                 <!--Box 3-->
                 <div class="box">
                    <img src="stars.png"alt="" height="10px">
					   <h3>Saman Kumara</h3>
                    <span>"I have schedule an event on Galadari hotel 5 years ago from this website.What a realistic and awesome event they planned.In my life I never found an event like that"</span>
                    <i class='bx bxs-star' >(6 Reviews)</i>
                    <a href="#" onclick="vote()" class="btns" >Vote Now</a>
             
                </div>
				
				<script>
				 function vote(){
				 var result=prompt("Enter your Feedback");
				 
				 if(result==false){
				 alert("vote is empty");
				 }
				 else{
				 alert("Thankyou");
				}
				}
				</script>
         
                 <!--Box 3-->
                 <div class="box">
                    <img src="stars.png" alt="">
                    <h3>Anil Thushantha</h3>
                    <span>"I did not see a website like this.I did not believe party vibes give us these services remotely."</span>
                    <i class='bx bxs-star' >(6 Reviews)</i>
                    <a href="#" class="btns" onclick="vote()" >Vote Now</a>
             
                </div>
            </div>
			</section> 
			<div>
			<br>
			<br>
			<br>
			<br>
			<h1>SCHEDULE AN EVENT HERE</h1>
			     <div class="white-box">
        
        </div>
        
			<div class="pos">
        
        
        <label style="color:grey;" for="name">Enter Your Name</label>
        <br>
        <input  name="x" placeholder="Enter your Name" id="name">
        <br>
        <br>
        <br>
        <label style="color:grey;" for="passw">Your Email</label>
        <br>
        
        <input name="p"placeholder="Enter your email" id="ids">
        <br>
        <br>
        <label style="color:grey;" for="y">Enter Date</label>
        <br>
        <br>
        <br>
        <br>
        <input  name="y"  class="date" placeholder="" id="idn" type="Date">
        <br>
        <br>
        <br>
        <br>
		<label for="place">
		<br>
		<select class="selection" id="place" name="placeselection">
		 <option selected>Select your favourrite place </option>
		 <option>Galadari, Colombo</option>
		 <option>Shongai,Kandy</option>
		  <option>Revenue,Gampaha</option>
		 <option>Tontri,Trincomale</option>
		  <option>Cantral,Kandy</option>
		 <option>Zouroka,Maharagama</option>
		 </select>
		 
		
        <br>
		<br>
        <button onclick="output()" class="btn" id="placelogin" type="submit">submit</button>
            </div>
            
			</div>
        
        <!--Blog Container-->
           <section class=" blog" id="blog">
            <div class="heading">
                <span>Our Blog Help</span>
                <h2>Web site FAQ</h2>
                <p>This shows the frquently asked question by the customers and description of website.</p>
            </div>
            <!--Blog Container-->
            <div class="blog-container container">
                <!--Box 1-->
                <div class="box">
                    <img src="" alt="">
                    <span>March 18 2022</span>
                    <h3>What is the best and cost efficient place to do a party</h3>
                    <p>This depends on your living place.I think the cost is not differ according to the hotel.Your transportations and friends transportation it  based on.</p>
                    <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt' ></i></a>
                </div>
                 <!--Box 2-->
                 <div class="box">
                    <img src="" alt="">
                    <span>May 31 2022</span>
                    <h3>When is the discount and offers going on?</h3>
                    <p>When the christmas and new year seasons we are planning to give more offers than existing offers.You can get discount if you schedule and event for 5 times it will reduce 30% from your fee</p>
                    <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt' ></i></a>
                </div>
                 <!--Box 3-->
                 <div class="box">
                    <img src="" alt="">
                    <span>August 05 2022</span>
                    <h3>What is the best hotel you offer us</h3>
                    <p>We cannot say that this hotel is best , that hotel is best whatever.In every hotel you can get specified experience for its uniqueness.As example near a beah hotel , it is good for weddings</p>
                    <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt' ></i></a>
                </div>
                 <!--Box 4-->
                 <div class="box">
                    <img src="" alt="">
                    <span>January 23 2023</span>
                    <h3>Can we put more than one schedules in one place</h3>
                    <p>Yes you can. If there are enough room for the event it is possible.But sometimes we cannot afford the staff members when there are 5 or more events at same time.
					Therefore we implemented some limitations when you are scheduling an event.</p>
                    <a href="#" class="blog-btn">Read More<i class='bx bx-right-arrow-alt' ></i></a>
                </div>
            
            </div>
           </section>
        <!--Footer-->
        <section class="footer">
            <div class="footer-container container">
                <div class="footer-box">
                    <a href="#" class="logo">Auto<span>MO</span></a>
                    <div class="social">
                        <a href="#"><i class='bx bxl-facebook' ></i></a>
                        <a href="#"><i class='bx bxl-twitter' ></i></a>
                        <a href="#"><i class='bx bxl-instagram' ></i></a>
                        <a href="#"><i class='bx bxl-youtube' ></i></a>
                    </div>
                </div>
                <div class="footer-box">
                    <h3>Page</h3>
                    <a href="#">Home</a>
                    <a href="#">Cars</a>
                    <a href="#">Parts</a>
                    <a href="#">Sales</a>
                </div>
                <div class="footer-box">
                    <h3>Legal</h3>
                    <a href="#">Privacy</a>
                    <a href="#">Refund Policy</a>
                    <a href="#">Cookie Policy</a>
                </div>
                <div class="footer-box">
                    <h3>Contact</h3>
                    <p>United States</p>
                    <p>Germany</p>
                    <p>Japan</p>
                </div>
            </div>
        </section>
        <!--Copyright-->
        <div class="copyright">
            <p>&#169; AutoMo Company(All Right Reserved)</p>
        </div>
        <!-- <link to javaScript> -->
        <script>
		function output(){
		alert("Your appointment is checking.We will contact you soon");}
		</script>   
    </body>
</html>