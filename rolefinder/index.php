<!DOCTYPE html>
<html>

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
          <script>
            var subjectObject = {
              "DEX": {
                "Business Operation": ["Business Analyst", "Junior Engineer", "Vice President", ],
                "Business Solutions": ["Manager", "Senior Executive"],
                "Business Support": ["Officer", "Executive", "Senior Executive", "Assistant Manager", ],
                "Channel": ["Executive", "Team lead", "Assistant Manager", "Channel Manager","Senior Manager", ],
                "Content" : ["Officer","Senior Officer","Executive","Associate",],
                "DEX" : ["Executive Vice President and Chief Business Officer"],
                "Exam Result Processing" : ["Officer","Associate Test Analyst","Engineer","Senior Officer","Senior Engineer","Senior Executive","Deputy General Manager","Manager",],
                "HO Operations" : ["Senior Officer","Executive","Assistant Manager","General Manager","Deputy General Manager",],
                "Quality and Training" : ["Trainee","Executive","Senior Executive","Assistant Manager","Leader","Manager",],
                "Regional IT" : ["Consultant","Engineer","Senior Engineer","Team lead","Associate","Project Lead",],
                "Sales" : ["Deputy General Manager","Assistant Vice President","Manager",],
                "Vigilence" : ["Officer" , "Associate" , "Manager"]    
                    
                    
                    
                    },
              "Digital": {
                "CCS": ["Junior Engineer","Business Analyst","Asst. Team Lead","Business Analyst","Team lead","Senior Manager",],
                "Digital Delivery": ["Consultant","Trainee Associate Production Support","Associate Systems Analyst","Associate Systems Analyst","Associate Test Analyst","Business Analyst","Jr. Engineer","Junior Engineer","Officer","Traine Associate Test Analyst","Trainee Associate Application Support","Associate Systems Analyst","Associate Test Analyst","Business Analyst","Data Analyst","Engineer","Senior Executive","Senior Officer","UI Developer","Associate Systems Analyst","Associate Test Analyst","Business Analyst","Engineer","Executive","Senior Engineer","Senior Sales Manager","UX Designer","Account Manager","Business Analyst","Senior Business Analyst","Senior Consultant","Senior Executive","Senior UI Designer","Sr. Quality Analyst","Technical Lead","Test Analyst","Business Analyst","Leader","Manager","Module Lead","Officer","Senior Business Analyst","Technical Lead","Delivery Leader","Vice President","Vice President II - Digital","Vice President","Manager","Senior Business Analyst","Deputy General Manager","Senior Sales Manager","Deputy General Manager","Account Manager","Assistant Manager","Business Analyst","Business Analyst","Technical Lead",],
                "Digital Sales": ["Officer","Senior Engineer","Officer","Manager - Bid Management","AVP II - Bid Management",],
                "Infrastructure" : ["Consultant","Trainee Associate Production Support","Associate Systems Analyst","Junior Engineer","Trainee Associate Production Support","Engineer","Associate Systems Analyst","Senior Systems Analyst","Trainee Associate Production Support","Associate Systems Analyst","Project Manager","Practice Lead","Project Manager",],
            
            
            
              },
            
            
              "Support" : {
                "Accounts Receivables" : ["Executive","Sr.Officer","Assistant Manager",],
                "Admin" : ["Office Assistant","Senior Driver","Executive","Secretary","Senior Executive","Associate","Assistant Manager","Senior Executive",],
                "Business Excellence" : ["Engineer"],
                "CEO's Office" : ["Executive Vice Chairman"], 
                "DEX Development" : ["Engineer" , "Senior Executive" , "Project Manager" ] , 
                "Finance And Accounts" : ["Sr. Vice President II & Chief Financial Officer" , "Senior Manager" , "Deputy General Manager"],
                "GST" : ["GST"],
                "Human Resource Department" : ["Head HR"],
                "IT and Infra" : ["Engineer","Junior Engineer","Cyber Security Consultant","Senior Engineer","Technical Lead","Project Manager","Project Lead","Project Manager",],
                "Legal & Secretarial" : ["Executive","Manager","Manager & Company Secretary",],
                "MIS" : ["Assistant Manager"],
                "Payroll" : ["Senior Executive" , "Associate" ],
                "Production Support" : ["Business Analyst","Associate Test Analyst","Test Analyst","Leader","Senior Project Manager",],
                "Service Delivery" : ["Business Analyst","Officer","Trainee Associate Systems Analyst","Senior Officer","Executive","Business HR - Service Delivery","Senior Executive","Assistant Manager","Associate","Manager","Senior Manager","Business HR - Service Delivery",],
                "Strategy" : ["Senior Consultant"],
                "Talent Acquisition" : ["Head Talent Acquisition","Leader","Senior Executive","Deputy General Manager","Associate","Senior Manager","Head Talent Acquisition","Assistant Manager","Senior Manager",],
                "Technology & Innovation" : ["Chief Technology Officer"],
            
              }
            
              
            }
            window.onload = function() {
              var subjectSel = document.getElementById("bu");
              var topicSel = document.getElementById("dept");
              var chapterSel = document.getElementById("desgn");
              for (var x in subjectObject) {
                subjectSel.options[subjectSel.options.length] = new Option(x, x);
            
              }
              subjectSel.onchange = function() {
                //empty Chapters- and Topics- dropdowns
                chapterSel.length = 1;
                topicSel.length = 1;
                //display correct values
                for (var y in subjectObject[this.value]) {
                  topicSel.options[topicSel.options.length] = new Option(y, y);
                }
              }
            
              topicSel.onchange = function() {
                //empty Chapters dropdown
                chapterSel.length = 1;
                //display correct values
                var z = subjectObject[subjectSel.value][this.value];
                console.log(z);
                console.log(topicSel)
            
                for (var i = 0; i < z.length; i++) {
                  chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
            
                }
              }
            }
            </script>
            </head>   
            <body>
            
            <h1></h1>
            <div style = "position:relative; left:180px; top:2px; background-color:rgb(255, 255, 255);">
            <form name="form1" id="form1"  method = "POST" action="rolefinder.php">
            <div class="row">
              <div class="col-lg-6">
                <h5><b>BU: </b></h5>
                <select name="bu" id="bu" class="custom-select" style="">
                  <option value="" selected="selected">Select BU</option>
                </select>
                <br><br>
                <h5><b>DEPARTMENT: </b></h5> <select name="dept" id="dept">
                  <option value="" selected="selected">Please select BU First</option>
                </select>
                <br><br>
                <h5><b>DESIGNATION: </b></h5> <select name="desgn" id="desgn">
                  <option value="" selected="selected">Please select Department first</option>
                </select>
              </div>
            </div> 
            
              <!--Grade: <select name="grade" id="grade">
              <option value="C10"selected="selected">C10</option>
            <option value="CEO"selected="selected">CEO</option>
            <option value="Con"selected="selected">Con</option>
            <option value="E10"selected="selected">E10</option>
            <option value="E11"selected="selected">E11</option>
            <option value="E20"selected="selected">E20</option>
            <option value="E21"selected="selected">E21</option>
            <option value="E30"selected="selected">E30</option>
            <option value="E40"selected="selected">E40</option>
            <option value="EVC"selected="selected">EVC</option>
            <option value="F00"selected="selected">F00</option>
            <option value="L10"selected="selected">L10</option>
            <option value="L15"selected="selected">L15</option>
            <option value="L16"selected="selected">L16</option>
            <option value="L20"selected="selected">L20</option>
            <option value="L30"selected="selected">L30</option>
            <option value="M10"selected="selected">M10</option>
            <option value="M20"selected="selected">M20</option>
            <option value="M30"selected="selected">M30</option>
            <option value="S10"selected="selected">S10</option>
            
              </select>-->
            
            
            
              <br><br>
                 <div class="hero_btn-continer">
            <input type="submit" value="Submit" class="call_to-btn btn_white-border">
          </input>
          </div>
              <!--input type="submit" value="Submit"-->  
            </form>




          
            <!--img src="images/hero.png" alt="" class="img-fluid"--->
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