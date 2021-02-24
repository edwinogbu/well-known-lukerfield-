<?php 
	if(isset($_POST['loanUpload'])){
	
		$passport = $_FILES['passport']['name'];
		$passport_temp = $_FILES['passport']['tmp_name'];

		$how_much = $_POST['how_much'];

		$how_long = $_POST['how_long'];

		$first_name = $_POST['first_name'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$bvn = $_POST['bvn'];
		$salary = $_POST['salary'];
		$total_repayment = $_POST['total_repayment'];
		$monthly_repayment = $_POST['monthly_repayment'];

	

		$valid_id = mt_rand(10, 100000).$email.$_FILES['validId']['name'];
		$valid_id_temp = $_FILES['validId']['tmp_name'];

		$utitity = mt_rand(10, 100000).$email.$_FILES['utitity']['name'];
		$utitity_temp = $_FILES['utitity']['tmp_name'];

		$salary_acc = mt_rand(10, 100000).$email.$_FILES['salary']['name'];
		$salary_temp = $_FILES['salary']['tmp_name'];

		$account = mt_rand(10, 100000).$email.$_FILES['account']['name'];
		$account_temp = $_FILES['account']['tmp_name'];

		$guarantor = mt_rand(10, 100000).$email.$_FILES['guarantor']['name'];
		$guarantor_temp = $_FILES['guarantor']['tmp_name'];

		$personalLoan = mt_rand(10, 100000).$email.$_FILES['personalLoan']['name'];
		$personalLoan_temp = $_FILES['personalLoan']['tmp_name'];

		move_uploaded_file($passport_temp, "uploads/$passport");
		move_uploaded_file($valid_id_temp, "uploads/$valid_id");
		move_uploaded_file($utitity_temp, "uploads/$utitity");
		move_uploaded_file($salary_temp, "uploads/$salary_acc");
		move_uploaded_file($account_temp, "uploads/$account");
		move_uploaded_file($guarantor_temp, "uploads/$guarantor");
		move_uploaded_file($personalLoan_temp, "uploads/$personalLoan");


		$to = 'uwazie.benedict@alabiansolutions.com';
		$subject = "Loan Application";
		$header = "From: info@lukeport.com \r\n";
		$header .= "Cc: info@alabiansolutions.com \r\n";
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$message = "

					<!DOCTYPE html>
					<html lang='en'>
					<head>
						<meta charset='UTF-8'>
						<title>Load Application Form</title>
						<style type='text/css'>

							.img-cover{
								overflow: hidden;
							}

							.img-div{
								width:160px;
								height: 160px;
								padding: 3px;
								box-sizing: border-box;
								float: left;
							}

							.img-div img{
								width: 140px;
								height: auto;
							}
						</style>
					</head>
					<body>

						<p><strong>How much your are investing</strong>: $how_much </p>
						<p><strong>How long you are investing</strong>: $how_long </p>
						<p><strong>Total Repayment</strong>: $total_repayment</p>
						<p><strong>Monthly Repayment</strong>: $monthly_repayment</p>
						<p><strong>First Name</strong>: $first_name </p>
						<p><strong>Last Name</strong>: $last_name </p>
						<p><strong>Email</strong>: $email </p>
						<p><strong>Phone</strong>: $phone </p>
						<p><strong>BVN</strong>: $bvn </p>
						<p><strong>Salary</strong>: $salary </p>

						
						<div class='img-cover'>
							<div class='img-div'>
								<a href='http://lukefield.com.ng/uploads/$passport'>
								<img src='http://lukefield.com.ng/uploads/$passport'>
								</a><br>
								<a href='http://lukefield.com.ng/uploads/$passport'>
									Download Documents
								</a>
							</div>
							<div class='img-div'>
								<a href='http://lukefield.com.ng/uploads/$valid_id'>
									<img src='http://lukefield.com.ng/uploads/$valid_id'>
								</a><br>
								<a href='http://lukefield.com.ng/uploads/$valid_id'>
									Download Documents
								</a>
								
							</div>
							<div class='img-div'>
								<a href='uploads/$utitity'>
									<img src='http://lukefield.com.ng/uploads/$utitity'>
								</a><br>
								<a href='http://lukefield.com.ng/uploads/$utitity'>
									Download Documents
								</a>
								
							</div>
							<div class='img-div'>
								<a href='http://lukefield.com.ng/uploads/$salary_acc'>
									<img src='http://lukefield.com.ng/uploads/$salary_acc'>
								</a><br>
								<a href='http://lukefield.com.ng/uploads/$salary_acc'>
									Download Documents
								</a>
							</div>
							<div class='img-div'>
								<a href='http://lukefield.com.ng/uploads/$account'>
									<img src='http://lukefield.com.ng/uploads/$account'>
								</a><br>
								<a href='http://lukefield.com.ng/uploads/$account'>
									Download Documents
								</a>
							</div>
							<div class='img-div'>
								<a href='http://lukefield.com.ng/uploads/$guarantor'>
									<img src='http://lukefield.com.ng/uploads/$guarantor'>
								</a><br>
								<a href='http://lukefield.com.ng/uploads/$guarantor'>
									Download Documents
								</a>
							</div>
							<div class='img-div'>
								<a href='http://lukefield.com.ng/uploads/$personalLoan'>
									<img src='http://lukefield.com.ng/uploads/$personalLoan'>
								</a><br>
								<a href='http://lukefield.com.ng/uploads/$personalLoan'>
									Download Documents
								</a>
							</div>
						</div>


						
					</body>
					</html>

				";
		
		if(mail($to, $subject, $message, $header)){
			$success = "Email sent";
		}else{
			$notSent = "Sorry we could not send this email";
		}



	}