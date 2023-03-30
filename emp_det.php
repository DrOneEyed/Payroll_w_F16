<?php
    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        $id = $_POST['emp_id'];
        $id = intval($id);
        $pass = $_POST['emp_pass'];
        $conn = mysqli_connect("localhost", "root", "", "payroll_w_f16");
        if($conn===false)
        {
            die("ERROR: Could Not Connect To DB" . mysqli_connect_error());
        }
        $sql1= "SELECT * FROM employee WHERE emp_id = '$id' AND password = '$pass'";
        $result = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result) > 0) {
            $emp = mysqli_fetch_array($result);
            $sql2 = mysqli_query($conn, "SELECT * FROM salary WHERE emp_id = '$id'");
            $sal = mysqli_fetch_array($sql2);
            echo "<table>";
                echo "<tr>";
                    echo "<th>Name</th>";
                    echo "<td>" . $emp['name'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>EMP ID</th>";
                    echo "<td>" . $emp['emp_id'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>Address</th>";
                    echo "<td>" . $emp['address'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>Contact Number</th>";
                    echo "<td>" . $emp['contact_no'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>Pan Number</th>";
                    echo "<td>" . $emp['pan'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>Income</th>";
                    echo "<td>&#8377;" . $sal['total_income'] . "</td>";
                echo "</tr>";
            echo "</table>";

            echo '<form action="f_16_pdf.php" method="post">
                    <input type="text" id="emp_id" name="emp_id" required>
                    <br>
                    <button type="submit">Generate F-16 Form</button>
                </form>';
        } else {
            echo "<h2>No User Found</h2>";
        }
        mysqli_close($conn);
    }
    
?>