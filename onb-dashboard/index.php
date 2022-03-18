<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'onbdashboard');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>



<!doctype html>


<html lang="en">
  <head>
  	<title>Documentation Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Documentation dashboard</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center mb-4"></h4>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr width="30px" height="30px">
							<th>List</th>
							<th>October 2021</th>
							<th>November 2021</th>
							<th>December 2021</th>
							<th>January 2022</th>
							<th>February 2022</th>
							<th>March 2022</th>
											  </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <th scope="row" class="scope" >Count of Joinees (Active)</th>
<?php 


$link = mysqli_connect("localhost", "root", "", "onbdashboard");
 
// Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    

    function gettotal($month) {

        $link = mysqli_connect("localhost", "root", "", "onbdashboard");



        echo $month;
        
        $sql = "SELECT count( leavers ) as total FROM hr where doj like '$month' and leavers=\"active\";";

        if($result = mysqli_query($link, $sql)){

            while($row = mysqli_fetch_array($result)){

                    $active = $row['total'];

                    echo "active";
                    echo $active;

            }    
    
    
    }


    else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }




return $active;


 }
      





$finalpc = gettotal("%Oct-21");

echo "<td>" . $finalpc. "</td>";


    // Close connection
    mysqli_close($link);



    ?>







					        <td></td>
							<td></td>
					        <td></td>
					        <td></td>

					        <!-- <td><a href="#" class="btn btn-primary">Sign Up</a></td> -->
					      </tr>
							<tr>
								<th scope="row" class="scope" >Count of Joinees (Active , Inactive)</th>
	
								<td> 102 </th>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
	
								<!-- <td><a href="#" class="btn btn-primary">Sign Up</a></td> -->
							  </tr>
	
					      </tr>
					      <tr>
					        <th scope="row" class="scope" >HDFC Form</th>

					        <td>81</th>
					        <td></td>
					        <td></td>
					        <td></td>
							<td></td>
					        <td></td>
					        <td></td>

					      </tr>

					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
