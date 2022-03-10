<?php 
session_start();

function relax() {
    ;
}
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;


}

else {

    if ($_SESSION["roles"] == 3){

               header("location: bgvview.php");
    
   }

    // if($_SESSION["roles"] == 5){
    
    //     relax();
    // }

    // else {


    //     if ($_SESSION["roles"] == 2){

    //         header("location: rview.php");

    //     }

    //     elseif ($_SESSION["roles"] == 3){

    //         header("location: bgvview.php");

    //     }
    //     // echo $roles;

    // }
}

                    require_once "../config.php";
                    ini_set('log_errors','Off');



?>


<!DOCTYPE html>


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
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style.css">

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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">BGV Dashboard - Recruiters</h2>
                        <a href="../logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>

                        <!-- <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a> -->
                    </div>
                <!-- <form method="post">
                <label for="lwd">From </label>
                <input type="date"  value="2020-01-01"  name="from">
                <label for="lwd">To </label>
                <input type="date" value="2025-01-01" name="to">
                <input type="submit" name="search" value="Show Records">
                </form> -->

                <br>
                <!-- <form>


                <input type="text"  placeholder="Enter Employee Name"  name="ename">
                        <!-- <a ><i class="fa fa-search"></i> Search</a> -->
                        <!-- <input type="submit" name="sname" value="Show Records" > -->


                <!-- </form>  -->
                    <?php
                    // Include config file
                    require_once "../config.php";


                    // if(empty($_POST['sname'])){

                    //     $ename="";
    
                    // }

                    // else{

                    //     $ename =  $_POST['ename'];

                    //     echo $ename;

                    // }


                //     if(empty($_POST['search'])){

                //         $fromd="";
                //         $tod="";
    
                //     }

                //     else{

                //         $fromd =  $_POST['from'];
                //         $tod =  $_POST['to'];

                //     }
                // // echo $fromd,$tod;


                // if  (empty($fromd)){

                //     // echo "fromd null";

                //     if  (empty($tod)){

                //         // echo "tod null";
                //        $username=  $_SESSION["username"];
                //         $sql = "SELECT * from hrbpconnect  WHERE HRBP_Email = '$username'  ORDER BY LWD DESC ";


                //     }
    
                // }

                // else{

                //     $username=  $_SESSION["username"];

                //     $sql = "SELECT * from hrbpconnect WHERE LWD  BETWEEN '$fromd' AND '$tod' AND HRBP_Email = '$username' ";

                // }

                

                                $sql = "SELECT * from ytj";

                
                    // Attempt select query execution
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="styled-table">';
                                echo "<thead>";
                                    echo "<tr>";
                                        // echo "<th>#</th>";
                                        echo "<th>Employee Code</th>";

                                        echo "<th>Offer Status </th>";
                                        echo "<th>Joining Status </th>";
                                        echo "<th>Employeent  Status </th>";

                                        echo "<th>Employee Name </th>";

                                        echo "<th> Recruiter Name </th>";
                                        echo "<th> DOJ </th>";
                                        echo "<th> Reporting Manager </th>";
                                        echo "<th> Delivery Head  </th>";

                                        echo "<th> Documentation Status </th>";
                                        echo "<th> Documentation Remarks </th>";
                                        // echo "<th> BGV Initiation Date </th>";
                                        // echo "<th> Vendor Reference No. </th>";

                                        // echo "<th> BGV Status </th>";
                                        // echo "<th> Vendor Name </th>";

                                        // echo "<th> BGV TAT </th>";

                                        // echo "<th> BGV Closure Date </th>";

                                        // echo "<th> BGV Report Status (R/G/O) </th>";
                                        // echo "<th> BGV Ageing 
                                        // </th>";


                                        echo "<th> Update - Recruiter </th>";











                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['Emp_Id'] . "</td>";

                                        // echo "<td>" . $row['Offer_Date'] . "</td>";
                                        // echo "<td>" . $row['Aadhar'] . "</td>";
                                        // echo "<td>" . $row['PAN'] . "</td>";
                                        echo "<td>" . $row['Offer_Status'] . "</td>";
                                        echo "<td>" . $row['Joining_status'] . "</td>";

                                        echo "<td>" . $row['Employement_Status'] . "</td>";
                                        echo "<td>" . $row['Employee Name'] . "</td>";
                                        // echo "<td>" . $row['Type_of_Hire'] . "</td>";
                                        echo "<td>" . $row['Recruiter_Name'] . "</td>";
                                        // echo "<td>" . $row['Dept'] . "</td>";
                                        // echo "<td>" . $row['Client'] . "</td>";
                                        echo "<td>" . $row['DOJ'] . "</td>";
                                        echo "<td>" . $row['RM'] . "</td>";
                                        echo "<td>" . $row['DH'] . "</td>";
                                        echo "<td>" . $row['Documentation_status'] . "</td>";
                                        echo "<td>" . $row['Documentation_remarks'] . "</td>";

                                        // echo "<td>" . $row['BGV_initiation_Date'] . "</td>";
                                        // echo "<td>" . $row['Vendor_ref_No'] . "</td>";
                                        // echo "<td>" . $row['BGV_status'] . "</td>";
                                        // echo "<td>" . $row['Vendor_Name'] . "</td>";
                                        // echo "<td>" . $row['TAT'] . "</td>";
                                        // echo "<td>" . $row['BGV_closure_Date'] . "</td>";
                                        // echo "<td>" . $row['BGV_Report_StatusRGO'] . "</td>";
                                        // echo "<td>" . $row['BGV_Ageing'] . "</td>";
                                        // echo "<td>" . $row['Documentation_remarks'] . "</td>";
                                        // echo "<td>" . $row['Documentation_remarks'] . "</td>";
                                        // echo "<td>" . $row['Documentation_remarks'] . "</td>";
                                        // echo "<td>" . $row['Documentation_remarks'] . "</td>";
                                        // echo "<td>" . $row['Documentation_remarks'] . "</td>";
                                        // echo "<td>" . $row['Documentation_remarks'] . "</td>";











                                        echo "<td>";
                                            // echo '<a href="read.php?EMPLOYEE_ID='. $row['EMPLOYEE_ID'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="updateddashboardrecruiter.php?id='. $row['Emp_Id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-comment"></span></a>';
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
</body>

</html>