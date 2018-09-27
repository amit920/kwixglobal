<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us | Kwix Global</title>
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
        <link rel="stylesheet" type="text/css" href="css/clock.css">       
        <meta name="description" content="Proficient &amp; Efficient Mobile App Development Company servicing iPhone, Android &amp; Web Application Development" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
      <link rel="icon" type="image/x-icon" href="images/generaticon.ico">
      <link rel="icon" type="image/png" href="images/generaticon.png">
      <link rel="icon" type="image/png" href="images/generaticon.jpg">

<link href="css/multiselect.css" rel="stylesheet" />
<style type="text/css">
.error {display: block;width: 100%;}
</style>
  


    </head>

    <body class="homepage">


<div class="all_bg" style="background-image:url(img/building.jpg)">
      <!-- header -->
      <?php include("header.php"); ?>
      <!-- header -->
      <div class="container">
        <div class="contain_banner">
            <h1>
              Contact Us
            </h1>
        </div>
      </div>
  </div>




<section class="bottom_contact_home example-classname mode_one" style="background-image:url(fox_images/contact.jpg);">
  <div class="container">
    <div class="heading_contact">
      <h2 class="main_heading_title">Have any question?</h2>
      <h3>
         If you have the next great mobile app idea, our team would love to help you bring it to life. 
      </h3>
    </div>
    <div class="main_contact_box">
        <div class="left_contact_content">
          <p>
             If you haven't already, it’s really important to set yourself a goal to achieve over the next few weeks/months and have a program to follow to help you get there. 
          </p>
          <div class="contact_fiya">
            <figure>
              <img src="fox_images/contact-top.png">
            </figure>
          </div>
          <h3>Why set a goal?</h3>
          <p>
            We're all here for a reason so to get the most out of your project you need to know what to achieve. Goals help you focus energy and organise your time, so that you can maximise your results and success.
          </p>
        </div>
        <div class="right_content_content">


    <form action="sendmail.php" method="post" id="formvalidates" class="relative"> 
            
            <div class="home_contact_grid">
              <input type="text" placeholder="First Name" name="firstname">
            </div>
            <div class="home_contact_grid">
              <input type="text" placeholder="Last Name" name="lastname" required="">
            </div>
            <div class="home_contact_grid">
              <input type="text" placeholder="E-mail" required="" name="email">
            </div>
            <div class="home_contact_grid">
              <input type="text" placeholder="Phone Number" required="" maxlength="11" name="phonenumber"> 
            </div>
            <div class="home_contact_grid">
                <div class="select_opto">
                  <select class="form-control" id='user' name="user[]" multiple>
                    <option value="1"> Mobile App Development </option>
                    <option value="2"> Web App Development </option>
                    <option value="3"> Responsive Website Development
 </option>
                    <option value="4"> Digital Marketing </option>
                    <option value="5"> UI / UX Development</option>
                    <option value="5"> App Maintenance </option>

                  </select>
                  <span class="bottom_icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="home_contact_grid">
                <div class="select_opto">
                  <select required="" name="budget" class="selectdevelopment"> 
                    <option>Select Budget</option>
                    <option>$10000 - $20000</option>
                    <option>$20000 - $30000</option>
                    <option>$30000 - $40000</option>
                    <option>$40000 - $50000</option>
                    <option>$50000 - $75000</option>
                    <option>$75000 - $100000</option>
                    <option> > $100000</option>
                  </select>
                  <span class="bottom_icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="home_contact_full">
              <textarea type="text" placeholder="Message" required="" name="Enter Your message"></textarea>
            </div>
            <div class="home_contact_full new_merg">
                <div class="check_filed_for_form">
                    <label class="router_box"> Send me a copy of NDA (Non Disclosure Agreement)
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
              <div class="button_form">
                <input type="submit" value="submit">
              </div>
            </div>
          </form>
        </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>

        <div class="contactpage full-w"><?php include("footer.php"); ?></div>

<script src="js/validate.js"></script>
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

  

    $("#commentForm").validate();
    $("#formvalidate").validate({
      rules: {
        firstname: "required",
        lastname: "required",
        phonenumber: "required",  
        services: "required",
        email: {
          required: true,
          email: true
        },
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
        budget: "Please enter your budget", 
        message: "Please enter your message", 
      }
    });

  });
</script> 

<script src="js/multiselect.js"></script> 
<script>

$('#user').multiselect({
    columns: 1,
    searchOptions: {
                'default': 'Search User'
            },
    
    search: true,
    selectAll: true
}); 
</script>




    </body>

</html>
