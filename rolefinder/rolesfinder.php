<!DOCTYPE html>
<html>

    <html lang="en">
        <style>
                 input[type=submit] {
                    background-color: #009879;
                    border: none;
                    text-decoration: none;
                    color: white;
                    padding: 20px 20px;
                    margin: 20px 20px;
                    cursor: pointer;
                 }
              </style>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>NSE-IT</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <style>
    .wrapper{
        width: 600px;
        margin: 0 auto;
    }
    table tr th td:last-child{
        width: 120px;
    }
</style>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
</script>


</head>

<body>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-custom navbar-mainbg">

          <a class="navbar-brand navbar-logo" href="#"><img src="images/nseit.png" alt=""><span><img src="images/NSE.png" alt="" height="70px" width="180px"></span></a>
          <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars text-white"></i>
          </button>
          <div class=" navbar" id="navbarSupportedContent">

            <!--a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>HOME</a>
            <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>HOME</a-->

          </div>
      </nav>
          
      </div>
    </header><br><br>
    <section class="hero_section ">
      <div class="hero-container container">
        
        <div class="hero_detail-box">
          <h3>
            Welcome to <br>
            
          </h3>
          <h1>
            ROLE-FINDER
          </h1><br><br>
        
          <div class="hero_btn-continer">
            <a href="" class="call_to-btn btn_white-border">
              <span>
                BACK TO HOME
              </span>
              <img src="images/prev.png" alt="">
            </a>
          </div>
        </div>
        <div class="hero_img-container">
          <div>
          <!-- </form>  -->
          
          <div style = "position:relative; left:180px; top:2px; background-color:rgb(255, 255, 255);">
          <?php
          // Include config file
          require_once "../config.php";


          $bu = filter_input(INPUT_POST, 'bu', FILTER_SANITIZE_STRING);


          $dept = filter_input(INPUT_POST, 'dept', FILTER_SANITIZE_STRING);


          $desgn = filter_input(INPUT_POST, 'desgn', FILTER_SANITIZE_STRING);


          $grade = filter_input(INPUT_POST, 'grade', FILTER_SANITIZE_STRING);






          $sql = "SELECT *  FROM `dependentlist` WHERE `bu` LIKE '$bu' AND `dept` LIKE '$dept' AND `desgn` LIKE '$desgn';";


      
      
          // Attempt select query execution
          if($result = mysqli_query($link, $sql)){
              if(mysqli_num_rows($result) > 0){   
                  echo '<table class="styled-table">';
                      echo "<thead>";
                          echo "<tr>";
                              // echo "<th>#</th>";
                              echo "<th>BU</th>";

                              echo "<th>Department</th>";
                              echo "<th>Designation</th>";
                              echo "<th>Grade</th>";
                              echo "<th>Role </th>";
                          echo "</tr>";
                      echo "</thead>";
                      echo "<tbody>";
                      while($row = mysqli_fetch_array($result)){
                          echo "<tr>";
                              echo "<td>" . $row['bu'] . "</td>";
                              echo "<td>" . $row['dept'] . "</td>";
                              echo "<td>" . $row['desgn'] . "</td>";
                              echo "<td>" . $row['grade'] . "</td>";
                              echo "<td>" . $row['role'] . "</td>";

                          echo "</tr>";
                      }
                      echo "</tbody>";                            
                  echo "</table>";
                  mysqli_free_result($result);
              } else{
                  echo '<div class="alert alert-danger"><em>No Combination Found , Please contact the admin to create role..</em></div>';
              }
          } else{
              echo "No Combination Found , Please contact the admin to create role..";
          }

          // Close connection
          mysqli_close($link);
          ?>



          
            <!--img src="images/hero.png" alt="" class="img-fluid"--->
        </div>
        </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end header section -->



  <end landing section -->




  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      NSE-IT &copy; 2022 All Rights Reserved By
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
</body>

</html>