<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#2nd_part").hide();
	$("#3rd_part").hide();
	$("#4th_part").hide();
	$("#5th_part").hide();
    $("#1st_button").click(function(){
        $("#1st_part").hide(1000);
        $("#2nd_part").show(1000);
        $("#3rd_part").hide();
        $("#4th_part").hide();
        $("#5th_part").hide();
    });

    $("#2nd_button").click(function(){
        $("#1st_part").hide();
        $("#2nd_part").hide(1000);
        $("#3rd_part").show(1000);
        $("#4th_part").hide();
        $("#5th_part").hide();
    });

    $("#3rd_button").click(function(){
        $("#1st_part").hide();
        $("#2nd_part").hide();
        $("#3rd_part").hide(1000);
        $("#4th_part").show(1000);
        $("#5th_part").hide();
    });

    $("#4th_button").click(function(){
        $("#1st_part").hide();
        $("#2nd_part").hide();
        $("#3rd_part").hide();
        $("#4th_part").hide(1000);
        $("#5th_part").show(1000);
    });

    $("#2nd_prev").click(function(){
        $("#1st_part").show(1000);
        $("#2nd_part").hide(1000);
        $("#3rd_part").hide();
        $("#4th_part").hide();
        $("#5th_part").hide();
    });

    $("#3rd_prev").click(function(){
        $("#1st_part").hide();
        $("#2nd_part").show(1000);
        $("#3rd_part").hide(1000);
        $("#4th_part").hide();
        $("#5th_part").hide();
    });

    $("#4th_prev").click(function(){
        $("#1st_part").hide();
        $("#2nd_part").hide();
        $("#3rd_part").show(1000);
        $("#4th_part").hide(1000);
        $("#5th_part").hide();
    });

    $("#5th_prev").click(function(){
        $("#1st_part").hide();
        $("#2nd_part").hide();
        $("#3rd_part").hide();
        $("#4th_part").show(1000);
        $("#5th_part").hide(1000);
    });
});
</script>
<title>Section A</title>
</head>
<body background="background.jpg">
	<form action="thankyou_new.php" id="acc_type" method="post">
		<div id = "1st_part">
		<h3>*Please open my : </h3>
		<input type="radio" name="acc_type" value="saving_acc" required> Savings Account
	  	<input type="radio" name="acc_type" value="savings_salary_acc"> Savings Salary Account
	  	<input type="radio" name="acc_type" value="current_acc"> Current Account<br>
	  	<br>
	  	*Branch Name :
	  	<input type="text" name="branch" required> <br>
	  	<br>
	  		<h3>*Personal Details</h3>
	    	<table>
	  		<tr>
	  			<!-- <th>Appl</th> -->
	  			<th>Prefix</th>
	  			<th>Full Name</th>
	  		</tr>
	  		<tr>
	  			<!-- <td>1st</td> -->
	  			<td><input type="text" name="1st_appl_prefix" required> <br></td>
	  			<td><input type="text" name="1st_appl_name" required> </td>
	  		</tr>
	  		<!-- <tr>
	  			<td>2nd</td>
	  			<td><input type="text" name="2nd_appl_prefix"> <br></td>
	  			<td><input type="text" name="2nd_appl_name"> </td>
	  		</tr>
	  		<tr>
	  			<td>3rd</td>
	  			<td><input type="text" name="3rd_appl_prefix"> <br></td>
	  			<td><input type="text" name="3rd_appl_name"> </td>
	  		</tr> -->
	  	</table>
	  	<br>
	  	<!-- <br>
	  	<hr>
	  	<br>
	  	<table cellspacing="10">
	  		<tr>
	  			<th></th>
		  		<th>Display Name On ATM/ Debit Card/ Correspondence </th>
		  		<th>Date Of Birth</th>
		  	</tr>
		  	<tr>
		  		<td>1st Appl.</td>
		  		<td align="center"><input type="text" name="1st_Name" required></td>
		  		<td align="center"><input type="date" name="DOB1" required></td>
		  	</tr>
		  	<tr>
		  		<td>2nd Appl.</td>
		  		<td align="center"><input type="text" name="2nd_Name"></td>
		  		<td align="center"><input type="date" name="DOB2"></td>
		  	</tr>
		  	<tr>
		  		<td>3rd Appl.</td>
		  		<td align="center"><input type="text" name="3rd_Name"></td>
		  		<td align="center"><input type="date" name="DOB3"></td>
		  	</tr>	
	  	</table>
	  	<br> -->
	  	<button id="1st_button">Next</button>
		</div>

	  	<div id="2nd_part">
	  		<h3>Mailing Address </h3>
		<br>
		<table>
			<tr>
				<td>*Company Name/ Flat No. and Bldg.Name :</td> 
				<td><input type="text" name="bldg_name" required></td>
			</tr>
			<tr>	
				<td>*Road No./Name :</td>
				<td><input type="text" name="road" required> </td>
			</tr>
			<tr>	
				<td>*Landmark:</td>
				<td><input type="text" name="landmark" required> </td>
			</tr>
			<tr>	
				<td>*City :</td>
				<td><input type="text" name="city" required></td>
			</tr>
			<tr>	
				<td>*PIN Code :</td>
				<td><input type="number" name="pin" required> </td>
			</tr>
			<tr>
				<td>*State :</td>
				<td><input type="text" name="state" required></td>
			</tr>
			<tr>
				<td>*Country :</td>
				<td><input type="text" name="country" required></td>
			</tr>
			<tr>
				<td>*Tel.(O) :</td>
				<td><input type="number" name="tel" required></td>
			</tr>
			<tr>
				<td>EXT. No. :</td>
				<td><input type="number" name="ext"></td>
			</tr>
			<tr>
				<td>STD Code :</td>
				<td><input type="number" name="std"></td>
			</tr>
			<tr>	
				<td>*Tel.(R) :</td>
				<td><input type="number" name="telR" required></td>
			<tr>
				<td>Mobile No. :</td>
				<td><input type="number" name="mobile"></td>
			</tr>
			<!-- <tr>
				<td>Email ID :</td>
				<td><input type="email" name="email"></td>
			</tr> -->	
			
		</table>	
			<br>
			<br>
			<button id="2nd_prev">Previous</button>
	  		<button id="2nd_button">Next</button>
	  		
	  	</div>

	  	<div id="3rd_part">
	  		
	  		Attach copy of any one:
			<input type="radio" name="copy" value="PAN"> PAN Card
			<input type="radio" name="copy" value="passport"> Passport
			<input type="radio" name="copy" value="card"> Election ID Card/Ration Card/Driving Licence**
			<br>
			<br>
			**Accompanied by cheque signed by you
			<br>
			<hr>
			<h3>NOMINATION</h3> 
			<input type="radio" name="nomination" value="yes" required>Yes
			<input type="radio" name="nomination" value="no"> No
			<br>
			If yes, Name of nominee :
			<input type="text" name="nominee_name">
			<br>
			<hr>
			<h3>PAYMENT DETAILS</h3>
			Amount Rs. <input type="number" name="amt_rs" required>
			<!-- ps. <input type="number" name="amt_ps" required> <br> -->
			<br>
			Mode of Payment :
			<input type="radio" name="payment_mode" value="cash"> Cash
			<input type="radio" name="payment_mode" value="cheque" required> Cheque 
			<br>
			<br>
			If cheque, please fill the following : <br>
			Cheque No. :<input type="text" name="cheque_no">
			Dated : <input type="date" name="cheque_date"> <br>
			<br>
			Drawn on <input type="text" name="drawn_on"> Bank, <input type="text" name="branch"> Branch.
			<br>
			<br>
			The cheque should be crossed A/c Payee and drawn payable to "HDFC Bank Ltd. A/c. <input type="text" name="name_cust"> (Customer Name)"
			<br>
			<hr>
			<h3>ACCOUNT OPERATING INSTRUCTIONS </h3>
			<input type="radio" name="AOI" value="single" required> Single
			<input type="radio" name="AOI" value="surv"> Either/Any one or Survivor
			<input type="radio" name="AOI" value="joint">Jointly (Debit/ATM card will not be issued)**
			<br>
			<hr>
			<br>
			<b>Please note: Cheque book of 25 leaves and 50 leaves will be issued to Savings and Current a/c holders respectively by default.</b>
			<br>
			<br>
			<button id="3rd_prev">Previous</button>
	  		<button id="3rd_button">Next</button>
	  		
	  	</div>

	  	<div id="4th_part">
	  		<table>
			<tr>
				<td>ACCOUNT NO.</td> 
				<td><input type="text" name="acc_no"> </td>
			</tr>
				<td>CUSTOMER ID</td>
				<td><input type="text" name="custid"></td>	
		</table>
		<br>
		<!-- <hr>
		<br> -->
		<!-- Is permanent address is same as mailing address : 
		<input type="radio" name="random2" value="yes" required>Yes
		<input type="radio" name="random2" value="no">No
		<br>
		<br>
		<b>If the above answer is "No", please fill your permanent address below :</b>
		<br>
		<table>
			<tr>
				<td>*Company Name/ Flat No. and Bldg.Name :</td> 
				<td><input type="text" name="bldg_name"></td>
			</tr>
			<tr>	
				<td>*Road No./Name :</td>
				<td><input type="text" name="road"> </td>
			</tr>
			<tr>	
				<td>*Landmark:</td>
				<td><input type="text" name="landmark"> </td>
			</tr>
			<tr>	
				<td>*City :</td>
				<td><input type="text" name="city" ></td>
			</tr>
			<tr>	
				<td>*PIN Code :</td>
				<td><input type="number" name="pin"> </td>
			</tr>
			<tr>
				<td>*State :</td>
				<td><input type="text" name="state"></td>
			</tr>
			<tr>
				<td>*Country :</td>
				<td><input type="text" name="country"></td>
			</tr>
			<tr>
				<td>*Tel.(O) :</td>
				<td><input type="number" name="tel"></td>
			</tr>
			<tr>
				<td>EXT. No. :</td>
				<td><input type="number" name="ext"></td>
			</tr>
			<tr>
				<td>STD Code :</td>
				<td><input type="number" name="std"></td>
			</tr>
			<tr>	
				<td>*Tel.(R) :</td>
				<td><input type="number" name="telR"></td>
			<tr>
				<td>Mobile No. :</td>
				<td><input type="number" name="mobile"></td>
			</tr>
			<tr>
				<td>Email ID :</td>
				<td><input type="email" name="email"></td>
			</tr>	
			
		</table>
		<br> -->
		<hr>
		<h2>ATM CARD / DEBIT CARD</h2>
		To apply for an HDFC Bank ATM / Debit Card, please tick your choice :
		<br>
		<table cellspacing="20">
			<tr>
				<!-- <th></th> -->
				<th>ATM CARD**</th>
				<th>EASYSHOP DEBIT CARD*(Regular)</th>
				<th>EASYSHOP DEBIT CARD*(Gold)</th>
			</tr>
			<tr>
				<!-- <td>1st Appl.</td> -->
				<td align="center"><input type="checkbox" name="card_opt" value="1st_atm"></td>
				<td align="center"><input type="checkbox" name="card_opt" value="1st_reg"></td>
				<td align="center"><input type="checkbox" name="card_opt" value="1st_gold"></td>
			</tr>
			<!-- <tr>
				<td>2nd Appl.</td>
				<td align="center"><input type="checkbox" name="card_opt" value="2nd_atm"></td>
				<td align="center"><input type="checkbox" name="card_opt" value="2nd_reg"></td>
				<td align="center"><input type="checkbox" name="card_opt" value="2nd_gold"></td>
			</tr>
			<tr>
				<td>3rd Appl.</td>
				<td align="center"><input type="checkbox" name="card_opt" value="3rd_atm"></td>
				<td align="center"><input type="checkbox" name="card_opt" value="3rd_reg"></td>
				<td align="center"><input type="checkbox" name="card_opt" value="3rd_gold"></td>
			</tr> -->
		</table>
		<br>
		*Annual charges applicable<br>
		**Available in selected cities<br>
		<br>
		If you already have an HDFC Bank ATM/Debit Card, please give the card number to which the Savings/ Current/ SuperSaver account that you now wish to open is to be linked.<br>
		(Please note this facility is available for operating instruction: Single, Either or Survivor only.)<br>
		<br>
		<b>ATM/Debit Card No.</b> <br>
		<table>
			<tr>
				<!-- <td>1st Applicant:</td> -->
				<td><input type="text" name="1st_card_no"> </td>
			</tr>
				<!-- <td>2nd Applicant:</td> 
				<td><input type="text" name="2nd_card_no"></td>
			</tr>
			<tr>
				<td>3rd Applicant:</td>
				<td><input type="text" name="3rd_card_no"></td>
			</tr> -->
		</table>
		<br>
		<hr>
		<br>
		<h2>NETBANKING / MOBILEBANKING REGISTERATION</h2> <br>
		<i><b>To apply for NetBanking, please tick each of the boxes below. Please provide an email ID for each of the applicants for future communication. An IPIN will be mailed to you to enable you to use NetBanking. </b>The same IPIN will be used when you access your account on your mobile phone using WAP. If you are using SMS, you need to apply for MobileBanking only. If you are usinf WAP, you need to apply for NetBanking only. Please check with your branch for the availability of MobileBanking service in your city.</i> <br>

		<table>
			<tr>
				<!-- <th></th>
				<th></th> -->
				<th>E-mail ID</th>
			</tr>
			<tr>
				<!-- <td>1st Appl.</td>
				<td><input type="checkbox" name="netbanking_opt" value="1st_netopt"></td> -->
				<td><input type="email" name="1st_email"></td>
			</tr>
			<!-- <tr>
				<td>2nd Appl.</td>
				<td><input type="checkbox" name="netbanking_opt" value="2nd_netopt"></td>
				<td><input type="email" name="2nd_email"></td>
			</tr>
			<tr>
				<td>3rd Appl.</td>
				<td><input type="checkbox" name="netbanking_opt" value="3rd_netopt"></td>
				<td><input type="email" name="3rd_email"></td>
			</tr> -->
		</table>

		<br>
		<hr>
		<br>

		<table>
			<tr>
				<!-- <th></th> -->
				<th>Mobile Number</th>
				<th>MOBILEBANKING USING SMS<br>Name Of Co.</th>
			</tr>
			<tr>
				<!-- <td>1st Appl.</td> -->
				<td align="center"><input type="number" name="1st_mob_banking_no"></td>
				<td align="center"><input type="text" name="1st_name_of_co"></td>
			</tr>
			<!-- <tr>
				<td>2nd Appl.</td>
				<td align="center"><input type="number" name="2nd_mob_banking_no"></td>
				<td align="center"><input type="text" name="2nd_name_of_co"></td>
			</tr>
			<tr>
				<td>3rd Appl.</td>
				<td align="center"><input type="number" name="3rd_mob_banking_no"></td>
				<td align="center"><input type="text" name="3rd_name_of_co"></td>
			</tr> -->
		</table>
		<br>
		<hr>
		<br>
		The Average Quarterly Balance (AQB) required to be maintained for this account is Rs. <input type="number" name="AQB" required><br>
		<br>

		<b>DECLARATION</b> :- I/We have read and understood the Terms and Conditions governing the opening of an account with HDFC Bank and those relating to various services including but not limited to (A) ATMs, (B) PhoneBanking, (C) Debit Cards, (D)
