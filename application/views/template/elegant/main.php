
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en" dir="ltr"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en" dir="ltr"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" dir="ltr"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" dir="ltr" lang="en"><!--<![endif]-->
<head>
		<title><?php
			if (isset($metatitle) && $metatitle != NULL)
			{
				echo $metatitle;
			}
			else
			{
				if (isset($title) && $title != NULL)
				{
					echo $title;
				}
				else
				{
					echo "EFI (Loughton) Ltd. The Loughton Seedbed Centre";
				}
			}
 ?></title>
<meta name="description" content="<?php
	if (isset($meta_description) && $meta_description != NULL)
	{
		echo $meta_description;
	}
	else
	{
		echo "Loughton Seedbed Centre Essex modern light industrial units Easy in Easy out rental";
	}
 ?>">

		
		<!-- Meta Data ================ -->
		<meta charset="UTF-8"/>
	
		
		<!--- highly suggested that you un-comment this on a live site 
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		-->
		<meta name="author" content="Redstudio Design Limited">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta content="yes" name="apple-mobile-web-app-capable"/>
		
		<!-- CSS ================ -->
		<link href="<?=base_url() ?>themes/elegant/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?=base_url() ?>themes/elegant/assets/css/theme.reset.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?=base_url() ?>themes/elegant/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/seedbed/map.css">
		
		
		<link rel="stylesheet" type="text/css" media="print" href="<?=base_url() ?>themes/elegant/assets/css/print.css" />

		<!-- Icons ================ put your icons and favicons below -->
		<!--http://mathiasbynens.be/notes/touch-icons-->

		
		
		<!-- JS JQuery in the head you can use ajax if you want ================ -->
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?=base_url() ?>themes/elegant/assets/js/jquery-1.9.1.min.js"><\/script>')
</script>

<?php if(isset($slidesection)) { if($slidesection != "") { ?>	


		<!--animated slider AND loading note two different scripts one for shitty browsers and one for modern --> 
<!--[if gt IE 8]><!-->
<script src='<?=base_url() ?>themes/elegant/assets/js/sequence-greater-than-ie-8.jquery-min.js'></script>
<!--<![endif]-->
<!--[if lte IE 8]><script src='<?=base_url() ?>themes/elegant/assets/js/sequence-less-than-ie-8.jquery-min.js'></script><!--<![endif]-->
		<?php } } ?>
		<!-- Add to HEAD after style sheet http://modernizr.com/docs/#installing  ================ -->
		<script src="<?=base_url() ?>themes/elegant/assets/js/modernizr.custom.js?v=2.6.2"></script>
		
		
		

		
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-19623681-15']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

</script>
</head>
<body>
	
	<div id="myModal"  class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 
  	 <div id="unitData">

		</div>

 
</div>
 <!--   hidden input to pass base url to js files-->
	<input type="hidden" id="baseurl" value="<?= base_url() ?>" />
	
<!--[if lt IE 7]>
<p class="chromeframe">Your browser is over 12 years old. You are using an <strong>outdated</strong> browser. Please <a href="http://www.google.com/chrome/intl/en/landing_chrome.html">upgrade your browser</a>.</p>
<![endif]--> 

<!-- begin accesibility skip to nav skip content -->
<ul class="visuallyhidden" id="top">
		<li><a href="#nav" title="Skip to navigation" accesskey="n">Skip to navigation</a></li>
		<li><a href="#page" title="Skip to content" accesskey="c">Skip to content</a></li>
</ul>

<!-- end /.visuallyhidden accesibility--> 

<!-- begin .header-->
<header class="header clearfix">
 

<!-- mobile navigation trigger-->
<h5 class="mobile_nav"><a href="javascript:void(0)">&nbsp;<span></span> </a> </h5>

