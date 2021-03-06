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


<html>
<head>
	<title>PIZZA ORDER FORM</title>
</head>
	<body>
		<h1 align="center">Welcome to Your New Favorite Pizza Place!</h1>
		<form method="POST" action="/forms/pizza_form.php">

			<div class="sign_in">
				<h2>Login</h2>
				<p>
					<label for="username">Email:</label>
					<input id="username" name="username" type="email" placeholder="Email">
				</p>
				<p>
					<label for="password">Password</label>
					<input id="password" name="password" type="password" placeholder="Password">
				</p>
				<button >Sign In!</button>
			</div>

			<div class="sign_up">
				<h2>Sign Up</h2>
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
				<button>Create Account</button>
			</div>

			<div class="location">
				<h2>Location</h2>
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
			<div class="create_order">
				<h2>Create Your Order</h2>
				<p>
					<label for="size">Size</label>
					<select id="size" name="size">
						<option value="small">Small</option>
						<option value="medium">Medium</option>
						<option value="large">Large</option>
						<option value="x-large">X-Large</option>
					</select>
				</p>
				<p>
					<label for="crust">Crust Type</label>
					<select id="crust" name="crust">
						<option value="hand-tossed" selected>Hand Tossed</option>
						<option value="thin">Thin</option>
					</select>
				</p>
				<p>
					<label for="cut">Cut</label>
					<select id="cut" name="cut">
						<option value="normal" selected>Normal</option>
						<option value="square">Square</option>
					</select>
				</p> 
				<p>
					<label for="bake">Baked</label>
					<select id="bake" name="bake">
						<option value="normal" selected>Normal</option>
						<option value="well_done">Well Done</option>
					</select>
				</p>
				<p>
					<label for="sauce">Sauce</label>
					<select id="sauce" name="sauce">
						<option for="original" selected> Original</option>
						<option for="bbq">BBQ</option>
						<option for="ranch">Ranch</option>
					</select>
				</p>
				<p>
					<label for="how_much_sauce">How Much Sauce</label>
					<select id="how_much_sauce" name="how_much_sauce">
						<option vlaue="no_sauce">No Sauce</option>
						<option vlaue="light">Light</option>
						<option vlaue="normal" selected>Normal</option>
						<option vlaue="extra">Extra</option>
					</select>
				</p>
				<p>
					<label for="how_much_cheese">How Much Cheese</label>
					<select id="how_much_cheese" name="how_much_cheese">
						<option value="no_cheese">No Cheese</option>
						<option value="normal" seleced>Normal</option>
						<option value="extra_cheese">Extra Cheese</option>
					</select>
				</p>
				<p>
					<label for="meat_toppings">Meat Toppings</label>
					<select id="meat_toppings" name="meat_toppings">
						<option value="pepperoni">Pepperoni</option>
						<option value="bacon">Bacon</option>
						<option value="grilled chicken">Grilled Chicken</option>
						<option value="beef">Beef</option>
						<option value="sausage">Sausage</option>
						<option value="anchovies">Anchovies</option>
						<option value="ham">Ham</option>
					</select>
				</p>
				<p>
					<label for="veggies">Veggie Toppings</label>
					<select id="veggies" name="veggies">
						<option value="pineapple">Pineapple</option>
						<option value="black_olives">Black Olives</option>
						<option value="green_olives">Green Olives</option>
						<option value="tomatoes">Tomatoes</option>
						<option value="jalapeno">Jalapeno</option>
						<option value="mushroom">Mushroom</option>
						<option value="green_peppers">Green Peppers</option>
						<option value="onion">Onion</option>
						<option value="pickles">Pickles</option>
						<option value="banana_peppers">Banana Peppers</option>
					</select>
				</p>
				<p>
					<label for="cheese_type">Cheese Toppings</label>
					<select id="cheese_type" name="cheese_type">
						<option value="shredded_swiss">Shredded Swiss</option>
						<option value="extra_cheese">Extra Cheese</option>
						<option value="three_cheese">Three Cheese Blend</option>
						<option value="parm_romano">Parmesan Romano</option>
					</select>
				</p>
				<p>
					<label for="quanitiy">Quantity</label>
					<input name="quanitiy" id="quanitiy" type="number">
				</p>
				<p>
					<button>Add to Cart!</button>
				</p>
			</div>
			<div class="delivery_location">
				<h2>Delivery 	Location</h2>
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
				<p>
					<button>Submit Your Order!!</button>
				</p>
			</div>
		</form>
	</body>
</html>





				












