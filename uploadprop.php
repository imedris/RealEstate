<?php

include 'connection.php';


$query = "select * from properties, agent where properties.agent_id = agent.agent_id";
$result = mysqli_query($con, $query);

if(!$result){
  echo "Error Found!!!";
}

if(isset($_POST['submit'])){

   $property_title = mysqli_real_escape_string($con, $_POST['name']);
   $property_details = mysqli_real_escape_string($con, $_POST['email']);
   $delivery_type = mysqli_real_escape_string($con, ($_POST['password']));
   $price = mysqli_real_escape_string($con, ($_POST['price']));
   $property_address = mysqli_real_escape_string($con, ($_POST['property_address']));
   // $property_img = mysqli_real_escape_string($con, ($_POST['property_img']));
   $bed_room = mysqli_real_escape_string($con, ($_POST['bed_room']));
   $liv_room = mysqli_real_escape_string($con, ($_POST['liv_room']));
   // $parking = mysqli_real_escape_string($con, ($_POST['parking']));
   // $kitchen = mysqli_real_escape_string($con, ($_POST['kitchen']));
   // $utility = mysqli_real_escape_string($con, ($_POST['utility']));
   // $property_type = mysqli_real_escape_string($con, ($_POST['property_type']));
   // $floor_space = mysqli_real_escape_string($con, ($_POST['floor_space']));

   $select = mysqli_query($con, $query) or die('query failed');
}
   if(isset($_POST['submit'])){ $insert = mysqli_query($con, "INSERT INTO
`properties`(property_title, property_details, delivery_type, price, property_address, bed_room, liv_room) VALUES('$property_title', '$property_details', '$delivery_type', '$price', '$property_address','$bed_room','$liv_room'
)") or die('query failed'); } 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Project</title>
    <link rel="icon" href="images/icon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/uploadprop.css" />
    <script src="main.js"></script>
  </head>
  <body></body>
</html>
<body style="background:white;">
  <div style="margin-top: 30px; margin-left: 20px;">      <a href="index.php" ><button>Back</button></a>
</div>
  <div class="session">
    <div class="left">
      <?xml version="1.0" encoding="UTF-8"?>
      <svg
        enable-background="new 0 0 300 302.5"
        version="1.1"
        viewBox="0 0 300 302.5"
        xml:space="preserve"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          class="st01"
          d="m126 302.2c-2.3 0.7-5.7 0.2-7.7-1.2l-105-71.6c-2-1.3-3.7-4.4-3.9-6.7l-9.4-126.7c-0.2-2.4 1.1-5.6 2.8-7.2l93.2-86.4c1.7-1.6 5.1-2.6 7.4-2.3l125.6 18.9c2.3 0.4 5.2 2.3 6.4 4.4l63.5 110.1c1.2 2 1.4 5.5 0.6 7.7l-46.4 118.3c-0.9 2.2-3.4 4.6-5.7 5.3l-121.4 37.4zm63.4-102.7c2.3-0.7 4.8-3.1 5.7-5.3l19.9-50.8c0.9-2.2 0.6-5.7-0.6-7.7l-27.3-47.3c-1.2-2-4.1-4-6.4-4.4l-53.9-8c-2.3-0.4-5.7 0.7-7.4 2.3l-40 37.1c-1.7 1.6-3 4.9-2.8 7.2l4.1 54.4c0.2 2.4 1.9 5.4 3.9 6.7l45.1 30.8c2 1.3 5.4 1.9 7.7 1.2l52-16.2z"
        />
      </svg>
    </div>
    <form action="" method="post" required class="signup" enctype="multipart/form-data">
      <h4>Upload <span>House or Office</span></h4>
      <p>Please fill up the info below:</p>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
            echo '<script> Message: </script>'.$message.'</div>';

         }
      }
      ?>

      <div class="floating-label">
        <input
          placeholder="Title: Eg: Apartment for sale"
          type="name"
          name="email"
          id="email"
          autocomplete="off"
          required
        />
        <label for="email">Email:</label>
        <div class="icon">
          <?xml version="1.0" encoding="UTF-8"?>
          <svg
            enable-background="new 0 0 100 100"
            version="1.1"
            viewBox="0 0 100 100"
            xml:space="preserve"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g transform="translate(0 -952.36)">
              <path
                d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z"
              />
            </g>
            <rect class="st0" width="100" height="100" />
          </svg>
        </div>
      </div>
      
