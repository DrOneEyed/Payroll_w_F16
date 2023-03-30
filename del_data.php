<?php
    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        $id = $_POST['emp_id'];
        $id = intval($id);
        $conn = mysqli_connect("localhost", "root", "", "payroll_w_f16");

        if($conn===false)
        {
            die("ERROR: Could Not Connect To DB" . mysqli_connect_error());
        }
        
        $sql = "DROP TABLE salary, deductions, exemptions, tax, verification WHERE emp_id = '$id's";
        if (mysqli_query($conn, $sql)) {
        echo "Tables dropped successfully.";
        } else {
        echo "Error dropping tables: " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>