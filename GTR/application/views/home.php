<!DOCTYPE html>
<html lang="en">
<!-- Copyright 2015 National Marrow Donor Program (NMDP)

This file is part of GTR Typing Forms.

GTR Typing Forms is free software: you can redistribute it and/or modify
    it under the terms of the GNU Lesser General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Lesser General Public License for more details.

    You should have received a copy of the GNU Lesser General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="<?=base_url()?>/favicon.ico" type="image/gif">

    <title>GTR - Testing by NMDP</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/agency.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">NMDP/GTR</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li>
                        <a class="page-scroll" href="#presentation">Presentation</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#resources">Resources</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#submission">Submission</a>
                    </li>
                 <!--   <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Genetic Testing Registry</div>
                <div class="intro-heading"></div><br><br><br><br>
                <a href="#presentation" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>
	
	<!--Carousel-->
	<section id="presentation">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false"> <!--remove data-interval to re-enable auto sliding-->
		<!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
			<li data-target="#myCarousel" data-slide-to="7"></li>
			<li data-target="#myCarousel" data-slide-to="8"></li>
			<li data-target="#myCarousel" data-slide-to="9"></li>
			<li data-target="#myCarousel" data-slide-to="10"></li>
			<li data-target="#myCarousel" data-slide-to="11"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			<div class="item active">
			  <img src="<?php echo base_url('assets/img/presentation/Slide1.png');?>" alt="GTR Presentation">
			</div>

			<div class="item">
			  <img src="<?php echo base_url('assets/img/presentation/Slide2.png');?>" alt="Publication Cover">
			</div>

			<div class="item">
			  <img src="<?php echo base_url('assets/img/presentation/Slide3.png');?>" alt="GTR Home Page">
			</div>

			<div class="item">
			  <img src="<?php echo base_url('assets/img/presentation/Slide4.png');?>" alt="Background">
			</div>
			
			<div class="item">
			  <img src="<?php echo base_url('assets/img/presentation/Slide5.png');?>" alt="Definitions">
			</div>
			
			<div class="item">
			  <img src="<?php echo base_url('assets/img/presentation/Slide6.png');?>" alt="Scope">
			</div>
			
			<div class="item">
			  <img src="<?php echo base_url('assets/img/presentation/Slide7.png');?>" alt="Submission">
			</div>
			
			<div class="item">
			  <img src="<?php echo base_url('assets/img/presentation/Slide8.png');?>" alt="Stats">
			</div>
			
			<div class="item">
			  <img src="<?php echo base_url('assets/img/presentation/Slide9.png');?>" alt="Future">
			</div>
			
			<div class="item">
			  <img src="<?php echo base_url('assets/img/presentation/Slide10.png');?>" alt="Vendor Kits">
			</div>
			
			<div class="item">
			  <img src="<?php echo base_url('assets/img/presentation/Slide11.png');?>" alt="What Data for Vendor">
			</div>
			
			<div class="item">
			  <img src="<?php echo base_url('assets/img/presentation/Slide12.png');?>" alt="References">
			</div>
			
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	
	</section>

    <!-- GTR Overview Section -->
    <section id="resources">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Resources</h2>
                    <h3 class="section-subheading text-muted">NCBI Genetic Testing Registry</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
				<a href="http://www.ncbi.nlm.nih.gov/gtr/" target="blank">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                    </span>
				</a>
                    <h4 class="service-heading">GTR</h4>
                    <p class="text-muted">The Genetic Testing Registry provides a central location for voluntary submission of genetic test information by providers.</p>
					<p>The GTR website may be found by clicking on the icon above.</p>
                </div>
                <div class="col-md-4">
				<a href="ftp://ftp.ncbi.nlm.nih.gov/pub/GTR/data/gtr_ftp.xml.gz" target="blank">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-exchange fa-stack-1x fa-inverse"></i>
                    </span>
				</a>
                    <h4 class="service-heading">Public</h4>
                    <p class="text-muted">The overarching goal of the GTR is to advance the public health 
					and research into the genetic basis of health and disease.</p>
					<p>The data is freely available in full detail through FTP. Click above to download.</p>
                </div>
                <div class="col-md-4">
				<a href="<?=base_url()?>assets/schema/GTRSubmissionDraft.xsd" target="blank">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-file-code-o fa-stack-1x fa-inverse"></i>
                    </span>
				</a>
                    <h4 class="service-heading">Data</h4>
                    <p class="text-muted">The scope includes the test's purpose, methodology, validity, 
					evidence of the test's usefulness, and laboratory contacts and credentials.</p>
					<p>A schema for submission, including kits, is available by clicking the icon above.</p>
                </div>
            </div>
        </div>
    </section>
	
	
		
	
	


    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Why are we working on GTR with NCBI?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="text-muted">
					Currently, the NCBI GTR houses data from labs that includes clinical tests and research tests.
					Tests can describe instruments, platforms, and manufactured products used, but has no standardized way
					to reference these products. We have proposed to add entries for manufactured products, such as vendor kits,
					so that metadata on them is stored and can be referenced internally from other test submissions and externally
					by other formats, such as HML.
					</br>
					The benefit to NMDP in storing kit information is to preserve the specific kit version, primers, probes, and typing methodology used
					by a lab in identifying an HLA typing.
					</p>
				</div>
			</div>
        </div>
    </section>

    <!-- Submission Section -->
    <section id="submission" class="bg-light-gray">
        <div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
                    <h2 class="section-heading">Submission</h2>
                    <h3 class="section-subheading text-muted">GTR accepts xml submissions. We have created forms to generate an xml file for you.</h3>
                </div>
            <center>
					<a href="<?php echo base_url('index.php/form_select');?>" class="btn btn-xl">Create a GTR XML file</a>
					</center>
        </div>
    </section>
	

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="https://bethematch.org/" target="blank">
                        <img src="https://bethematch.org/Content/themes/BeTheMatch_2013/images/btm_logo.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src=""" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    
    <!-- Contact Section -->
	<!--
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2014</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
	-->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url('assets/js/classie.js');?>"></script>
    <script src="<?php echo base_url('assets/js/cbpAnimatedHeader.js');?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('assets/js/jqBootstrapValidation.js');?>"></script>
    <script src="<?php echo base_url('assets/js/contact_me.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/js/agency.js');?>"></script>
	
	<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      margin: auto;
  }
  </style>

</body>

</html>

