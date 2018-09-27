

<!-- bg_banner7/ -->
<!-- footer-->
<footer> 

	<div class="container">
		<div class="row"> 
			<div class="col-lg-1 col-md-1 col-sm-6 col-xs-12 mgtb-20 adjestpt"> 
				<img src="img/pt.png"> 
			</div>

			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 mgtb-20"> 
				<ul>
					<h4><b style="color: transparent;">.</b></h4>
					<li><a href="united-states">United States</a></li>
					<li><a href="united-kingdom">United Kingdom</a></li>
					<li><a href="australia">Australia</a></li>
					<!--  <li><a href="#singapore">Singapore</a></li> -->
					<!-- <li><a href="#india">India</a></li> -->
				</ul> 
			</div>


			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 mgtb-20">
				<h4><b><a href="services">Services</a></b></h4>
				<ul>
					<li><a href="startup" >Startup</a></li>
					<li><a href="enterprise-app-development">Enterprise</a></li>
					<li><a href="services#go_strategy">Strategy</a></li>
					<li><a href="services#go_design">Design</a></li>
					<li><a href="services#development">Development</a></li>
					<li><a href="services#marketing">Marketing</a></li>
				</ul>
			</div>


			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mgtb-20">
				<h4><b>Solutions</b></h4>
				<ul>
					<li><a href="artificial-intelligence">Artificial Intelligence  </a></li>
					<li><a href="blockchain-app-development">Blockchain Solutions </a></li>
					<li><a href="bot-development">Bot Development</a></li>
					<li><a href="cloud-computing">Cloud Computing</a></li>
					<li><a href="internet-of-things">Internet of Things</a></li>
					<li><a href="machine-learning">Machine Learning</a></li>
					<li><a href="mobility-solutions">Mobility Solutions</a></li>
				</ul> 
			</div>


			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 mgtb-20">
				<h4><b>Industries</b></h4>
				<ul>
					<li><a href="logistic-app-development">Logistics App</a></li>
      <!-- <li><a href="startup">StartUp</a></li>
      	<li><a href="#">Media</a></li> -->
      	<li><a href="on-demand-services">On Demand</a></li>
      	<li><a href="javascript:">Ecommerce</a></li>
      	<li><a href="javascript:">Food & Restaurant</a></li>
      	<li><a href="javascript:">Healthcare & Fitness</a></li>
      	<li><a href="javascript:">Travel & Hospitality</a></li>
      </ul>
  </div> 

  <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 mgtb-20">
  	<h4><b>Contact Us</b></h4>
  	<ul> 
  		<li>+1-510-230-0860</li>
  		<!-- <li>+44-207-256-4000</li> -->
  		<li>+44-7511-112566 </li>
  		<li>+91-999-999-6418 </li>
  		<li> +91-706 512 2666 (HR)</li>
  		<li>sales@parangat.com</li>
  		<li>hr@parangat.com</li>

  	</ul>
  </div> 


</div>



<div class="row">

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mgt-20"> 
		<h5>© 2018 Parangat Technologies | <a href="privacy-policy">Privacy Policy</a></h5>
	</div> 

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<ul class="social list-inline text-right">
			<li><a href="https://www.facebook.com/parangat.tech" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li><a href="https://twitter.com/Parangattech" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://plus.google.com/u/0/+ParangatTechnologiesNoida" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="https://www.instagram.com/parangattechnologies/" target="_blank"><i class="fa fa-instagram"></i></a></li>
    <!--  <li><a href="https://in.pinterest.com/parangattech/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
    	<li><a href="https://parangat-technologies-blog.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a></li> -->
    	<li><a href="https://www.linkedin.com/company/parangat-technologies" target="_blank"><i class="fa fa-linkedin"></i></a></li>
    </ul>
</div>

</div>

</footer>
<!-- footer--> 

<script src="js/bootstrap.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/main.js"></script> 