<!--******this uses the bootstrap navbar menus but with added support for submenus (they are dropping these in 3.0 and their support in 2X was crap).
I modified the JS, added some script, and adjusted the css.
I commented and separeated the html so you can apply it to your site/menu system easier. Note the additional classes for this theme.
*******-->
<div id="nav">
		<!--accesibility-->
		<div class="navbar secondary-menu">
			<div class="container">

				<div class="navbar-inner">

						<div class="nav-collapse collapse">
								<ul class="nav accordmobile pull-right"><!--accordmobile comes in when the browser is at 979px and below, it fixes bugs with bootstrap's toggles of multiple level dropdowns which they are dropping support for and they had lousy support in 2x-->
										
										
										<!--begin .dropdown .parent -->
										<li class="dropdown parent"> <a class="dropdown-toggle" href="#" data-toggle="dropdown">Get in Touch <i class="e-icon-comment"></i></a>
												<ul class="dropdown-menu"> <!--begin .dropdown-menu -->
												
														<li class="visible-phone visible-tablet phonenumber"><a href="tel:02087877000">phone:020 8787 7000</a></li>
														<!-- show this number only on phones and tablets -->
														
														<li class="menu-text visible-desktop phonenumber">020 8787 7000</li>
														<!-- show this number only on desktop -->

														<li><a href="mailto:info@seedbedloughton.com">email: info@seedbedloughton.com</a></li>
														
														<li class="divider"></li>
														
														
																
														<li class="divider"></li><!--divider -->
														
														<li class="nav-header">Downloads</li><!--nav-header -->
														
														<li class=" visible-desktop ">
															 <a href="http://www.seedbedloughton.com/welcome/tenant_form"><i class="icon-download-alt icon-white"></i> Tenant Application Form</a>
														</li>
														<li class="visible-desktop ">
															  <a href="http://www.seedbedloughton.com/welcome/mailbox_form"><i class="icon-download-alt icon-white"></i> Virtual Office Application Form</a> 
														</li>
													
														
												</ul>
										</li><!--close .dropdown .parent -->


										<!--begin .dropdown .parent -->
									
										<li class="divider-vertical"></li>
										
										
																</ul><!-- close nav accordmobile-->
						</div>
						<!--/.nav-collapse -->
				</div>
				<!-- /.navbar-inner -->
				</div>
				<!--/.container -->
		</div>
		<!-- /.navbar --> 
		
		<div class="container">
				
		<div class="navbar primary-menu">
				<div class="navbar-inner">
						<div class="nav-collapse collapse">
								<?=$this->load->view('template/elegant/menu')?>
						</div>
						<!--/.nav-collapse -->
				</div>
				<!-- /.navbar-inner -->
		</div>
		<!-- /.navbar --> 

								<div id="logo">
						<a href="<?=base_url()?>"></a>
						<h1>LOUGHTON SEEDBED CENTRE</h1></div> 
				<!-- end #logo --> 
				<!-- ******* print stuff --><div class="print">Loughton Seedbed Centre</div>
				</div>
		<!-- /.container --> 
</div>
<!--close #nav-->
 
</header><!-- close /.header --> 

<!-- begin #page - the container for everything but header -->
<div id="page" class="clearfix">

<!--add slideshow here-->	
<?php if(isset($slidesection) && $slidesection != "") { ?>	
<?=$this->load->view('template/elegant/'.$slidesection)?>
<?php } ?>
	<?=$this->load->view('template/elegant/alert')?>
<!--add top section here-->
		<?php
		if (isset($topsection) && $topsection != NULL) {
			$this->load->view('template/elegant/'.$topsection);
		}
		?>
	
		<div class="page-header">
			
		<h1><?php
				if (isset($title)) {
					echo $title;
				}
				?></h1>
</div> 
<!--close page-header-->

<div class="main-content container">
		
	<?php if(!isset($sidebox) || $sidebox == "") { ?>
		<div class="row-fluid">
				<div class="span12">
						<?= $this->load->view($main_content) ?>	
			</div>
				
		</div>
		
		<?php } if(isset($sidebox) && $sidebox != NULL) { ?>
	
		<div class="row-fluid">
				<div class="span7">
					<?= $this->load->view($main_content) ?>	</div>
				<div class="span5">
						<?php if(isset($sidebox) && $sidebox != NULL) { $this->load->view('template/elegant/'.$sidebox); } ?>	
						</div>
		</div>
		
		
		<?php } ?>
		
<hr>
		
		
			

		


			




</div>
<!--close main-content .container--> 		
		 
