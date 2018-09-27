<?php
include('incl_config/config.php');
include('incl_config/sql_lib.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mobile App  Developers & Experts Portfolio - Parangat Technologies</title>

  <meta name="description" content="How we work with our client. Take a dive in our portfolio to discover our works what we do and how we found solutions to improve companies efficiency." />


<link rel="shortcut icon" type="image/x-icon" href="images/generaticon.ico">
<link rel="icon" type="image/png" href="images/generaticon.png">
<link rel="icon" type="image/png" href="images/generaticon.jpg">  


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>
<body class="homepage"> 
  <section class="bg_about"> 
    <!-- header -->
    <?php include("header.php"); ?>
    <!-- header -->
    <section class="outworksection">
      <div class="container">
        <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h1 class="text-center"><b> Our Featured Works</b></h1>
          <p class="text-center halfwind">  Our work speaks for our ability to deliver compelling mobile experiences that your audience will surely love.</p>
        </div>
      </div>
    </div>
  </section>
</section>


<!-- our work -->
<section class="our_work"> 
  <div class="container">
   <!--  <div class="row text-center">
      <div class="col-center">
        We have built these, and are constantly building more... 
      </div>
    </div> -->
    
    <div class="row getdatalist">
      <?php
      $value = array();
      $offset = $_POST['listnumber'];
      $limit = $_POST['limit'];
      $allCsesQry = mysql_query("SELECT id,header_image,client_title,client_description,client_title_description,web_feature_image,htacess_url,isactive FROM case_study  WHERE isactive !='0' ORDER BY id DESC LIMIT 0,7");
      $i = 1;
      $str = '';
      // foreach ($getAllCases as $key => $value) {
      $isExist = mysql_fetch_array($allCsesQry);
// echo (mysql_num_rows($allCsesQry));
      if(mysql_num_rows($allCsesQry) !=1){
        while ($value = mysql_fetch_array($allCsesQry)) {
    // echo'<pre>';print_r($value);echo'</pre>';
         $htacess_url = $value['htacess_url'];
         $web_feature_image = $value['web_feature_image'];
         $client_description = $value['client_description'];
         $client_title = $value['client_title'];
         $client_title_description = $value['client_title_description'];
         ?> 
         <div class="gallery_product col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
           <a href="<?php echo $htacess_url ?>">
            <div class="full_bg_our_work filter hdpe">
             <div class="full_bg_our_work_50">
               <img src="https://www.parangat.com/images/parangat_case/<?php echo $web_feature_image ?>" class="img-responsive"></div>
               <div class="full_bg_our_work_501"><h4 class="text-capitalize"><?php echo stripslashes($client_title) ." - ". $client_title_description; ?></h4>
                <p class="ourwork"><?php echo substr(stripslashes($client_description), 0, 100); ?>
                <img src="img/datatemp/swiper-slider-icon-01.png" class="rigthpo">
              </p>
            </div>
          </div>
        </a>
      </div>
    <?php }
  }else{
    $str = 'empty';
  }
  ?>
</div>
<div id="loading">
  <button class="loadingbutton">
    <i class="fa fa-spinner fa-spin" style="font-size:18px"></i> <span>Loading</span>
  </button>
</div>
</div> 
</section>

<!-- our work/ --> 
<!-- footer -->
<div class="scrollcheck"></div>
<style type="text/css">
.scrollcheck{float: left; width: 100%;}
#loading{display: none; text-align: center;}
.getdatalistR{height: 700px; overflow: scroll;}
#loading span{position: relative; top:0; left:5px;}
.loadingbutton{padding: 5px 26px;
  background: #2988ed; color: #fff; border-radius: 20px; border: none;  display: inline-flex;  justify-content: center;
  align-items: center; }
  .loadingbutton:hover{background: #1b68bb;}
</style>

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




<script src="js/main.js"></script>



<script type="text/javascript">
  $(function(){ 


    function updatedList(listlength){ 
      $("#loading").show(); 
      $.ajax({
        data:{'listnumber':listlength,'limit':10},
        url:'./ajaxlist.php',
        type:'post',
        success:function(res){
          if(res == 'empty'){ 
            $("#loading").css('opacity',0);
          }else{
           $('.getdatalist').append(res)
           $("#loading").hide(); 
         }
         
       } 
     }) 
    }   
    
    $(window).scroll(function(){  
      var winheight = $('.scrollcheck').offset().top 
      if($("#loading").css('display') == 'none'){
        if($(this).scrollTop() + 750 >= winheight){ 
         var listlength = $('.getdatalist .gallery_product').length 
         updatedList(listlength)          
       }
     }  
   })

    $('.loadingbutton').click(function(){
     var listlength = $('.getdatalist .gallery_product').length 
     updatedList(listlength)  
     
   })


  })
</script>
</body>

</html>
