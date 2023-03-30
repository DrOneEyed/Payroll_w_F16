<!DOCTYPE HTML>
<html>
	<head>
		<title>Payroll</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
		
		<style>
			meter{
				margin: 0 auto 1.2em;
				display: block;
				width: 300px;
				height: 69px;
			}
			meter::-webkit-meter-bar {
				background: none;
				background-color: lightgrey;
				box-shadow: 0 3px 3px -3px #333 inset;
			}
			meter::-webkit-meter-optimum-value {
				box-shadow: 0 3px 3px -3px #999 inset;
				background-image: linear-gradient( 90deg, #262f3d 5%, #262f3d 5%, #262f3d 15%, #262f3d 15%, #262f3d 55%, #262f3d 55%, #262f3d 95%, #262f3d 95%, #262f3d 100%);
				background-size: 100% 100%;
			}
			.center {
				display: flex;
				justify-content: center;
				align-items: center;
				height: 69px;
			}
			.center1{
				justify-content: center;
				align-items: center;
				height: auto;
			}
		</style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="">
							<span class="icon"><img src="images/shield-2-64.ico" alt="" /></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Payroll</h1>
								<p>With F-16</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#emp">Employee</a></li>
								<li><a href="#admin">Admin</a></li>
								<li><a href="#about">About Us</a></li>
								<li><a href="#contact">Feedback</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- EMP -->
							<article id="emp">
								<h2 class="major">Login</h2>
								<label>Enter Employee ID:</label>
								<form name="form" action="#det" method="post">
									<input type="text" id="emp_id" name="emp_id" required>
									<br>
									<input type="password" id="emp_pass" name="emp_pass" required>
									<br>
									<button>Login</button>
								</form>
							</article>

							<article id="det">
								<?php include 'emp_det.php'; ?>
							</article>
							
						<!-- ADMIN -->
							<article id="admin">
								<h2 class="major">Login</h2>
								<label>Enter Admin ID:</label>
								<form name="form" action="#dash" method="post">
									<input type="text" id="admin_id" name="admin_id" required>
									<br>
									<input type="password" id="admin_pass" name="admin_pass" required>
									<br>
									<button>Login</button>
								</form>
							</article>
							
							<article id="dash">
								<h2 class="major">Admin Dashboard</h2>
								<button onclick="window.location.href='#ins';" style="padding: 12px;">Add Employee</button>
								<button onclick="window.location.href='#del';" style="padding: 12px;">Remove Employee</button>
							</article>

							<article id="ins">
								<h1>Employee Information Form</h1>
								<form action="insert_data.php" method="post">
									<h2>Personal Information</h2>
									<label>Name:</label>
									<input type="text" name="name" required><br><br>
									<label>Password:</label>
									<input type="password" name="password" required><br><br>
									<label>Address:</label>
									<input type="text" name="address" required><br><br>
									<label>Contact No:</label>
									<input type="text" name="contact_no" required><br><br>
									<label>PAN:</label>
									<input type="text" name="pan" required><br><br>

									<h2>Salary Information</h2>
									<label>Basic Salary:</label>
									<input type="number" name="basic_salary" required><br><br>
									<label>Allowances:</label>
									<input type="number" name="allowances" required><br><br>
									<label>Perquisites:</label>
									<input type="number" name="perquisites" required><br><br>
									<label>Profits:</label>
									<input type="number" name="profits" required><br><br>
									<label>Income from House Property:</label>
									<input type="number" name="income_house_property"><br><br>
									<label>Income from Capital Gains:</label>
									<input type="number" name="income_capital_gains"><br><br>
									<label>Income from Other Sources:</label>
									<input type="number" name="income_other_sources"><br><br>

									<h2>Deductions Information</h2>
									<label>Section:</label>
									<input type="text" name="section" required><br><br>
									<label>Amount:</label>
									<input type="number" name="amount" required><br><br>

									<h2>Exemptions Information</h2>
									<label>Type:</label>
									<input type="text" name="type" required><br><br>
									<label>Amount:</label>
									<input type="number" name="exemptions_amount" required><br><br>

									<h2>Tax Information</h2>
									<label>TDS on Salary:</label>
									<input type="number" name="tds_salary" required><br><br>
									<label>TDS on Other Income:</label>
									<input type="number" name="tds_other_income"><br><br>
									<label>Advance Tax:</label>
									<input type="number" name="advance_tax"><br><br>
									<label>Self Assessment Tax:</label>
									<input type="number" name="self_assessment_tax"><br><br>

									<h2>Verification Information</h2>
									<label>Declaration:</label>
									<textarea name="declaration" required></textarea><br><br>
									<label>Signature:</label>
									<input type="text" name="signature" required><br><br>
									<label>Date:</label>
									<input type="date" name="date" required><br><br>

									<input type="submit" value="Submit">
								</form>
							</article>

							<article id="del">
								<h2 class="major">Delete Employee</h2>
								<form name="form" action="del_data.php" method="post">
									<input type="text" id="emp_id" name="emp_id" required>
									<br>
									<button>Delete</button>
								</form>
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">About Us</h2>
								<p>We are a team which is passionate about resolving social issues through our programming endeavours. Our newest project takes in account for monitoring all the fradulent NGOs used for money laundering, utilising funds donated for a social cause. Our project, NGOGuard utilises various data points to rate various NGOs for legitimacy.</p>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Help Us Improve</h2>
								<form method="post" action="mailto:profitorigin8@gmail.com">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy;</a></p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