<!--begin footer -->
<footer class="footer clearfix">
		<div class="container">
				<!--footer container-->
				<div class="row-fluid">
						<div class="span3">
								<section>
										<h4>Contact Us</h4>
										<p>
												The Loughton Seedbed Centre<br>
												Langstone Road,<br>
												Loughton<br>
												Essex, IG10 3TQ<br>
												<strong>phone:</strong> <a href="tel:02087877000" class="tele">020 8787 7000</a><br>
												<strong>fax:</strong> 020 8787 7003<br>
												<span class="overflow"><strong>email:</strong> <a href="mailto:info@seedbedloughton.com">info@seedbedloughton.com</a></span> </p>
								</section>
								<!--close section-->
								
								
						</div>
						<!-- close .span3 --> 
						
						<!--section containing newsletter signup and recent images-->
						<div class="span5">
								<section>
										<h4>Stay Updated</h4>
										<p>Sign up for our newsletter. We won't share your email address.</p>
												
										
										<form action="http://redstudio.us1.list-manage1.com/subscribe/post?u=07f8348178863dab1d4d377a3&amp;id=8860199502" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
										
										<div class="input-append append-fix custom-append row-fluid">
											<input type="email" class="span8" placeholder="Email Address" name="EMAIL" id="mce-EMAIL" placeholder="email address" required  placeholder="Enter Your Email"/>
														
														<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"  class="btn btn-primary">

										</div>	
											
											
										
										
									</form>
										<!--close input-append--> 
								</section>
								<!--close section-->
								
							
								
						</div>
						<!-- close .span5 --> 
						
						<!--section containing blog posts-->
						<div class="span4">
								<section>
										<h4>About Us</h4>
										<p>The Loughton Seedbed Centre offers the small business or 
											a person embarking on a business venture, high quality modern
											 accommodation with the use of technical facilities and administrative
											  back up on a monthly ‘Easy In Easy Out’ licence basis.</p>

<p>Security, insurance, repairs and utilities are included with the cost shared between occupants to create an
 affordable and supported environment with permanent on site staff assistance and telephone answering. </p>
												</section>
						</div>
						<!-- close .span4 -->
				</div>
				<!-- close .row-fluid-->
		</div>
		<!-- close footer .container--> 
</footer>
<!--/close footer--> 

<!--change this to your stuff-->
<section class="footer-credits">
		<div class="container">
				<ul class="clearfix">
						<li>© 2013 EFI (Loughton) Limited. All rights reserved.</li>
						<li><a href="http://www.redstudio.co.uk">Developed my Redstudio Design Limited</a></li>
						
				</ul>
		</div>
		<!--close footer-credits container--> 
</section>
<!--close section .footer-credits--> 
 <span class="backToTop"><a href="#top"><i class="e-icon-up-open-big"></i></a></span>
 
 

</div>
<!-- close #page--> 







		<!-- JS General Site COMBINE AND COMPRESS WHEN YOU FIGURE OUT WHAT YOU WANT TO USE comes with unpacked versions ================ --> 
		
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src='<?=base_url() ?>themes/elegant/assets/js/theme-menu.js'></script><!-- menu --> 
		<script src='<?=base_url() ?>themes/elegant/assets/js/jquery.easing-1.3.min.js'></script><!-- easing --> 
		<script src='<?=base_url() ?>themes/elegant/assets/js/bootstrap.min.js'></script><!-- bootstrap / custom.js loads --> 
		<script src='<?=base_url() ?>themes/elegant/assets/js/jquery.easytabs.min.js'></script><!-- tabs/testimonials custom.js / loads --> 
		<script src='<?=base_url() ?>themes/elegant/assets/js/slide-to-top-accordion.min.js'></script><!-- slide to top accordion toggle / custom.js loads --> 
		<script src='<?=base_url() ?>themes/elegant/assets/js/bootstrap-progressbar.min.js'></script><!-- progress bar loading in page --> 

		<!-- Fancy Box and Isotope ================ --> 
		<script src='<?=base_url() ?>themes/elegant/assets/js/jquery.isotope.min.js'></script><!--filter masonry script AND loading--> 
		<script src='<?=base_url() ?>themes/elegant/assets/js/fancybox/source/custom-fancybox-combined.js' defer></script><!--all fancy box buttons, media, helpers, thumbs AND loading--> 

		<!-- Sliders ================ --> 
		<script src='<?=base_url() ?>themes/elegant/assets/js/jquery.flexslider.min.js'></script><!--flexslider (twitter, blog, portfolio, full width) AND loading --> 
		<script src='<?=base_url() ?>themes/elegant/assets/js/lemmon-slider.min.js'></script><!-- variable width image slider AND loading --> 

		<!--initialize scripts / custom scripts--> 
		<script src='<?=base_url() ?>themes/elegant/assets/js/custom.js'></script> 
		
		
</body>
</html>