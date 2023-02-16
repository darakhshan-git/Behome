<!--include header -->
<?php include 'includes/header.php'; ?>

<section class="contact">
	
<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12 col-12">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224346.4812945448!2d77.06889950048124!3d28.527280343701566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1634036642984!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>

		<div class="col-md-8 col-sm-12 col-12">
			<div class="content">
			<h3>SAY HELLO</h3>
			<h2>Contact Us</h2></div>

			<div class="row">
				<div class="col-md-4 col-sm-4 col-4">
					<h4 class="media">social media</h4>
					<h4 class="contact">our contact</h4>
					<h4 class="msg">send message</h4>
				</div>


				<div class="col-md-8 col-sm-8 col-8">
					<ul class="social-media">
					    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					</ul>


                  <div class="row width">
                  	<div class="col-md-2 col-3">
                  		<i class="fa fa-map-marker" aria-hidden="true"></i>
                  	</div>
                  	
                  	<div class="col-md-10 col-9">
                  		<h6>Address</h6>
                  		<p>#302 kjhbsvd ugfu<br>hdjhujuhj</p>
                  	</div>

                  	<div class="col-md-2 col-3">
                  		<i class="fa fa-phone" aria-hidden="true"></i>
                  	</div>
                  	
                  	<div class="col-md-10 col-9">
                  		<h6>Call Us</h6>
                  		<p><a class="heademobile" href="tel:+1800-212-5840">1800-212-5840</a></p>
                  	</div>
                  	<div class="col-md-2 col-3">
                  		<i class="fa fa-envelope" aria-hidden="true"></i>
                  	</div>
                  	
                  	<div class="col-md-10 col-9">
                  		<h6>Email Address</h6>
                  		<p><a class="messg" href="mailto:behome@complaint.in">behome@complaint.in</a></p>
                  	</div>
                  </div>



					<form class="add" action="savedata.php" method="post"> 
	<div class="form-group input-group">
        <input class="form-control" type="text" name="sname" placeholder="Name">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <input class="form-control" type="text" name="saddress" placeholder="Email Address">
    </div>
	
	 <div class="form-group input-group">
       <textarea row="7" cols="80" placeholder="Message"></textarea>
    </div> 
                                        
    <div class="form-group">
        <button type="submit" value="save" class="btn btn-primary btn-block">Submit </button>
    </div>                                                              
</form>

				</div>
			</div>

		</div>

	</div>
</div>
</section>



<!--include footer -->
<?php include 'includes/footer.php'; ?>