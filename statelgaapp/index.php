<?php

include('dbconfig.php');

$sql = "SELECT `StateID`, `StateName`, `Status` FROM `state`";
    $mystate_result = $conn->query($sql);

    if (isset($_POST['submit'])) {
        $cstate = mysqli_real_escape_string($conn, $_POST['cstate']);
        $cstatus = mysqli_real_escape_string($conn, $_POST['cstatus']);
        
    
        $query = "UPDATE `state` SET `Status`='Active' WHERE `StateID`= '$cstate'";
    
        if ($query_run = mysqli_query($conn, $query)) {
    
            $message2 = "State has been Updated Successfully";
            echo "<script type='text/javascript'>alert('$message2');</script>";
        } else {
            echo 'ERROR: ' . mysqli_error($conn);
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row">
    <h3>Upload State Status Here</h3><br>

    <div class="col-md-6">

    <form action="index.php" method="post">
    <label for="state">State</label>
    <select name="cstate" id="" class="form-control">
        <option value="">Select State</option>
        <?php
                                                
             while($row = $mystate_result->fetch_assoc()) {
                $mystate = $row['StateName'];
                $mystateid = $row['StateID'];
                                                   
                echo '<option value="'.$mystateid.'">'.$mystate.'</option>';
            }
                                           
       ?>
    </select><br>

    <label for="">Status</label>
    <select name="cstatus" id="" class="form-control">
        <option value="Null">Null</option>
        <option value="Active">Active</option>
    </select><br>

    <button type="submit" name="submit" class="btn btn-primary">Update</button>
    
    </form>
    </div>
    </div>
</div>
</body>
</html>