<script type="text/javascript">
	$(function() {  
		jQuery.validator.setDefaults({
			debug: true,
			success: "valid",
			submitHandler: function(form){
				$('.overlaycontact').show();      
				$('.contact_loader').show(); 
				var ClutchUrl = sessionStorage.getItem('urldata');
				var formdata = $("form").serializeArray();
				formdata[formdata.length] = {"name" : "clutchurl", "value" : ClutchUrl};
				console.log("formdata", formdata);
				 //formdata = [formdata,ClutchUrl]
				$.ajax({
					url:'ajaxcontact.php',
					type:'POST',
					data:formdata,
					success:function(res){
						console.log(res);
						$('.contact_loader,.overlaycontact').hide(); 
						$('.contactMessage').addClass('successShow') 
					}
				}) 
			} 
		});

		$('.goback').click(function(){
			$('.contactMessage').removeClass('successShow')
			$("input[name=firstname]").val('')
			$("input[name=email]").val('')
			$("input[name=phonenumber]").val('')
			$("input[name=skype_im]").val('')
			$('.selectdevelopment').val('')
			$(".selectcotation").val('')
			$("textarea[name=message]").val('');
			$('.chk').prop( "checked", false ); 
		})


		$("#commentForm").validate();
		$("#formvalidate").validate({
			rules: {
				firstname: "required",
				phonenumber: "required",  
				services: "required",
				email: {
					required: true,
					email: true
				},
				skype_im: "required",
				budget: "required",
				message: "required",
			},
			messages: {
				firstname: "Please enter your first name",
				phonenumber: "Please enter your phone number",
				services: "Please enter your servoce", 
				email:{
					required: "Please enter your email address.",
					email: "Please enter a valid email address.",
					remote: jQuery.validator.format("{0} is already taken.")
				},
				skype_im: "Please enter your skype id", 
				budget: "Please enter your budget", 
				message: "Please enter your message", 
			}
		});

	});
</script> 

<script>
	$(".nav_icon").click(function(){
		$(this).toggleClass("setdown")
	});
</script>


<script>
	$(document).ready(function(){
		$(".nav_icon").click(function(){
			$(".manue_main").slideToggle();
		});

		$('.navbar-toggle').click(function(){
			$('body').toggleClass('fixheight')
			$('.mymenubar').toggleClass('toggleClass')
		})


	});
</script> 

<style type="text/css">
.fixheight{overflow: hidden;}
.toggleClass{display: block; position: relative; width: 100%; height: 100%; z-index: 9999; background-color: #2988ed;}

@media screen and (max-width : 992px){ 
	.mymenubar{display: block;} 
}
</style>

<script type="text/javascript">

	var url = window.location.href;
	var findindex = url.lastIndexOf('utm_source=Clutch&utm_medium=referral')

	if(findindex > -1){
		sessionStorage.urldata = url;
	}

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-37619502-1']);
	_gaq.push(['_trackPageview']);

	(function () {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();

</script>

<script type="text/javascript">
	var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
	(function () {
		var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
		s1.async = true;
		s1.src = 'https://embed.tawk.to/56ed14faae271647125fd5db/default';
		s1.charset = 'UTF-8';
		s1.setAttribute('crossorigin', '*');
		s0.parentNode.insertBefore(s1, s0);
	})();
</script>




<script> 
	$(document).ready(function(){
		$(".navbar-toggle").click(function(){
			$(".nav.navbar-nav.navbar-right").animate({right: '0px'},700);
			$(".nav_out").css({visibility: 'visible', opacity:'1'});
		});

		$(".nav_icon.setdown").click(function(){
			$(".nav.navbar-nav.navbar-right").animate({right: '-100%'},700);
		});


		$(".nav_out").click(function(){
			$(".nav.navbar-nav.navbar-right").animate({right: '-100%'},700);
			$(".nav_out").css({visibility: 'hidden', opacity:'0'});
		}); 

		$(".clos").click(function(){
			$(".nav_out").css({visibility: 'hidden', opacity:'0'});
			$(".nav.navbar-nav.navbar-right").animate({right: '-100%'},700);
		}); 





	});


</script> 