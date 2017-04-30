<?PHP
	$acc_type = $_POST["acc_type"];
	$branch = $_POST["branch"];
	$appl_prefix = $_POST["1st_appl_prefix"];
	$appl_name = $_POST["1st_appl_name"];
	$bldg_name = $_POST["bldg_name"];
	$road = $_POST["road"];
	$landmark = $_POST["landmark"];
	$city = $_POST["city"];
	$pin = $_POST["pin"];
	$state = $_POST["state"];
	$country = $_POST["country"];
	$tel = $_POST["tel"];
	$ext = $_POST["ext"];
	$std = $_POST["std"];
	$telR = $_POST["telR"];
	$mobile = $_POST["mobile"];
	$copy = $_POST["copy"];
	$nomination = $_POST["nomination"];
	$nominee_name = $_POST["nominee_name"];
	$amt_rs = $_POST["amt_rs"];
	$payment_mode = $_POST["payment_mode"];
	$cheque_no = $_POST["cheque_no"];
	$cheque_date = $_POST["cheque_date"];
	$drawn_on = $_POST["drawn_on"];
	$branch = $_POST["branch"];
	$name_cust = $_POST["name_cust"];
	$AOI = $_POST["AOI"];
	$acc_no = $_POST["acc_no"];
	$custid = $_POST["custid"];
	$card_opt = $_POST["card_opt"];
	$card_no = $_POST["1st_card_no"];
	$email = $_POST["1st_email"];
	$mob_banking_no = $_POST["1st_mob_banking_no"];
	$name_of_co = $_POST["1st_name_of_co"];
	$AQB = $_POST["AQB"];
	$occupation = $_POST["occupation"];
	$occupationother = $_POST["occupationother"];
	$emp_with = $_POST["emp_with"];
	$emp_with_other = $_POST["emp_with_other"];
	$yrs = $_POST["yrs"];
	$nat_bus = $_POST["nat_bus"];
	$nat_bus_other = $_POST["nat_bus_other"];
	$DOI = $_POST["DOI"];
	$type_comp = $_POST["type_comp"];
	$type_comp_other = $_POST["type_comp_other"];
	$type_prof = $_POST["type_prof"];
	$type_prof_other = $_POST["type_prof_other"];
	$sof = $_POST["sof"];
	$sof_other = $_POST["sof_other"];
	$GAI = $_POST["GAI"];
	$res_type = $_POST["res_type"];
	$user_type = "new";


	// Debug check - whether values are posted properly
	// echo "<h4> $acc_type, $sof, $res_type </h4>";
	$con = mysql_connect("localhost", "root", "1234");
	if(!$con)
	{
	die("Could not connect:".mysql_error());
	}
	// connection successful - choose database
	mysql_select_db("CADS_bank_db", $con);
	$query = "INSERT INTO PIT VALUES(NULL, '$user_type', '$appl_prefix',	'$appl_name', '$bldg_name',	'$road',	'$landmark',	'$city',	'$pin',	'$state',	'$country',	'$tel',	'$ext',	'$std',	'$telR',	'$mobile')";
	// Run the query
	$result = mysql_query($query);
	$query2 = "INSERT INTO AIT VALUES(NULL, '$acc_type',	'$branch',	'$copy',	'$nomination',	'$nominee_name',	'$amt_rs',	'$payment_mode',	'$cheque_no',	'$cheque_date',	'$drawn_on',	'$branch',	'$name_cust',	'$AOI',	'$acc_no',	'$custid',	'$card_opt',	'$card_no',	'$email',	'$mob_banking_no',	'$name_of_co',	'$AQB')";
	$result2 = mysql_query($query2);
	$query3 = "INSERT INTO BT VALUES(NULL, '$occupation',	'$occupationother',	'$emp_with',	'$emp_with_other',	'$yrs',	'$nat_bus',	'$nat_bus_other',	'$DOI',	'$type_comp',	'$type_comp_other',	'$type_prof',	'$type_prof_other',	'$sof',	'$sof_other',	'$GAI',	'$res_type')";
	// Run the query
	$result3 = mysql_query($query3);
	// echo "<TABLE BORDER=1>";
	// echo "<TR>
	// <TH> Dept ID </TH>
	// <TH> Dept Name </TH>
	// <TH> Year </TH>
	// </TR>";
	// while($row = mysql_fetch_array($result2))
	// {
	// echo "<TR>";
	// echo "<TD>".$row["dep_code"]."</TD>";
	// echo "<TD>".$row["dep_name"]."</TD>";
	// echo "<TD>".$row["form_year"]."</TD>";
	// echo "</TR>";
	// }
	// echo "</TABLE>";
	// // close connection
	mysql_close($con);
?>

<html>
<head>
	<title>Thank You!</title>
</head>
<body background="background.jpg">
	<h3 align="center">Your form has been submitted successfully.</h3>
	<h1 align="center">Thank You!</h1>
</body>
</html>