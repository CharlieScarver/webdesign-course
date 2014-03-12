<html> 
	<head>
	
		<title> Web Design Course - Lecture 09 - Task 01 </title>	

		<link rel="stylesheet" type="text/css" href="example_css.css" media="screen" > 

	</head>


	<body>

		<?php

		$display['form'] = true;
		$display['q1'] = false;
		$display['q2'] = false;
		$display['q3'] = false;
		$display['q4'] = false;
		$display['q5'] = false;

		if(isset($_POST['Register']) && $_POST['country'] == "What") {
			// If the country is "What?
			foreach ($display as $key=>$val) {$display[$key] = false;}
			$display['q1'] = true;
		} else if(isset($_POST['ToForm'])) {
			// If we want to get back to the form
			foreach ($display as $key=>$val) {$display[$key] = false;}
			$display['form'] = true;
		} else if(isset($_POST['What']) && $_POST['What'] == "What?") {
			// Speak english? What?
			foreach ($display as $key=>$val) {$display[$key] = false;}
			$display['q2'] = true;
		} else if(isset($_POST['What']) && $_POST['What'] == "Yes! Yes!") {
			// English MotherFucker
			foreach ($display as $key=>$val) {$display[$key] = false;}
			$display['q3'] = true;
		} else if(isset($_POST['What']) && $_POST['What'] == "Yes!") {
			//  Then you know what I'm sayin'
			foreach ($display as $key=>$val) {$display[$key] = false;}
			$display['q4'] = true;
		}
		else if (isset($_POST['description'])) {
			foreach ($display as $key=>$val) {$display[$key] = false;}
			$display['q5'] = true;
		}


		if ($display['form'] == true) {
			echo '
			<form method="POST">
			<fieldset>
				<legend> Login information </legend>

				<label for="username"> Username </label>
				<input type="text" name="username" id="username" required="required" class="block" />

				<label for="email"> Email </label>
				<input type="email" name="email" id="email" class="block" />

				<label for="password"> Password </label>
				<input type="password" name="password" id="password" required="required" class="block" />

			</fieldset>

			<fieldset>
				<legend> Additional information </legend>

				<label for="first_name"> First Name </label>
				<input type="text" name="first_name" id="first_name" class="block" />

				<label for="last_name"> Last Name </label>
				<input type="text" name="last_name" id="last_name" class="block" />

				<label id="gender_label" class="block"> Gender: </label>
				<label for="male"> Male </label>
				<input type="radio" name="gender" id="male" value="male" >

				<label for="female"> Female </label>
				<input type="radio" name="gender" id="female" value="female" >

				<label for="country_select" id="country_label" class="block" > What country are you from? </label>
				<select name="country" id="country_select" class="block">
					<option value="">Select a country</option>
					<option value="What">What?</option>
					<option value="Bulgaria">Bulgaria</option>
					<option value="Russia">Russia</option>
					<option value="USA">USA</option>
					<option value="Japan">Japan</option>
				</select>

				<label for="github" id="github_label" class="block"> GitHub </label>
				<input type="url" name="github" id="github" class="block" />

				<label id=music_label class=block> Music Taste: </label>
				<ul class="music_taste">
					<li>
						<label for=c1> Rock </label>
						<input type=checkbox name=music_genre id=c1 value=Rock>
					</li>
					<li>
						<label for=c2> Classical </label>
						<input type=checkbox name=music_genre id=c2 value=Classical>
					</li>
					<li>
						<label for=c3> Hip-hop </label>
						<input type=checkbox name=music_genre id=c3 value=Hip-hop>
					</li>
					<li>
						<label for=c4> Rap </label>
						<input type=checkbox name=music_genre id=c4 value=Rap>
					</li>
				</ul>

			</fieldset>

			<input type="submit" name="Register" value="Register" id="submit" >

		</form>
			';

		} else if ($display['q1'] == true) {

			echo "
			<div>
				<p id=\"q1\"> 
				\"What\" ain't no country I've ever heard of. <br>
				&nbsp &nbsp &nbsp &nbsp &nbsp They speak English in What?
				</p>

				<form method=POST id=what>
					<input type=submit name=What value=What?>
				</form>

			</div>
			";
		} else if ($display['q2'] == true) {

			echo "
			<div>
				<p id=\"q1\"> 
				English, motherfucker, do you speak it?
				</p>

				<form method=POST id=what>
					<input type=submit name=What value=\"Yes! Yes!\">
				</form>
			</div>
			";
		} else if ($display['q3'] == true) {
			
			echo "
			<div>
				<p id=\"q1\"> 
				Then you know what I'm sayin'!
				</p>

				<form method=POST id=what>
					<input type=submit name=What value=\"Yes!\">
				</form>
			</div>
			";

		} else if ($display['q4'] == true) {

			echo "
			<div>
				<p id=\"q1\"> 
				Describe what Marsellus Wallace looks like!
				</p>

				<form method=POST id=what>
					<label for=describtion> Your Describtion of M. Wallace: </label>
					<input type=text name=description id=description class=block />

					<input type=submit name=What value=\"This is it\">
				</form>
			</div>
			";

		} else if ($display['q5'] == true) {

			$des = split(" ", $_POST['description']);
			echo "<p id=q1> Marsellus Wallace is <br>";
			for ($i = 0; $i < count($des); $i++) {
				echo "&nbsp {$des[$i]}";
			}
			echo "<br><br><br><br>
			Thank you for your cooperation! <br>
			Now we can find him <br> and bring him to justice! 
			</p>";
		}

		?>

		<form method=POST id=BackToForm>
			<input type=submit name=ToForm value=ToForm>
		</form>

	</body>


</html>
