<!DOCTYPE html>
<html lang="en">

<?php
include('incl_config/config.php');
include('incl_config/sql_lib.php');

$image_url = 'https://www.parangat.com/images/parangat_case/';

$getCaseId = mysql_fetch_assoc(mysql_query("SELECT id FROM case_study WHERE htacess_url = '".$_REQUEST['csId']."'"));

$caseStudyDetail = getAllDataFromTable('case_study', array('htacess_url' => $_REQUEST['csId']));
$caseStudyChallengeList = getAllDataFromTable('case_study_challenges_solution', array('case_study_id' => $getCaseId['id']));
$caseStudyResultList = getAllDataFromTable('case_study_result', array('case_study_id' => $getCaseId['id']));
$projectDetails = $caseStudyDetail[0];
//echo '<pre>';print_r($projectDetails);echo '</pre>';
if(empty($projectDetails)) {  
 header('Location: https://www.parangat.com/404.shtml');   
}


?>

<head>
	<title><?php echo $projectDetails['client_title_meta']; ?></title>
        <meta charset="utf-8">
        <meta name="google-site-verification" content="FMe_c8SYH0wDUKdrSRLFrKG5oNENMZSuwX6V24oA7EQ" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo $projectDetails['client_title_description']; ?>" />
        <meta name="keywords" content="<?php echo $projectDetails['client_title_keywords']; ?>" />

	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/swiper.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/tempcl.css">  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="salogo.png" type="image/png" sizes="500x500">


<link rel="shortcut icon" type="image/x-icon" href="images/generaticon.ico">
<link rel="icon" type="image/png" href="images/generaticon.png">
<link rel="icon" type="image/png" href="images/generaticon.jpg">  


    
</head>

<body class="homepage">
	<section class="bg_app_detail pdb-20">
		<!-- header -->
		<?php include("header.php"); ?>
		<!-- header -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 relative top-20">              
						<img src="<?php echo $image_url.@$projectDetails['web_feature_image']?>" 
						class="img-responsive center-block ctrwidth">
					</div>
				</div>
			</div>
		</section> 
	</section>


	<!-- app_detail -->
	<section class="bg_app_detail1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2><?php echo $projectDetails['client_title'];?></h2>
					<p> <?php echo @$projectDetails['client_title_description']?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- app_detail -->


	<!-- app_detail2 -->


	<section class="bg_app_detail2">
		<div class="container">
			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<p><?php echo $projectDetails['client_description'];?></p>
				</div>
			</div>
		</div>
	</section>

	<section>
        <div class="site_left_pannel">
    		<div class="swiper-container">
    			<div class="appmax-screen-mobile-image"></div>  
    			<div class="swiper-wrapper"></div>
    			<!-- Add Pagination -->
    			<div class="swiper-pagination"></div>
    		</div>
        </div>
        <div class="site_pennle_content">
            <h3>
               <b class="globalPresence"> Services Provided </b>
            </h3>
            <div class="pannel_list_discrip">
                <ol>
                    <li style="box-sizing: border-box; margin: 0px; padding: 0px;">
                    Wire framing</li>
                    <li style="box-sizing: border-box; margin: 0px; padding: 0px;">
                    UI / UX</li>
                    <li style="box-sizing: border-box; margin: 0px; padding: 0px;">
                    iOS User App Development</li>
                    <li style="box-sizing: border-box; margin: 0px; padding: 0px;">
                    Android User App Development</li>
                    <li style="box-sizing: border-box; margin: 0px; padding: 0px;">
                    Android App for the Field Agents</li>
                    <li style="box-sizing: border-box; margin: 0px; padding: 0px;">
                    Back end CMS Development</li>
                    <li style="box-sizing: border-box; margin: 0px; padding: 0px;">
                    Functional Testing</li>
                    <li style="box-sizing: border-box; margin: 0px; padding: 0px;">
                    Deployment on App Stores and Server</li>
                    <li style="box-sizing: border-box; margin: 0px; padding: 0px;">
                    Maintainence</li>
                </ol>
            </div>
             <div class="mgt-5 halfwidth">
                <div class="halfchild">Delivery Time: <span><?php echo $projectDetails['delivery_time']; ?></span></div>
                <div class="halfchild">Efforts Involved: <span><?php echo $projectDetails['efforts_involved']; ?></span></div>
            </div>
           
        </div>
	</section> 

	<style>
	body {
		background: #fff;
		font-size: 14px;
		color:#000;
		margin: 0;
		padding: 0;
	}
	.swiper-container {
		width: 100%;
		padding-top: 50px;
		padding-bottom: 50px;
	}
	.swiper-slide {
		background-position: center;
		background-size: cover;
		width: 300px; 
	}
</style>


<?php 
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
// print_r($uri_segments);

$directory = "img/projects/".strtolower($uri_segments[1]);

// print_r($directory);
$files = scandir($directory, 1);