MobileBanking, (E) NetBanking, (F) BillPay facility. I/We accept and agree to be bound by the said Terms and Conditions including those excluding /limiting the Bank's liability. I/We understand that the Bank may, at its absolute discretion, discontinue any of
the services completely or partially without any notice to me/us. I/We agree that the Bank may debit my/our account for the service charges applicable from time to time. I/We confirm that I/We am/are resident of India. I/We authorise the Bank to disclose,
from time to time any information relating to my savings account to any parent/subsidiary, affiliate and associate of HDFC Bank, and to third parties engaged by the Bank, for purposes as detailed in the Terms and Conditions Booklet. I/We confirm that I/We
am/are in possession of and have read the Terms and Conditions booklet which details the rules governing account operations, the schedule of charges which specifies the charges applicable from time to time for various services and the tear away
Customer copy detailing the instructions and account opening rules. I /We have understood that I/We am/are required to maintain:<br>
Average Quarterly Balance of Rs 5,000/-or
Rs 2,500/-* or any other as specified ** for
which the Bank will provide free :
<ul>
<li> ATM </li>
<li> PhoneBanking</li>
<li> NetBanking</li>
<li> MobileBanking</li>
<li> Branch Banking</li>
<li> Chequebooks</li>
<li> EFT</li>
<li> Quarterly Statements</li>
</ul>
except where otherwise specified in the
schedule of charges.<br>
*Available in select locations<br>
**Available for specific categories of customers<br>
<br>
I/We have also understood that non maintenance of above specified Average Quarterly Balance will attract charges of Rs 750/- per quarter for accounts with Average Quarterly Balance requirement of Rs 5,000/- or Rs 2,500/-
and other charges for PhoneBanking, NetBanking, ATM and Branch services as detailed in the schedule of charges.
<br>
<!-- I/We confirm that I/We have read and understood the Declaration given above and confirm that all the details provided on the form are correct.I/We also confirm that
my/our account has been opened by Bank Officer Mr./Ms. <input type="text" name="bank_officer_name" required> and I/We have signed in his/her presence. <br> -->
	
	<br>
	  		<button id="4th_prev">Previous</button>
	  		<button id="4th_button">Next</button>
	  		
	  	</div>


	  	<div id="5th_part">
	  		<b>*Occupation :</b>
	<br>
	<input type="radio" name="occupation" value="salaried" required> Salaried
	<input type="radio" name="occupation" value="self-emp">Self-employed
	<input type="radio" name="occupation" value="retired">Retired
	<input type="radio" name="occupation" value="self-emp_prof">Self-employed prof.
	<input type="radio" name="occupation" value="housewifr">Housewife
	<input type="radio" name="occupation" value="politician">Politician
	<input type="radio" name="occupation" value="student">Student
	<input type="radio" name="occupation" value="other">Others(pls specify)<input type="text" name="occupationother" >

	<br>
	<br>
	<b>*If salaried employed with :</b> <br>
	<input type="radio" name="emp_with" value="pvtltd">Private Ltd.
	<input type="radio" name="emp_with" value="partnership">Partnership
	<input type="radio" name="emp_with" value="prop">Proprietorship
	<input type="radio" name="emp_with" value="publtd">Public Limited 
	<input type="radio" name="emp_with" value="pubsec">Public Sector
	<input type="radio" name="emp_with" value="govt">Government
	<input type="radio" name="emp_with" value="multi">Multinational
	<input type="radio" name="emp_with" value="other">Others(pls specify)<input type="text" name="emp_with_other" > 
	<br>
	<br>
	<hr>
	<h3> For Self Employed Customers :</h3>
	<b> *Self Employed since : </b><input type="number" name="yrs">Years <!-- <input type="number" name="mon">Months
	 <br> -->
	 <br>
	 <br>
	 <b>*Nature of Business : </b>
	 <br>
	 <input type="radio" name="nat_bus" value="manu">Manufacturing
	 <input type="radio" name="nat_bus" value="serv_prov">Service Provider
	 <input type="radio" name="nat_bus" value="agri">Agriculture
	 <input type="radio" name="nat_bus" value="stck_brk">Stock Broker
	 <input type="radio" name="nat_bus" value="real_est">Real Estate
	 <input type="radio" name="nat_bus" value="trader">Trader
	 <input type="radio" name="nat_bus" value="other">Others(pls specify)<input type="text" name="nat_bus_other" > 

	 <br>
	 <br>
	 <b>*Date of Incorporation :</b> <input type="date" name="DOI">
	 <br>
	 <br>
	 <b>*Type of Company/Firm :</b>
	 <br>
	 <input type="radio" name="type_comp" value="sp">Sole Proprietorship
	 <input type="radio" name="type_comp" value="partnership">Partnership
	 <input type="radio" name="type_comp" value="pub_ltd">Public Limited Co.
	 <input type="radio" name="type_comp" value="pvt_ltd">Private Limited Co.
	 <input type="radio" name="type_comp" value="other">Others(pls specify)<input type="text" name="type_comp_other" > 
	 <br>
	 <br>
	 <b>*Self Employed Professional :</b>
	 <br>
	 <input type="radio" name="type_prof" value="doctor">Doctor
	 <input type="radio" name="type_prof" value="cacs">CA/CS
	 <input type="radio" name="type_prof" value="lawyer">Lawyer
	 <input type="radio" name="type_prof" value="archi">Architect
	 <input type="radio" name="type_prof" value="itcons">IT Consultant
	 <input type="radio" name="type_prof" value="other">Others(pls specify)<input type="text" name="type_prof_other"> 
	 <br>
	 <br>
	 <hr>
	 <br>
	 <b>*Source of Funds :</b>
	 <br>
	 <input type="radio" name="sof" value="salary" required>Salary
	 <input type="radio" name="sof" value="bus_inc">Business Income
	 <input type="radio" name="sof" value="agriculture">Agriculture
	 <input type="radio" name="sof" value="inv_inc">Investment Income
	 <input type="radio" name="sof" value="other">Others(pls specify)<input type="text" name="sof_other">

	 <br>
	 <br>
	 <b>*Gross Annual Income :</b>
	 <br>
	 <input type="radio" name="GAI" value="val1" required> less than 50,000
	 <input type="radio" name="GAI" value="val2">50,000-1,00,000
	 <input type="radio" name="GAI" value="val3">1,00,000-3,00,000
	 <input type="radio" name="GAI" value="val4">3,00,000-5,00,000
	 <input type="radio" name="GAI" value="val5">5,00,000-7,50,000
	 <input type="radio" name="GAI" value="val6">7,50,000-1,00,000
	 <input type="radio" name="GAI" value="val7">10,00,000-15,00,000
	 <input type="radio" name="GAI" value="val8">more than 15,00,000

	 <br>
	 <br>
	 <b>*Resident type :</b>
	 <input type="radio" name="res_type" value="owned" required>Owned
	 <input type="radio" name="res_type" value="rent">Rented/Leased
	 <input type="radio" name="res_type" value="ancestral">Ancestral/Family
	 <input type="radio" name="res_type" value="comp">Company Provided
	 <br>
	 <br>

	 		<button id="5th_prev">Previous</button>
	  		<input type="submit" value="Submit">
	  	</div>

	</form>

</body>
</html>