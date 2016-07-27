<!-- 
- build an order form for a pizza, name it pizza_form.php. Use inputs you think are best!
    - quantity
    - crust style
    - size
    - toppings
    - delivery info including name, phone, address, credit card info, additional instructions
    - BONUS: show toppings with images 
    - add css
-->

<?php
	var_dump($_GET);
	var_dump($_POST);
?>

Create order
	Size - small/medium/large/extra large (auto large)
	Crust Type - original/thin (auto original)
	Cut - normal/square (auto normal)
	Bake - normal/well done (auto normal)
	Sauce - BBQ/ranch/original (auto original)
	How much sauce - normal/light/extra/no sauce (auto normal)
	How much cheese - normal/light/no cheese (auto normal)
	Meat toppings - Pepperoni/bacon/grilled chicken/beef/sausage/anchovies/canadian bacon
	Veggie toppings - pinapple/black olives/tomatoes/jalapeno/mushroom/green peppers/onions/pickles/banana peppers
	Cheese - Shredded swiss/extra cheese/3 cheese blend/parmesan romano
	Quantity
	Button add to cart
	Promo Code
	Delivery info - name/phone/address/credit card/additional instructions

<html>
<head>
	<title>PIZZA ORDER FORM</title>
</head>
	<body>
		<h1 align="center">Welcome to Your New Favorite Pizza Place!</h1>
		<form method="POST" action="/php/pizza_form.php">

			<div class="sign_in">
				<h3>Login</h3>
				<p>
					<label for="username">Email:</label>
					<input id="username" name="username" type="email" placeholder="Email">
				</p>
				<p>
					<label for="password">Password</label>
					<input id="password" name="password" type="password" placeholder="Password">
				</p>
			</div>

			<div class="sign_up">
				<h3>Sign Up</h3>
				<p>
					<label for="name">Name</label>
					<input id="name" name="name" type="text" placeholder="Fitst Name">
					<input id="name" name="name" type="text" placeholder="Last Name">
				</p>
				<p>
					<label for="email">Email</label>
					<input id="email" name="email" type="email" placeholder="Email">
				</p>
				<p>
					<label for="phone">Phone</label>
    				<input type="tel" id="phone" placeholder="(555) 555-5555">				
				</p>
				<p>
					<input type="checkbox" id="email" name="email" value="yes" checked>
					<label for="email">Sign me up for email offers.</label>
				</p>
				<p>
					<input type="checkbox" id="phone" name="phone" value="yes" checked>
					<label for="phone">Sign me up for text offers.</label>
				</p>
			</div>

			<div class="location">
				<h3>Location</h3>
				<p>
					<label for="address_type">Type of Address</label>
					<select id="address_type" name="address_type">
						<option value="residence" selected>Residence</option>
						<option value="business">Business</option>
						<option value="university">University</option>
						<option value="military">Military</option>
					</select>
				</p>
				<p>
					<label for="address">Address</label>
					<input id="address" name="address" type"text" placeholder="Street Address">
				</p>
				<p>
					<label for="address_2">City</label>
					<input id="address_2" name="address_2" type="text" placeholder="City">
				
					<label for="state">State</label>
					<select id="state" name="state">
						<option value="">Select</option>
                        <option value="AL" >Alabama</option>
                        <option value="AK" >Alaska</option>
                        <option value="AZ" >Arizona</option>
                        <option value="AR" >Arkansas</option>
                        <option value="CA" >California</option>
                        <option value="CO" >Colorado</option>
                        <option value="CT" >Connecticut</option>
                        <option value="DE" >Delaware</option>
                        <option value="DC" >District of Columbia</option>
                        <option value="FL" >Florida</option>
                        <option value="GA" >Georgia</option>
                        <option value="HI" >Hawaii</option>
                        <option value="ID" >Idaho</option>
                        <option value="IL" >Illinois</option>
                        <option value="IN" >Indiana</option>
                        <option value="IA" >Iowa</option>
                        <option value="KS" >Kansas</option>
                        <option value="KY" >Kentucky</option>
                        <option value="LA" >Louisiana</option>
                        <option value="ME" >Maine</option>
                        <option value="MD" >Maryland</option>
                        <option value="MA" >Massachusetts</option>
                        <option value="MI" >Michigan</option>
                        <option value="MN" >Minnesota</option>
                        <option value="MS" >Mississippi</option>
                        <option value="MO" >Missouri</option>
                        <option value="MT" >Montana</option>
                        <option value="NE" >Nebraska</option>
                        <option value="NV" >Nevada</option>
                        <option value="NH" >New Hampshire</option>
                        <option value="NJ" >New Jersey</option>
                        <option value="NM" >New Mexico</option>
                        <option value="NY" >New York</option>
                        <option value="NC" >North Carolina</option>
                        <option value="ND" >North Dakota</option>
                        <option value="OH" >Ohio</option>
                        <option value="OK" >Oklahoma</option>
                        <option value="OR" >Oregon</option>
                        <option value="PA" >Pennsylvania</option>
                        <option value="RI" >Rhode Island</option>
                        <option value="SC" >South Carolina</option>
                        <option value="SD" >South Dakota</option>
                        <option value="TN" >Tennessee</option>
                        <option value="TX" >Texas</option>
                        <option value="UT" >Utah</option>
                        <option value="VT" >Vermont</option>
                        <option value="VA" >Virginia</option>
                        <option value="WA" >Washington</option>
                        <option value="WV" >West Virginia</option>
                        <option value="WI" >Wisconsin</option>
                        <option value="WY" >Wyoming</option>
                	</select>

                	<label for="zip">Zip</label>
                	<input id="zip" name="zip" type="text" placeholder="Zip">
				</p>
			</div>
			<button>Create Account</button>
		</form>
	</body>
</html>

















