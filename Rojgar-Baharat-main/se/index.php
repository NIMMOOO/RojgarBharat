<?php
require_once dirname(__DIR__).'/se/core/init.php';


print_r($_SESSION);
if(isset($_SESSION['empid']))
{
//	header('Location: home.php');
	print_r($_SESSION);
	session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="public/css/index.css">
    <script src="public/js/index.js"></script>


    <title>login</title>
</head>
<body>
<!-- 
<nav class="main-nav">
	<ul>
		<li><a class="signin" href="#0">Sign in</a></li>
		<li><a class="signup" href="#0">Sign up</a></li>
	</ul>
</nav> -->

<div class="user-modal is-visible">
		<div class="user-modal-container">
			<ul class="switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>

			<div id="login">
				<form class="form">
					<p class="fieldset">
						<label class="image-replace phone" for="signin_contact">Phone</label>
						<input class="full-width has-padding has-border" id="signin_contact" type="number" minlength="10" maxlength="10" placeholder="Phone">
						<span class="error-message">An account with this email address does not exist!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace password" for="signin_password">Password</label>
						<input class="full-width has-padding has-border" id="signin_password" type="password"  placeholder="Password">
						<a href="#0" class="hide-password">Show</a>
						<span class="error-message">Wrong password! Try again.</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Login" id="login_but">
					</p>
				</form>
				
				<p class="form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="close-form">Close</a> -->
			</div>

			<div id="signup">
				<form class="form" id="signup_form">
					<p class="fieldset">
						<label class="image-replace username" for="signup-username">Full Name</label>
						<input class="full-width has-padding has-border" id="signup_name" name="signup_name" type="text" placeholder="Full name" required>
						<span class="error-message">Your name can only contain alphabetic symbols!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup_contact" name="signup_contact" type="number" placeholder="Contact" required>
						<span class="error-message">Enter a valid phone number!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace password" for="signup_password">Password</label>
						<input class="full-width has-padding has-border" id="signup_password" name="signup_pass" type="password"  placeholder="Password" required>
						<a href="#0" class="hide-password">Show</a>
						<span class="error-message">Your password has to be at least 6 characters long!</span>
                    </p>
                    
                    <p class="fieldset">
                        <label for="memberType" class="full-width has-padding has-border">memberType : </label>

                        <select id="memberType" name="memberType">
                        <option value="job_seeker">Job Seeker</option>
                        <option value="employer">Employer</option>
                        </select>

                        <label for="employementType" class="full-width has-padding has-border">Type of Employment : </label>

                        <select id="employementType" name="employmentType">
                        <!-- <option value="Housekeeper">Housekeeper</option> -->
                        <!-- <option value="Custodian">Custodian</option>
                        <option value="Landscape technician">Landscape technician</option>
                        <option value="Emergency medical technician">Emergency medical technician</option>
                        <option value="Construction Worker">Construction Worker</option>
                        <option value="Painter">Painter</option>
                        <option value="Welder">Welder</option>
                        <option value="Automotive technician">Automotive technician</option>
                        <option value="Brick mason">Brick mason</option> -->
                        <option value="Carpenter">Carpenter</option>
                        <!-- <option value="Personal trainer">Personal trainer</option> -->
                        <!-- <option value="Firefighter">Firefighter</option> -->
                        <option value="Plumber">Plumber</option>
                        <option value="Electrician">Electrician</option>
                        <option value="Labourer">Labourer</option>
                    
                        </select>

						<span class="error-message">Your password has to be at least 6 characters long!</span>
                    </p>
                    
                    <p class="fieldset">
						<label class="image-replace password" for="signup_state">State</label>
						<input class="full-width has-padding has-border" id="signup_state" type="text"  placeholder="State" name="signup_state" required>
						<span class="error-message">Your password has to be at least 6 characters long!</span>
                    </p>

                    <p class="fieldset">
						<label class="image-replace password" for="signup_city">City</label>
						<input class="full-width has-padding has-border" id="signup_city" type="text"  placeholder="City" name="signup_city" required>
						<span class="error-message">Your password has to be at least 6 characters long!</span>
                    </p>

                    <p class="fieldset">
						<label class="image-replace password" for="signup_pincode">Pincode</label>
						<input class="full-width has-padding has-border" id="signup_pincode" type="number"  placeholder="Pincode" name="signup_pincode" required>
						<span class="error-message">Your password has to be at least 6 characters long!</span>
                    </p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree to the <a class="accept-terms" href="#0">Terms</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account" id="signup_but">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div>

			<div id="reset-password">
				<p class="form-message">Lost your password? Please enter your email address.</br> You will receive a link to create a new password.</p>

				<form class="form">
					<p class="fieldset">
						<label class="image-replace email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="error-message">An account with this email does not exist!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div>
			<a href="#0" class="close-form">Close</a>
		</div>
	</div>
        
</body>
</html>