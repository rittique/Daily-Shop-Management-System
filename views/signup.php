<?php session_start();?>
<html>
	<head>
		<title>Signup </title>
		<link rel="stylesheet" type="text/css" href="styles/SignupDesign.css">
	</head>
	<body>
	<?php
	
	require '../controllers/signupcontroller.php';

	$err_fname = "";
	$fname = "";
	$err_lname = "";
	$lname = "";
	$err_num = "";
	$pnum = "";
	$err_address = "";
	$ad = "";
	$err_email = "";
	$em = "";
	$err_username = "";
	$usname = "";
	$err_password = "";
	$psw = "";
	$has_error = false;
	
	if(isset($_POST['signup']))
	{
		if(empty($_POST['fname']))
		{
				$err_fname="<h6 id = 'errmsgfname'>*First Name Required</h6>";
				$has_error = true;
		}
		else
		{
			$fname = $_POST['fname'];
		}
			
		if(empty($_POST['lname']))
			{
				$err_lname="<h6 id = 'errmsglname'>*Last Name Required</h6>";
				$has_error = true;
			}
		else
		{
			$lname = $_POST['lname'];
		}
		if(empty($_POST['phone']))
			{
				$err_num="<h6 id = 'errmsgnum'>*Phone Number Required</h6>";
				$has_error = true;
			}
		else
		{
			$pnum = $_POST['phone'];
		}
		if(empty($_POST['add']))
			{
				$err_address="<h6 id = 'errmsgadd'>*Address Required</h6>";
				$has_error = true;
			}
		else
		{
			$ad = $_POST['add'];
		}
		if(empty($_POST['email']))
			{
				$err_email="<h6 id = 'errmsgemail'>*Email Required</h6>";
				$has_error = true;
			}
		else
		{
			$em = $_POST['email'];
		}
		if(empty($_POST['un']))
			{
				$err_username="<h6 id = 'errmsgun'>*Username Required</h6>";
				$has_error = true;
			}
		else
		{
			$usname = $_POST['un'];
		}
		if(empty($_POST['pass']))
			{
				$err_password="<h6 id = 'errmsgpass'>*Password Required</h6>";
				$has_error = true;
			}
		else
		{
			$psw = $_POST['pass'];
		}
		
	
	}
?>		<img src = "../storage/images/signupicon.png" class = "avatar">
		<h1 id = "sign-up">Sign up</h1>
		<div class = "signup-form">
			<form action = "" method = "post">
				<table>
					<tr>
						<td>First Name</td>
						<td>
							<input type = 'text' placeholder = 'Enter your first name' name = 'fname' value="<?php echo $fname;?>">
						</td>
						<td>
							<span style="color:red"><?php echo $err_fname;?></span>
						</td>
					<tr>
					<tr>
						<td>Last Name</td>
						<td>
							<input type = 'text' placeholder = 'Enter your last name' name = 'lname' value="<?php echo $lname;?>">
						</td>
						<td>
							<span style="color:red"><?php echo $err_lname;?></span>
						</td>
					<tr>
					<tr>
						<td>Phone Number</td>
						<td>
							<input type = 'text' placeholder = 'Enter your phone number' name = 'phone' value="<?php echo $pnum;?>">
						</td>
						<td>
							<span style="color:red"><?php echo $err_num;?></span>
						</td>
					<tr>
					<tr>
						<td>Date of Birth</td>
						<td>
							<select name = 'day'>
								<?php 
									for($i = 1; $i<=31; $i++)
										echo "<option value = '$i' >$i</option>";
								?>
							</select>
							Day
							<select name = 'month'>
								<?php 
									for($j = 1; $j<=12; $j++)
										echo "<option value = '$j' >$j</option>";
								?>
							</select>
							Month
							<select name = 'year'>
								<?php 
									for($k = 1900; $k<=2020; $k++)
										echo "<option value = '$k' >$k</option>";
								?>
							</select>
							Year
						</td>
					<tr>
					<tr>
						<td>Address</td>
						<td>
							<input type = 'text' placeholder = 'Enter your address' name = 'add' value="<?php echo $ad;?>">
						</td>
						<td>
							<span style="color:red"><?php echo $err_address;?></span>
						</td>
					<tr>
					<tr>
						<td>Email</td>
						<td>
							<input type = 'text' placeholder = 'Enter your email address' name  = 'email' value="<?php echo $em;?>">
						</td>
						<td>
							<span style="color:red"><?php echo $err_email;?></span>
						</td>
					<tr>
					<tr>
						<td>User Type</td>
						<td>
							<select name = 'usertype'>
								<!--<option>Super Admin</option>-->
								<option value = 'Admin' >Admin</option>
								<option value = 'Worker' >Worker</option>
							</select>
						</td>
					<tr>
					<tr>
						<td>Username</td>
						<td>
							<input type = "text" placeholder = 'Enter your username' name = 'un' value="<?php echo $usname;?>">
						</td>
						<td>
							<span style="color:red"><?php echo $err_username;?></span>
						</td>
					</tr>
					<tr>
						<td>Password</td>
						<td>
							<input type = "password" placeholder = 'Enter your password' name = 'pass' value="<?php echo $psw;?>">
						</td>
						<td>
							<span style="color:red"><?php echo $err_password;?></span>
						</td>
					</tr>
					<tr>
						<td colspan = "2" align = "center"><input type = 'submit' value = 'Signup' name = 'signup'></td>
					</tr>
				</table>
			</form>
			
		</div>
	</body>
</html>