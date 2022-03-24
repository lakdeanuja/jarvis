


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
    <title>Rolefinder</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Jarvis' RoleFinder</h2>
                        <!-- <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a> -->
                    </div>
                <br>
                <!-- <form>


                <input type="text"  placeholder="Enter Employee Name"  name="ename">
                        <!-- <a ><i class="fa fa-search"></i> Search</a> -->
                        <!-- <input type="submit" name="sname" value="Show Records" > -->


                <!-- </form>  -->
                    <?php
                    // Include config file
                    require_once "../config.php";


                    $bu = filter_input(INPUT_POST, 'bu', FILTER_SANITIZE_STRING);


                    $dept = filter_input(INPUT_POST, 'dept', FILTER_SANITIZE_STRING);


                    $desgn = filter_input(INPUT_POST, 'desgn', FILTER_SANITIZE_STRING);


                    $grade = filter_input(INPUT_POST, 'grade', FILTER_SANITIZE_STRING);






                    $sql = "SELECT *  FROM `dependentlist` WHERE `bu` LIKE '$bu' AND `dept` LIKE '$dept' AND `desgn` LIKE '$desgn' AND `grade` LIKE '$grade';";


                
                
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
                </div>
            </div>        
        </div>
    </div>
</body>
</html>