<!-- Upload image while signing up -->

      <!-- <div class="floating-label">
        <input
          placeholder="Upload Pic"
          type="file"
          name="image"
          id="image"
          autocomplete="off"
        />
        <label for="image">Image</label>
        <div class="icon">
          <?xml version="1.0" encoding="UTF-8"?>
          <svg
            enable-background="new 0 0 100 100"
            version="1.1"
            viewBox="0 0 100 100"
            xml:space="preserve"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g transform="translate(0 -952.36)">
              <path
                d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z"
              />
            </g>
            <rect class="st0" width="100" height="100" />
          </svg>
        </div>
      </div> -->

      <div class="floating-label">
        <input
          placeholder="Details about Property"
          type="name"
          name="name"
          id="name"
          autocomplete="off"
          required/>
        <label for="name">Name:</label>
        <div class="icon">
          <?xml version="1.0" encoding="UTF-8"?>
          <svg
            enable-background="new 0 0 100 100"
            version="1.1"
            viewBox="0 0 100 100"
            xml:space="preserve"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g transform="translate(0 -952.36)">
              <path
                d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z"
              />
            </g>
            <rect class="st0" width="100" height="100" />
          </svg>
        </div>
      </div>

      <div class="floating-label">
        <input
          placeholder="Sale or Rent"
          type="name"
          name="password"
          id="password"
          autocomplete="off"
          required
        />
        <label for="password">Password:</label>
        <div class="icon">
          <?xml version="1.0" encoding="UTF-8"?>
          <svg
            enable-background="new 0 0 24 24"
            version="1.1"
            viewBox="0 0 24 24"
            xml:space="preserve"
            xmlns="http://www.w3.org/2000/svg"
          >
            <style type="text/css">
              .st0 {
                fill: none;
              }
              .st1 {
                fill: #010101;
              }
            </style>
            <rect class="st0" width="24" height="24" />
            <path class="st1" d="M19,21H5V9h14V21z M6,20h12V10H6V20z" />
            <path
              class="st1"
              d="M16.5,10h-1V7c0-1.9-1.6-3.5-3.5-3.5S8.5,5.1,8.5,7v3h-1V7c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5V10z"
            />
            <path
              class="st1"
              d="m12 16.5c-0.8 0-1.5-0.7-1.5-1.5s0.7-1.5 1.5-1.5 1.5 0.7 1.5 1.5-0.7 1.5-1.5 1.5zm0-2c-0.3 0-0.5 0.2-0.5 0.5s0.2 0.5 0.5 0.5 0.5-0.2 0.5-0.5-0.2-0.5-0.5-0.5z"
            />
          </svg>
        </div>
      </div>

     

      <div class="floating-label">
        <input
          placeholder="Price"
          type="number"
          name="price"
          id="price"
          autocomplete="off"
          required/>
        <label for="name">Name:</label>
        <div class="icon">
          <?xml version="1.0" encoding="UTF-8"?>
          <svg
            enable-background="new 0 0 100 100"
            version="1.1"
            viewBox="0 0 100 100"
            xml:space="preserve"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g transform="translate(0 -952.36)">
              <path
                d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z"
              />
            </g>
            <rect class="st0" width="100" height="100" />
          </svg>
        </div>
      </div>



      <div class="floating-label">
        <input
          placeholder="Property Address"
          type="name"
          name="property_address"
          id="property_address"
          autocomplete="off"
          required/>
        <label for="name">Name:</label>
        <div class="icon">
          <?xml version="1.0" encoding="UTF-8"?>
          <svg
            enable-background="new 0 0 100 100"
            version="1.1"
            viewBox="0 0 100 100"
            xml:space="preserve"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g transform="translate(0 -952.36)">
              <path
                d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z"
              />
            </g>
            <rect class="st0" width="100" height="100" />
          </svg>
        </div>
      </div>



      <div class="floating-label">
        <input
          placeholder="Bedrooms Count"
          type="number"
          name="bed_room"
          id="bed_room"
          autocomplete="off"
          required/>
        <label for="name">Name:</label>
        <div class="icon">
          <?xml version="1.0" encoding="UTF-8"?>
          <svg
            enable-background="new 0 0 100 100"
            version="1.1"
            viewBox="0 0 100 100"
            xml:space="preserve"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g transform="translate(0 -952.36)">
              <path
                d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z"
              />
            </g>
            <rect class="st0" width="100" height="100" />
          </svg>
        </div>
      </div>



      <div class="floating-label">
        <input
          placeholder="Living Room count"
          type="number"
          name="liv_room"
          id="liv_room"
          autocomplete="off"
          required/>
        <label for="name">Name:</label>
        <div class="icon">
          <?xml version="1.0" encoding="UTF-8"?>
          <svg
            enable-background="new 0 0 100 100"
            version="1.1"
            viewBox="0 0 100 100"
            xml:space="preserve"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g transform="translate(0 -952.36)">
              <path
                d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z"
              />
            </g>
            <rect class="st0" width="100" height="100" />
          </svg>
        </div>
      </div>



      <!-- <div class="floating-label">
        <input
          placeholder="Parking count"
          type="name"
          name="parking"
          id="parking"
          autocomplete="off"
          required/>
        <label for="name">Name:</label>
        <div class="icon">
          <?xml version="1.0" encoding="UTF-8"?>
          <svg
            enable-background="new 0 0 100 100"
            version="1.1"
            viewBox="0 0 100 100"
            xml:space="preserve"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g transform="translate(0 -952.36)">
              <path
                d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z"
              />
            </g>
            <rect class="st0" width="100" height="100" />
          </svg>
        </div>
      </div> -->


      <!-- <div class="floating-label">
        <input
          placeholder="Utilities: Eg: Internet, Gas"
          type="name"
          name="utility"
          id="utility"
          autocomplete="off"
          required/>
        <label for="name">Name:</label>
        <div class="icon">
          <?xml version="1.0" encoding="UTF-8"?>
          <svg
            enable-background="new 0 0 100 100"
            version="1.1"
            viewBox="0 0 100 100"
            xml:space="preserve"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g transform="translate(0 -952.36)">
              <path
                d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z"
              />
            </g>
            <rect class="st0" width="100" height="100" />
          </svg>
        </div>
      </div> -->




     

      
      <button type="submit" name="submit">Upload Property</button>

    </form>
  </div>
</body>
