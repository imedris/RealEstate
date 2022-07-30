<?php
include_once "connection.php";
session_start();
error_reporting(0);
$user_id = $_SESSION['user_id'];
$query = "select * from properties";
$result = mysqli_query($con, $query);

if(!$result){
	echo "Error Found!!!";
}


if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Real Estate</title>
<link rel="icon" href="images/icon.png">
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="assets/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>
  <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
  <script src="assets/owl-carousel/owl.carousel.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
   <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
    <script src='assets/google_analytics_auto.js'></script>



  </head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">
<a href="index.php">
            <img width="200px" src="images/navbar.jpg" >
          </a>

              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>



            <!-- Nav Starts -->
           <?php include 'header.html';?>

          </div>
        </div>

    </div>
<div class="container">
<!-- <div class="header">
<a href="index.php"><img src="images/logo.png" alt="Realestate"></a>

            <div class="menu">
              <ul class="pull-right">
              	<li><a href="index.php">Home</a></li>
                <li><a href="list-properties.php">List Properties</a>
                	 <ul class="dropdown">
                    	<li><a href="sale.php">Properties on Sale</a></li>
                        <li><a href="rent.php">Properties on Rent</a></li>
                    </ul>
                </li>
                
              </ul>
           </div>
</div> -->
</div>
<div class="">
    

            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
        
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">

              <div class="bg-img bg-img-1"></div>
              
            </div>

            <div class="headingfind" style="margin-left:230px; top: 60px; position: absolute;"> <!-- Find your house -->
            <h2 style="margin: 0; padding: 0;color: white; color: #06f2e3; text-shadow: 2px 2px black; font-family: Shojumaru-Regular; font-weight: bold;">Find</h2>
            <h2 style="margin: 0; padding: 0;color: white; font-family: Shojumaru-Regular;"><span style="padding: 20px;"></span> Your</h2>
            <h2 style="margin: 0; padding: 0;color: white;font-family: Shojumaru-Regular;"><span style="padding: 46px;"></span>    Dream <span style="color: #06f2b3;">House</span></h2>
              </div>






            <div class="banner-search"> <!-- Banner search -->

  <div class="container"> 
    <!-- banner -->

    <div class="searchbar">
      <div class="row">

        <div class="col-lg-5 col-sm-5" >

        <form action="search.php" method="post" >
          <input name="search" type="text" class="form-control" placeholder="Search for Properties (ex: Office)">

          <div style="margin-left:35px ;"class="row">

            <div class="col-lg-3 col-sm-3 ">
              <select name="delivery_type" class="form-control">
                <option value="Rent">Rent</option>
                <option value="Sale">Sale</option>
              </select>
            </div>

            <div class="col-lg-3 col-sm-3">
             <select name="search_price" class="form-control"  required>
                <option value="">Price</option>
                <option value="1">$5000 - $50,000</option>
                <option value="2">$50,000 - $100,000</option>
                <option value="3">$100,000 - $200,000</option>
                <option value="4">$200,000 - above</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-3">
           <select name="property_type" class="form-control" required>
                <option value="">Type</option>
                <option value="Apartment">Apartment</option>
                <option value="Building">Building</option>
                <option value="Office-Space">Office</option>
              </select>
              </div>
              

              </div>
          </div> <!-- Banner end -->
          <div class="col-lg-3 col-sm-4">
              <button name="submit" class="btn btn-success" style="font-weight: bold; font-size: 1.2em;" >Search</button>
</div>
</form> 

<?php if (isset($_POST['submit'])){
header("Location: buysalerent.html");
}
  ?>

       <!--  <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Join now and get updated with all the properties deals.</p>
          <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>        </div> -->
          </div>
          
          <!-- <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 20,000,000</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 20,000,000</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
              <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 20,000,000</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
              <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
              <cite>$ 20,000,000</cite>
              </blockquote>
            </div>
          </div> -->
        </div><!-- /sl-slider -->

      </div><!-- /slider-wrapper -->
</div>




          
          
        
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<?php
  $select = mysqli_query($con, "SELECT * FROM `user_data` WHERE id = '$user_id'") or die('query failed');
  if(mysqli_num_rows($select) > 0){
     $fetch = mysqli_fetch_assoc($select);
  }

  ?>
<div class="container">
  <div class="properties-listing spacer"> <a href="list-properties.php" style="font-size: 1.4em;" class="pull-right viewall">View All Listing</a>
    <a href="uploadprop.php">
                  <button style="background: #23ca92; margin-top: 3px; font-size: 1.2em; border-radius: 20px; ">
  <div class="left"></div>
    Upload your own
  <div class="right"></div>
</button>
</a>

      <?php 
if(!isset($user_id)){
   echo "<h2 style='text-align:left; color:orange; font-size:20px;'>You are not logged in.</h2>";
}else{
   echo "<h2> Welcome: <span class='welcome'>";
echo "<span class='welcome'>",$fetch['name'], "</span><a href='index.php?logout=<?php echo $user_id; ?>'>
     <button style='margin-left:560px;' class='buttonlog'  
          ><span>- </span> Log Out</button></a></h2> ";
}




?>
    <h2 style="font-family: SupermercadoOne-Regular;">Recent Properties</h2>
    <div id="owl-example" class="owl-carousel">
      
     
      
      <?php 
	  	while($property_result = mysqli_fetch_assoc($result)){
			$id = $property_result['property_id'];
			$property_title = $property_result['property_title'];
			$delivery_type = $property_result['delivery_type'];
			$availablility = $property_result['availablility'];
			$price = $property_result['price'];
			$property_img = $property_result['property_img'];
			$bed_room = $property_result['bed_room'];
			$liv_room = $property_result['liv_room'];
			$parking = $property_result['parking'];
			$kitchen = $property_result['kitchen'];
			$utility = $property_result['utility'];
		
	  ?>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo $property_img; ?>" class="img-responsive" alt="properties">
          <?php if($availablility == 0){ ?><div class="status sold">Available</div> <?php } else { ?>
          <div class="status new">Sold</div>
          <?php } ?>
        </div>
        <h4><a href="property-detail.php?id=<?php echo $id; ?>"><?php echo $property_title;  ?></a></h4>
        <p class="price">Price: $<?php echo $price; ?></p>
        <p class="price">Delivery Type: <?php echo $delivery_type; ?></p>
        <p class="price">Utilities: <?php echo $utility; ?></p>
        <div class="listing-detail">
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $bed_room; ?></span> 
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $liv_room; ?></span> 
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $parking; ?></span> 
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $kitchen; ?></span> 
        </div>
        <a class="btn btn-primary" href="property-detail.php?id=<?php echo $id; ?>">View Details</a>
      </div>
      
      <?php } ?>
      
    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-12 col-sm-12 recent-view">
        <h3 style="font-family: SupermercadoOne-Regular; font-size: 2.7em;">About Us</h3>

<section>
      <div class="container" style="width:80%">
        <div class="box">
          <h3>Experience</h3>
          <p>Founded in 1948, we have sold over 330 projects nationwide, totaling more than $1.7 billion. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="box">
          <h3>Precise</h3>
          <p>Whiteplot Lands is composed of craftsmen who deliver unique products that are highly innovative. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="box">
          <h3>Reliable</h3>
          <p>Our focus is to create relationships that last generations. That doesn't happen by cutting corners!Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim variatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id e</p>
        </div>
      </div>
    </section>

      
      </div>
      
    </div>
  </div>
</div>



<?php include 'newfooter.html';?>



</body>
</html>



