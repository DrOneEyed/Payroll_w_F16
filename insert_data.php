<?php
    $name = $_POST['name'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $pan = $_POST['pan'];
    $basic_salary = $_POST['basic_salary'];
    $allowances = $_POST['allowances'];
    $perquisites = $_POST['perquisites'];
    $profits = $_POST['profits'];
    $income_house_property = $_POST['income_house_property'];
    $income_capital_gains = $_POST['income_capital_gains'];
    $income_other_sources = $_POST['income_other_sources'];
    $section = $_POST['section'];
    $amount = $_POST['amount'];
    $type = $_POST['type'];
    $exemptions_amount = $_POST['exemptions_amount'];
    $tds_salary = $_POST['tds_salary'];
    $tds_other_income = $_POST['tds_other_income'];
    $advance_tax = $_POST['advance_tax'];
    $self_assessment_tax = $_POST['self_assessment_tax'];
    $declaration = $_POST['declaration'];
    $signature = $_POST['signature'];
    $date = $_POST['date'];

    $conn = mysqli_connect("localhost", "root", "", "payroll_w_f16");
    if(!$conn)
    {
        die("ERROR: Could Not Connect To DB" . mysqli_connect_error());
    }

    $result = mysqli_query($mysqli, "SELECT MAX(emp_id) FROM employee;");
    $row = mysqli_fetch_array($result);
    $max_emp_id = $row[0] + 1;

    $sql = "INSERT INTO employee (emp_id, name, password, address, contact_no, pan) 
    VALUES ('$max_emp_id', $name', '$password', '$address', '$contact_no', '$pan')";
    
    $sql1 = "INSERT INTO salary (emp_id, basic_salary, allowances, perquisites, profits, income_house_property, income_capital_gains, income_other_sources, total_income) 
    VALUES('$max_emp_id', '$basic_salary', '$allowances', '$perquisites', '$profits', '$income_house_property', '$income_capital_gains', '$income_other_sources', '$total_income')";
    
    $sql2 = "INSERT INTO deductions (emp_id, section, amount)
    VALUES ('$max_emp_id', '$section', '$amount')";

    $sql3 = "INSERT INTO exemptions (emp_id, type, amount)
    VALUES ('$max_emp_id', '$type', '$exemptions_amount')";
    
    $sql4 = "INSERT INTO tax (emp_id, tds_salary, tds_other_income, advance_tax, self_assessment_tax)
    VALUES('$max_emp_id', '$tds_salary', '$tds_other_income', '$advance_tax', '$self_assessment_tax')";
    
    $sql5 = "INSERT INTO verification (emp_id, declaration, signature, date)
    VALUES ('$max_emp_id', '$declaration', '$signature', '$date')";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>New record created successfully</h2>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
