<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    $name = filter_input(INPUT_POST, 'nc', FILTER_SANITIZE_STRING);

    $address = filter_input(INPUT_POST, 'bc', FILTER_SANITIZE_STRING);

    
    $salary = trim($_POST["rk"]);
 
     $salary = str_replace("'","\'",$salary);


    $salary = str_replace("'","\'",$salary);

    echo $salary;


    // echo $name,$address,$salary;

    $link = mysqli_connect("localhost", "root", "", "jarvis");
 
// Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    

    $sql = "UPDATE hrbpconnect SET HRBP_Nomenclature = '$name', HRBP_Bucketing = '$address', Remarks = '$salary' WHERE EMPLOYEE_ID = '$id';";

    // Attempt insert query execution
    if(mysqli_query($link, $sql)){
        echo '<script>alert("Data Updated Successfully.")</script>';
        sleep(3);



    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    
    // Close connection
    mysqli_close($link);



} else{
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        $id =  trim($_GET["id"]);
        
        $sql = "SELECT * FROM hrbpconnect WHERE EMPLOYEE_ID = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_id);
            
            $param_id = $id;
            
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $name = $row["HRBP_Nomenclature"];
                    $address = $row["HRBP_Bucketing"];
                    $salary = $row["Remarks"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .wrapper {
        width: 600px;
        margin: 0 auto;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label for="nc">HRBP Nomenclature</label>

                            <select name="nc" id="nc" class="form-control ">
                                <option value="Personal Reason">Personal Reason</option>
                                <option value="Location Movement">Location Movement</option>
                                <option value="Project Ramp down">Project Ramp down</option>
                                <option value="Converted to PE">Converted to PE</option>
                                <option value="Absconding">Absconding</option>
                                <option value="Better Compensation and Role">Better Compensation and Role</option>
                                <option value="Better Compensation">Better Compensation</option>
                                <option value="Better Opportunity">Better Opportunity</option>
                                <option value="Performance Case">Performance Case</option>
                                <option value="Marriage">Marriage</option>
                                <option value="Mundane Work">Mundane Work</option>
                                <option value="Health Reason">Health Reason</option>
                                <option value="Business Initiative">Business Initiative</option>
                                <option value="Client absorption">Client absorption</option>
                                <option value="Client Rebadging">Client Rebadging</option>
                                <option value="Better Role">Better Role</option>
                                <option value="Post Maternity ">Post Maternity </option>
                                <option value="Contract Renewed">Contract Renewed</option>
                                <option value="Workstress">Workstress</option>
                                <option value="Higher Studies">Higher Studies</option>
                                <option value="Death Case">Death Case</option>
                                <option value="Change in career path">Change in career path</option>
                                <option value="Contract End">Contract End  </option>
                                <!-- <option value="Personal Reason">Workstress</option> -->
                                <!-- <option value="Workstress">Workstress</option> -->
                                <!-- <option value="Workstress">Workstress</option> -->



                            </select>

                            
                        </div>
                        <div class="form-group">

                        <label for="bc">HRBP Bucketing</label>

<select name="bc" id="bc" class="form-control ">
    <option value="Personal Reason">Personal Reason</option>
    <option value="Location Movement">Relocation</option>
    <option value="Project Ramp down">Project Ramp down</option>
    <option value="Contract Conversion / Renewal">Contract Conversion / Renewal</option>
    <option value="Absconding">Absconding</option>
    <option value="Better Role">Better Role</option>
    <option value="Better Compensation">Better Compensation</option>
    <option value="Better Opportunity">Better Opportunity</option>
    <option value="HR Action">HR Action</option>
    <option value="Marriage">Marriage</option>
    <option value="Lack of opportunities for advancements">Lack of opportunities for advancements</option>
    <option value="Health">Health</option>
    <option value="HR action">HR action</option>
    <option value="Unsatisfactory Rating">Unsatisfactory Rating</option>
    <option value="Issue with Manager">Issue with Manager</option>
    <option value="Not able to adapt to Work Culture">Not able to adapt to Work Culture</option>
    <option value="Client Micromanagement"> Client Micromanagement</option>
    <option value="Manager Micromanagement">Manager Micromanagement</option>
    <option value="High Workload">High Workload</option>
    <option value="Continous weekend working">Continous weekend working</option>
    <!-- <option value="Death Case">Death Case</option>
    <option value="Change in career path">Change in career path</option>
    <option value="Contract End">Contract End   </option> -->
    <!-- <option value="Personal Reason">Workstress</option> -->
    <!-- <option value="Workstress">Workstress</option> -->
    <!-- <option value="Workstress">Workstress</option> -->



</select>

                            <!-- <input name="bc" class="form-control ">Recent : 
                            </input> -->
                        </div>
                        <div class="form-group">
                            <label>Remarks</label>
                            <textarea name="rk" class="form-control "><?php echo $salary; ?></textarea>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="hrbp.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