foreach ($files as $key => $value) {
	if(!empty($value)){
		$files1[] = $value;
	}
}
$total = count($files1) > 2 ?count($files1) - 2 : 0;
 // echo "There were " . $total ."  files";
?>


<script type="text/javascript">
	$(function(){
		var filescount = '<?php echo $total; ?>'
		filescount = parseInt(filescount)  + 1
		var url = document.URL;
		var data = url.lastIndexOf('/')
		var ss = url.substr(data + 1).toLowerCase();
		for(var i = 1; i < filescount; i++){
			console.log(i)
			var mydatas = 
			'<div class="swiper-slide" style="background-image:url(img/projects/'+ss+'/'+i+'.png)"></div>'
			$('.swiper-wrapper').append(mydatas)
		}  
    //$('.swiper-wrapper').html(mydatas)
})
</script>

<!-- <div class="swiper-slide" 
            style="background-image:url(img/projects/InTouch/1.png)"> 
        </div> -->

        <section>
        	<div class="container">
        		<h2 class="bigfont">
                    <b class="globalPresence">Our Process</b>
                </h2>
        		<div class="service_list">
        			<ul>
        				<li>
        					<div class="app_detail2_icon left_appdetail">
        						<a href="#">
        							<div class="right_img">
        								<img src="img/slider/app_detail_Icon/consulting.png" class="img-responsive show_img">  <img src="img/slider/app_detail_Icon/consulting_blue.png" class="img-responsive hide_img"> 
        							</div>
        							<p>CONSULTING</p>
        						</a>
        					</div>
        				</li>

        				<li>
        					<div class="app_detail2_icon left_appdetail">
        						<a href="#">
        							<div class="right_img">
        								<img src="img/slider/app_detail_Icon/ui_ux_design.png" class="img-responsive show_img">
        								<img src="img/slider/app_detail_Icon/ui_ux_design_blue.png" class="img-responsive hide_img">
        							</div>
        							<p>UI/UX DESIGN</p>
        						</a>
        					</div>
        				</li>


        				
        				<li>
        					<div class="app_detail2_icon left_appdetail">
        						<a href="#">
        							<div class="right_img">
        								<img src="img/slider/app_detail_Icon/front_end_prototyping.png" class="img-responsive show_img">
        								<img src="img/slider/app_detail_Icon/front_end_prototyping_blue.png" class="img-responsive hide_img">
        							</div>
        							<p>FRONT END PROTOTYPING</p></a>
        						</div>
        					</li>
        					<li>
        						<div class="app_detail2_icon right_appdetail text-right">
        							<a href="#" class="right_icon">
        								<div class="right_img">
        									<img src="img/slider/app_detail_Icon/visual_and_interaction_design.png" class="img-responsive show_img">
        									<img src="img/slider/app_detail_Icon/visual_and_interaction_design_blue.png" class="img-responsive hide_img">
        								</div>

        								<p>VISUAL AND <br>INTERACTION DESIGN</p></a>
        							</div>
        						</li>
        						<li>
        							<div class="app_detail2_icon">
        								<a href="#" class="right_icon">
        									<div class="right_img">
        										<img src="img/slider/app_detail_Icon/development_coordination.png" class="img-responsive show_img">
        										<img src="img/slider/app_detail_Icon/Development_coordination_blue.png" class="img-responsive hide_img">
        									</div>
        									<p>DEVELOPMENT <br>COORDINATION</p><br></a>
        								</div>
        							</li>
        							<li>
        								<div class="app_detail2_icon right_appdetail text-right">
        									<a href="#" class="right_icon">
        										<div class="right_img">
        											<img src="img/slider/app_detail_Icon/Security.png" class="img-responsive show_img">
        											<img src="img/slider/app_detail_Icon/Security_blue.png" class="img-responsive hide_img">
        										</div>
        										<p>SECURITY</p></a>
        									</div>
        								</li>   
        							</ul>
        							<div class="clearfix"></div>
        						</div>
        						<div class="clearfix"></div>
        					</div>
        				</section>


        				<section class="bg_banner7">
        					<div class="container">
        						<div class="row">  
        							<?php include("contact_left.php"); ?>
        							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
        								<?php include("common_contact.php"); ?> 
        							</div>
        						</div>
        					</div> 
        				</section>  
        				<?php include("footer.php"); ?><!-- footer --> 
        				<script src="js/swiper.min.js"></script> 
        				<script src="js/owl.carousel.min.js"></script>
        				<script src="js/jarallax.min.js"></script> 
        				<script src="js/jquery.parallax.js"></script>       
        				<script src="js/main.js"></script> 
        				<script src="js/jarallax-element.min.js"></script>  
        				<script src="js/jquery.magnific-popup.min.js"></script>
        				<script src="js/bootstrap.bundle.min.js"></script> 
        				<script src="js/ajaxchimp.min.js"></script>
        				<script src="js/wow.min.js"></script>
        				 

        		</body>

        		</html>
