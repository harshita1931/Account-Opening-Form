<html>
<head>
<title>Account Opening Form</title>
</head>
<body background="background.jpg">
	<h1 align="center"><u>Account Opening Form</u></h1>
	<h2 align="center">For Resident Individuals</h2>
	<h4 align="center">(To be filled by applicant only)</h4>

	Kindly select the appropriate option 

	<form action="check_cust.php" method="post" id="customer_type">
		<input type="radio" onchange="window.location.replace('exst_cust.php')"> Existing Customer
  		<input type="radio" onchange="window.location.replace('new_cust_secA.php')"> New Customer <br>
  		<br>
  	</form>

</body>
</html>
