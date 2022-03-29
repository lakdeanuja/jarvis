<?php 
session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }


                    require_once "config.php";
                    ini_set('log_errors','Off');


    // if(isset($_POST['search'])){



    //     $fromd =  $_POST['from'];
    //     $tod =  $_POST['to'];


    //     $query= mysqli_query($link, "SELECT * from hrbpconnect WHERE LWD  BETWEEN '$fromd' AND '$tod' ORDER BY LWD DESC");
    //     $count = mysqli_num_rows($query);
    //     echo $count;

    // }
?>

<<<<<<< Updated upstream
<div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-custom navbar-mainbg">

          <a class="navbar-brand navbar-logo" href="#"><img src="rolefinder\images\nseit.png" alt=""><span><img src="rolefinder\images\NSE.png" alt="" height="70px" width="180px"></span></a>
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
      <!DOCTYPE html>
=======

<!DOCTYPE html>
>>>>>>> Stashed changes


<html lang="en">
<style>
         input[type=submit] {
            background-color: #0056b3;
            border: none;
            text-decoration: none;
            color: white;
<<<<<<< Updated upstream
            padding: 10px 10px;
            margin: 10px 10px;
=======
            padding: 5px 5px;
            margin: 5px 5px;
>>>>>>> Stashed changes
            cursor: pointer;
         }
      </style>

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style> -->
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
<<<<<<< Updated upstream
        <div class="container-fluid">
=======
        <div class="container-fluid"><br>
        <img src="image\nseit.png" height="90px" width="80px"><span><img src="image\NSE.png" height="80px" width="90px"></span>
        <h3>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
        
        <b><font color="#0056b3">ATTRITION DASHBOARD</font></b></h3>
>>>>>>> Stashed changes
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Attrition Dashboard</h2>
                        <!-- <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a> -->
                    </div>
                <form method="post">
                <label for="lwd">From </label>
                <input type="date"  value="2020-01-01"  name="from">
                <label for="lwd">To </label>
                <input type="date" value="2025-01-01" name="to">
                <input type="submit" name="search" value="Show Records">
                </form>

                <br>
                <!-- <form>


                <input type="text"  placeholder="Enter Employee Name"  name="ename">
                        <!-- <a ><i class="fa fa-search"></i> Search</a> -->
                        <!-- <input type="submit" name="sname" value="Show Records" > -->


                <!-- </form>  -->
                    <?php
                    // Include config file
                    require_once "config.php";


                    // if(empty($_POST['sname'])){

                    //     $ename="";
    
                    // }

                    // else{

                    //     $ename =  $_POST['ename'];

                    //     echo $ename;

                    // }


                    if(empty($_POST['search'])){

                        $fromd="";
                        $tod="";
    
                    }

                    else{

                        $fromd =  $_POST['from'];
                        $tod =  $_POST['to'];

                    }
                // echo $fromd,$tod;


                if  (empty($fromd)){

                    // echo "fromd null";

                    if  (empty($tod)){

                        // echo "tod null";
                       $username=  $_SESSION["username"];

                       $admin = "admin@nseit.com";
                       if(strcmp($username,$admin)){

                        $sql = "SELECT * from hrbpconnect  WHERE HRBP_Email = '$username'  ORDER BY LWD DESC ";



                       }

                       else{
                        $sql = "SELECT * from hrbpconnect ORDER BY LWD DESC ";


                       }
                       


                    }
    
                }

                else{

                    $username=  $_SESSION["username"];

                    $sql = "SELECT * from hrbpconnect WHERE LWD  BETWEEN '$fromd' AND '$tod' AND HRBP_Email = '$username' ";

                }

                
                
                    // Attempt select query execution
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="styled-table">';
                                echo "<thead>";
                                    echo "<tr>";
                                        // echo "<th>#</th>";
                                        echo "<th>Employee Code</th>";

                                        echo "<th>Employee Name</th>";
                                        echo "<th>Location Name</th>";
                                        echo "<th>Grade</th>";
                                        echo "<th>Department </th>";
                                        echo "<th>Separation Status </th>";
                                        echo "<th>Last Working Day </th>";
                                        echo "<th>Resignation Status </th>";

                                        echo "<th>Gender </th>";
                                        echo "<th>HR SPOC </th>";
                                        echo "<th> Separation Reason </th>";
                                        echo "<th> Separation Sub Reason </th>";
                                        echo "<th> HRBP NomenClature </th>";
                                        echo "<th> HRBP Bucketing </th>";
                                        echo "<th> Remarks </th>";

                                        echo "<th> Edit </th>";






                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['EMPLOYEE_ID'] . "</td>";
                                        echo "<td>" . $row['EMPLOYEE_NAME'] . "</td>";
                                        echo "<td>" . $row['LOCATION_NAME'] . "</td>";
                                        echo "<td>" . $row['GRADE_NAME'] . "</td>";
                                        echo "<td>" . $row['DEPARTMENT_NAME'] . "</td>";
                                        echo "<td>" . $row['SEPARATION_STATUS'] . "</td>";

                                        echo "<td>" . $row['LWD'] . "</td>";
                                        echo "<td>" . $row['Resignation_Status'] . "</td>";
                                        echo "<td>" . $row['Gender'] . "</td>";
                                        echo "<td>" . $row['HR_SPOC'] . "</td>";
                                        echo "<td>" . $row['Seperation_Reason'] . "</td>";
                                        echo "<td>" . $row['Seperation_Sub_Reason'] . "</td>";
                                        echo "<td>" . $row['HRBP_Nomenclature'] . "</td>";
                                        echo "<td>" . $row['HRBP_Bucketing'] . "</td>";
                                        echo "<td>" . $row['Remarks'] . "</td>";










                                        echo "<td>";
                                            // echo '<a href="read.php?EMPLOYEE_ID='. $row['EMPLOYEE_ID'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['EMPLOYEE_ID'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-comment"></span></a>';
                                            // echo '<a href="delete.php?EMPLOYEE_ID='. $row['EMPLOYEE_ID'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>Please Select A Date range.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>






      
        </div>
      </div>
    </section>
  </div>




























</body>
</html>