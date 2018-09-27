<footer> 
	<div class="container">

		<div class="locgo_main_footer">
			<img src="img/logo.png">
		</div>
		<div class="bottom_addre">
			<ul>
				<li><a href="tel: +61 407 337 188 "><!-- span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span> --> 74 Ashmore Road Bundall, Queensland, Australia 4217 </a></li>

				<li><a href="tel: +61 407 337 188 "><!-- <span class="icon"><i class="fa fa-mobile" aria-hidden="true"></i></span> --> +61 407 337 188 </a></li>
				<li><a href="mailto:info@kwixglobal.com"><!-- <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span> --> info@kwixglobal.com </a></li>
			</ul>
		</div>
	<div class="fabicon_footer">
			<ul >
				<li><a href="https://www.facebook.com/KwixGlobal/" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/KwixG" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://plus.google.com/u/0/117977767439119971464" target="_blank"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="https://www.linkedin.com/company/kwix-global-solutions" target="_blank"><i class="fa fa-linkedin"></i></a></li>
	    	</ul>
    	<div class="clearfix"></div>
	</div>
</div>
</footer>
<div class="clearfix"></div>
<div class="footer_end">
	<div class="container"><h5 class="add_joint"><a href="" style="color:#bf9e5f">© 2015 - 2018 | Kwix Global Solutions | All Rights Reserved </a></h5></div>
</div>
<!-- footer--> 

<script src="js/bootstrap.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/main.js"></script> 

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

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57b74f9eb6fbb95fad79ea18/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>




