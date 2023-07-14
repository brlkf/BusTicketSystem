
<!DOCTYPE html>
<html>
<head>
	<title>Edit Customer Profile</title>
	<link href="edit.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	include("connect.php");
	$id = intval($_GET['id']); //intval — Get the integer value of a variable
	$result = mysqli_query($con,"SELECT * FROM customer_profile WHERE id=$id");
	while($row = mysqli_fetch_array($result))
	{
	?>

	<h2>My Address Book</h2>
	<h3>Add New Contact</h3>
	<form action="edit_customer.php" method="post" >
	<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
	<div id="container">
		<div class="section">
			<div class="label">
				Username
			</div>
			<div class="field">
				<input type="text" name="Username" required="required" value="<?php echo $row['Username'] ?>">
			</div>
		</div>
		<div class="section">
			<div class="label">
				First Name
			</div>
			<div class="field">
				<input type="text" name="First_name" required="required" value="<?php echo $row['First_name'] ?>">
			</div>
		</div>
		<div class="section">
			<div class="label">
				Last Name
			</div>
			<div class="field">
				<input type="text" name="Last_name" required="required" value="<?php echo $row['Last_name'] ?>">
			</div>
		</div>
		<div class="section">
			<div class="label">
				Phone Number
			</div>
			<div class="field">
				<input type="tel" name="phone_num" required="required" value="<?php echo $row['Tel_no'] ?>">
			</div>
		</div>
		<div class="section">
			<div class="label">
				Email Address
			</div>
			<div class="field">
				<input type="email" name="email_address" required="required" value="<?php echo $row['Email'] ?>">
			</div>
		</div>
		<div class="section">
			<div class="label">
				Password
			</div>
			<div class="field" >
				<input type = "password" required="required" name="password" value="<?php echo $row['Password'] ?>">
			</div>
		</div>
		
		
		<div class="section">
			<div class="label">
				&nbsp;
			</div>
			<div class="field">
				<button type="submit" class="btn">Save</button>
			</div>
		</div>
	</div>
	</form>
	<?php
	}
	mysqli_close($con);
	?>
</body>
</html>
