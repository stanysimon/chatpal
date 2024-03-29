<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pratt - Free Bootstrap 3 Theme">
    <meta name="author" content="Alvarez.is - BlackTie.co">
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/ico/favicon.png">
	<link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css">
    <title>Elearning!!</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/css/main.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/js/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/js/smoothscroll.js"></script>
    

  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navigation">

    <!-- Fixed navbar -->
	    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#"><div style="margin-top: -15px;"><?php echo CHtml::image(Yii::app()->request->baseUrl."/images/cloudlogo.png",'',$htmlOptions=array('width'=>'21%')); ?><div class="heading" style="style=float: left;margin-left: 117px;margin-top: -43px;">Learn the Cloud Way!!</div></div></a>
	        </div>
	        <div class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="#home" class="smothscroll">Home</a></li>
	            <li><a href="#desc" class="smothscroll">Description</a></li>
	            <li><a href="#showcase" class="smothScroll">Showcase</a></li>
	            <li><a href="#contact" class="smothScroll">Contact</a></li>
	            <li><?php echo CHtml::link('Login',array('site/login'),array("class"=>"smothScroll")); ?></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>


	<section id="home" name="home"></section>
	<div id="headerwrap">
	    <div class="container">
	    	<div class="row centered">
	    		<div class="col-lg-12">
					<h1>Welcome To <b>Pratt</b></h1>
					<h3>Show your product with this handsome theme.</h3>
					<br>
	    		</div>
	    		
	    		<div class="col-lg-2">
	    			<h5>Amazing Results</h5>
	    			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	    			<img class="hidden-xs hidden-sm hidden-md" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/img/arrow1.png">
	    		</div>
	    		<div class="col-lg-8">
	    			<img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/img/app-bg.png" alt="">
	    		</div>
	    		<div class="col-lg-2">
	    			<br>
	    			<img class="hidden-xs hidden-sm hidden-md" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/img/arrow2.png">
	    			<h5>Awesome Design</h5>
	    			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	    		</div>
	    	</div>
	    </div> <!--/ .container -->
	</div><!--/ #headerwrap -->


	<section id="desc" name="desc"></section>
	<!-- INTRO WRAP -->
	<div id="intro">
		<div class="container">
			<div class="row centered">
				<h1>Designed To Excel</h1>
				<br>
				<br>
				<div class="col-lg-4">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/img/intro01.png" alt="">
					<h3>Community</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="col-lg-4">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/img/intro02.png" alt="">
					<h3>Schedule</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="col-lg-4">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/img/intro03.png" alt="">
					<h3>Monitoring</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
			<br>
			<hr>
	    </div> <!--/ .container -->
	</div><!--/ #introwrap -->
	
	<!-- FEATURES WRAP -->
	<div id="features">
		<div class="container">
			<div class="row">
				<h1 class="centered">What's New?</h1>
				<br>
				<br>
				<div class="col-lg-6 centered">
					<img class="centered" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/img/mobile.png" alt="">
				</div>
				
				<div class="col-lg-6">
					<h3>Some Features</h3>
					<br>
				<!-- ACCORDION -->
		            <div class="accordion ac" id="accordion2">
		                <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
		                        First Class Design
		                        </a>
		                    </div><!-- /accordion-heading -->
		                    <div id="collapseOne" class="accordion-body collapse in">
		                        <div class="accordion-inner">
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div><!-- /accordion-inner -->
		                    </div><!-- /collapse -->
		                </div><!-- /accordion-group -->
		                <br>
		
		                <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
		                        Retina Ready Theme
		                        </a>
		                    </div>
		                    <div id="collapseTwo" class="accordion-body collapse">
		                        <div class="accordion-inner">
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div><!-- /accordion-inner -->
		                    </div><!-- /collapse -->
		                </div><!-- /accordion-group -->
		                <br>
		
		                 <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
		                        Awesome Support
		                        </a>
		                    </div>
		                    <div id="collapseThree" class="accordion-body collapse">
		                        <div class="accordion-inner">
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div><!-- /accordion-inner -->
		                    </div><!-- /collapse -->
		                </div><!-- /accordion-group -->
		                <br>
		                
		                 <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
		                        Responsive Design
		                        </a>
		                    </div>
		                    <div id="collapseFour" class="accordion-body collapse">
		                        <div class="accordion-inner">
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div><!-- /accordion-inner -->
		                    </div><!-- /collapse -->
		                </div><!-- /accordion-group -->
		                <br>			
					</div><!-- Accordion -->
				</div>
			</div>
		</div><!--/ .container -->
	</div><!--/ #features -->
	
	
	<section id="showcase" name="showcase"></section>
	<div id="showcase">
		<div class="container">
			<div class="row">
				<h1 class="centered">Some Screenshots</h1>
				<br>
				<div class="col-lg-8 col-lg-offset-2">
					<div id="carousel-example-generic" class="carousel slide">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					  </ol>
					
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active">
					      <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/img/item-01.png" alt="">
					    </div>
					    <div class="item">
					      <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/img/item-02.png" alt="">
					    </div>
					  </div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>	
		</div><!-- /container -->
	</div>	


	<section id="contact" name="contact"></section>
	<div id="footerwrap">
		<div class="container">
			<div class="col-lg-5">
				<h3>Address</h3>
				<p>
				Av. Greenville 987,<br/>
				New York,<br/>
				90873<br/>
				United States
				</p>
			</div>
			
			<div class="col-lg-7">
				<h3>Drop Us A Line</h3>
				<br>
				<form role="form" action="#" method="post" enctype="plain"> 
				  <div class="form-group">
				    <label for="name1">Your Name</label>
				    <input type="name" name="Name" class="form-control" id="name1" placeholder="Your Name">
				  </div>
				  <div class="form-group">
				    <label for="email1">Email address</label>
				    <input type="email" name="Mail" class="form-control" id="email1" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				  	<label>Your Text</label>
				  	<textarea class="form-control" name="Message" rows="3"></textarea>
				  </div>
				  <br>
				  <button type="submit" class="btn btn-large btn-success">SUBMIT</button>
				</form>
			</div>
		</div>
	</div>
	<div id="c">
		<div class="container">
			<p>Created by <a href="http://www.blacktie.co">BLACKTIE.CO</a></p>
		
		</div>
	</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/js/bootstrap.js"></script>
	<script>
	$('.carousel').carousel({
	  interval: 3500
	})
	</script>
  </body>
</html>
