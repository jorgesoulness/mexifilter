		<!-- Slideshow Pattern-->
    <div class="slideshow-pattern"></div>
    
    <div id="canvas" class="canvas"></div>
    
    <div class="container">
    <div class="row">
    <div class="span8 offset2" id="home">
    
    	<div id="part1" class="fadeout_1">
	        <a class="a-rounded" href="#" title=""><h1>V</h1></a>
	        <h3>Verde is coming soon! It will bring a lot of new features. It will return in:</h3>
	        <p class="timer">
	          	<span class="days"></span><span class="daysText"></span><span class="separate">/</span> 
	          	<span class="hours"></span><span class="hoursText"></span><span class="separate">/</span>
	          	<span class="minutes"></span><span class="minutesText"></span><span class="separate">/</span>
	          	<span class="seconds"></span><span class="secondsText"></span> 
			</p>
		</div>	
		
		<div id="part2" class="fadeout_2">
			<div class="row">
			<div class="span8 links">
				<div class="row">
				
				<div id="part2_1" class="fadeout_2_1">
					<div class="span2 offset2">
						<a href="#myModal" id="meetus" data-toggle="modal">MEET US</a>
					</div>
				</div>
				
				<div id="part2_2" class="fadeout_2_2">	
					<div class="span2">
						<a id="link-map" href="#map">CONTACT US</a>
					</div>
				</div>
				
				</div>
			</div>
			</div> 
		</div>
			
		<div id="part3" class="fadeout_3">
			<div class="singup" >
				<div class="subscribe">
                    <p>Sign up now to our newsletter and you'll be one of the first to know the new site:</p>
                    <form class="form-inline singup" action="php/sendmail.php" method="post">
                        <input class="mailchimp-input" type="text" name="email" placeholder="Enter your email...">
                        <button type="submit" class="btn"><span class="singup-image" ><img src="img/send.png" alt="send email" /></span><span class="singup-text">Send</span></button>
                    </form>
                    <div class="success-message"></div>
                    <div class="error-message"></div>
                </div>
			</div>
		</div>
		
	    </div>
    </div>
    </div>

    	<!-- Modal -->
		<div id="myModal" class="modal hide fade meet-us" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<a href="#" class="close" data-dismiss="modal" aria-hidden="true"><img class="close-1" src="img/team/close2.png" alt="Close" /><img class="close-2" src="img/team/close1.png" alt="Close" /></a>
			</div>
			<div class="modal-body">
				<h2 id="myModalLabel" class="meet-us-title">MEET US</h2>
				<h4>Lorem ipsum dolor sit amet consectetur adipiscing elit, lacus tellus commodo, eu sagittis mi dolor nec nisi. </h4>
				<div class="team first">
					<img src="img/team/team1.jpg" alt="member1" />
					<div class="team-social">
					<p class="team-member">John Doe &#183; CEO</p>
					<ul class="team-social-icons">
						<li><a href="#" title="Facebook"><span class='symbol'>facebook</span></a></li>
						<li><a href="#" title="Twitter"><span class='symbol'>twitter</span></a></li>
						<li><a href="#" title="Google Plus"><span class='symbol'>googleplus</span></a></li>
						<li><a href="#" title="Linkedin"><span class='symbol'>linkedin</span></a></li>
					</ul>
					</div>
				</div>
				<div class="team">
					<img src="img/team/team2.jpg" alt="member2" />
					<div class="team-social">
					<p class="team-member">John Doe &#183; Web designer</p>
					<ul class="team-social-icons">
						<li><a href="#" title="Facebook"><span class='symbol'>facebook</span></a></li>
						<li><a href="#" title="Twitter"><span class='symbol'>twitter</span></a></li>
						<li><a href="#" title="Google Plus"><span class='symbol'>googleplus</span></a></li>
						<li><a href="#" title="Linkedin"><span class='symbol'>linkedin</span></a></li>
					</ul>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<ul id="twitter-feed" class="list-tweets"></ul>
			</div>
		</div>
    
    
    
    <div class="map-content">
    
    <div class="slideshow-pattern-map"></div>
    
    <div id="map"></div>
	
	<div class="container">
	<div class="row">
		<div class="span6 offset3 contact">	
		
		<div id="part4">
            <h2>CONTACT US</h2>
            <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h4>
        </div>
            <form action="" id="contactform">
                <p id="part5_1">
                	<input type="text" name="name" class="input" placeholder="Name">
				</p>
				<p id="part5_2">
					<input type="text" name="email" class="input" placeholder="Email">
				</p>
				<p id="part5_3">
					<textarea name="message" cols="35" rows="5" class="textarea" placeholder="Message"></textarea>
				</p>
				<p id="part5_4">
					<button class="button" type="submit" value="Send"><span class="singup-image"><img src="img/send.png" alt="send email" /></span><span class="singup-text">Send</span></button>
				</p>
			</form>
			<div class="success-message-2"></div>
            <div class="error-message-2"></div> 
		</div>            	
	</div> 
	</div>