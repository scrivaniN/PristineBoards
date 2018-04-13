<?php
include('s2/PB.html');
?>

<main>
	<section>
			<h1>Order Form</h1>
    		<form action="register_account.html" method="get"
        		name="registration_form" id="registration_form">
    			<fieldset>
	        		<legend>Member Information</legend>
	        		<label for="email">E-Mail:</label>
	        		<input type="email" name="email" id="email" autofocus required><br>
	        		<label for="first_name">First Name:</label>
					<input type="text" name="first_name" id="first_name" required><br>
					<label for="last_name">Last Name:</label>
					<input type="text" name="last_name" id="last_name" required><br>
					<label for="address">Address:</label>
					<input type="text" name="address" id="address"><br>
					<label for="city">City:</label>
					<input type="text" name="city" id="city" required><br>
					<label for="state">State:</label>
					<input type="text" name="state" id="state" required maxlength="2" placeholder="2-character code"><br>
					<label for="zip">ZIP Code:</label>
					<input type="text" name="zip" id="zip" required placeholder="5 or 9 digits" 
				    	   pattern="^\d{5}(-\d{4})?$" title="Either 5 or 9 digits"><br>
					<label for="phone">Phone Number:</label>
					<input type="tel" name="phone" id="phone" placeholder="999-999-9999" 
				    	   pattern="\d{3}[\-]\d{3}[\-]\d{4}" title="Must be 999-999-999 format"><br>
				</fieldset>
				<fieldset>
					<legend>Ordering Information</legend>
					<label for="order_type">Order Type:</label>
					<select name="order_type" id="order_type">
				    	<option value="m">Member Package</option>
				    	<option value="d">Donor Package</option>            
				    	<option value="s">Single Tickets</option>
					</select><br>
					<label for="tickets_number">Number of Tickets:</label>
					<input type="text" name="tickets_number" id="tickets_number"
						   placeholder="Number of single tickets"><br>
				</fieldset>
				<fieldset id="radio">
					<legend>Payment Method</legend>
					<input type="radio" name="payment_type" id="bill" value="bill">
					<label for="bill">Bill Me</label>
					<input type="radio" name="payment_type" id="credit" value="credit">
					<label for="credit">Credit Card</label>
				</fieldset>
				<fieldset>
					<legend>Credit Card Information</legend>
					<label for="card_type">Card Type:</label>
					<select name="card_type" id="card_type">
				    	<option value="v">Visa</option>
				    	<option value="m">MasterCard</option>            
				    	<option value="d">Discovery</option>
					</select><br>
					<label for="card_number">Card Number:</label>
					<input type="text" name="card_number" id="card_number" required
				    	   pattern="\d{16}" placeholder="16 digits" title="Must be 16 digits"><br>
					<label for="exp_month">Expiration date:</label>
						<select name="exp_month" id="exp_month">
							<option value="1">January</option>
							<option value="2">February</option>
							<option value="3">March</option>
							<option value="4">April</option>
							<option value="5">May</option>
							<option value="6">June</option>
							<option value="7">July</option>
							<option value="8">August</option>
							<option value="9">September</option>
							<option value="10">October</option>
							<option value="11">November</option>
							<option value="12">December</option>
						</select>
						<select name="exp_year" id="exp_year">
							<option value="2012">2015</option>
							<option value="2013">2016</option>
							<option value="2014">2017</option>
							<option value="2015">2018</option>
							<option value="2016">2019</option>
						</select><br>		
				</fieldset>
				<fieldset id="buttons">
					<legend>Submit Your Order</legend>
					<label>&nbsp;</label>
					<input type="submit" id="submit" value="Submit">
					<input type="reset" id="reset" value="Reset Fields"><br>
				</fieldset>
			</form>
	</section>
</main>
<?php
include('s2/PB_Footer.html');
?>

