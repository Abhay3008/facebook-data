<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>facebook</title>
</head>
<body bgcolor="#E9EBEE">



	<div class="top">
		<div id="fb" class="top">facebook</div>
		<div id ="mail-text" class="top">Email or Phone &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPassword<br>
		<input placeholder="Email" type="mail" name="name" size="10px">
		<input placeholder="Password" type="password" name="password" size="10px"><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#"><div id="forgot" class="top">Forgotten account?</div> </a>
		</div>
		<input type="submit" class="login" value="Log In">
	</div>
	<div class="main">
		<div id="text1" class="main">
		<p>Facebook helps you connect and share with the people in your life.</p>
		<img src="<?php echo getenv('url') ?>/a.png" alt="Girl in a jacket" width="500" height="600">
		</div>
		<div id="create-acc" class="main">Create an account</div>
		<div id="quick" class="main">It's quick and easy</div>
			<div id="new-acc-panel" class="main">
			<input  type="text" id="textfield1" name="name1" placeholder="First name">
			<input  type="text" id="textfield1" placeholder="Surname"> <br>
			<input  type="text" id="textfield2" placeholder="Mobile number or email address"><br>
			<input  type="password" id="textfield2" placeholder="New password" ><br>
		</div>
			<div id ="Birthday" class="main">Birthday<br>
				<select>
			<option >1</option>
			<option >2</option>
			<option >3</option>
			<option >4</option>
			<option >5</option>
			<option >6</option>
			<option >7</option>
			<option >8</option>
			<option >9</option>
			<option >10</option>
			<option >11</option>
			<option >12</option>
			<option >13</option>
			<option >14</option>
			<option >15</option>
			<option >16</option>
			<option >17</option>
			<option >18</option>
			<option >19</option>
			<option >20</option>
			<option >21</option>
			<option >22</option>
			<option >23</option>
			<option >24</option>
			<option >25</option>
			<option >26</option>
			<option >27</option>
			<option >28</option>
			<option >29</option>
			<option >30</option>
			<option >31</option>
			</select>
			<select >
			<option >jan<option>
			<option >feb</option>
			<option >mar</option>
			<option >apr</option>
			<option >may</option>
			<option >june</option>
			<option >july</option>
			<option >aug</option>
			<option >sept</option>
			<option >oct</option>
			<option >nov</option>
			<option >dec</option>	
			</select>
			<select>
			<option >2001</option>
			<option >2002</option>
			<option >2003</option>
			<option >2004</option>
			<option >2005</option>
			<option >2006</option>
			<option >2007</option>
			<option >2008</option>
			<option >2009</option>
			<option >2010</option>
			<option >2011</option>
			<option >2012</option>
			<option >2013</option>
			<option >2014</option>
			<option >2015</option>
			<option >2016</option>
			<option >2017</option>
			<option >2018</option>
			<option >2019</option>
			<option >2020</option>
			</select><a href="#"><img src="question.png"></a> <br>
			</div>
			<div id ="Gender" class="main">Gender<br>
			<img src="facebook1.png" style="display:none" width="0" height="0">
			<input type="radio" id="r-b" name="sex" value="Female" />Female
			<input type="radio" id="r-b" name="sex" value="Male" />Male
			<input type="radio" id="r-b" name="sex" value="Custom" />Custom 
			<a href="#"><img src="question.png"></a> <br>
			<p id="terms">By clicking Sign Up, you agree to our <a href="#">Terms, Data Policy</a>  and <a href="#">Cookie Policy.</a>  You may receive SMS notifications from us and can opt out at any time.</p>
			<input type="submit" class="signup" value="Sign Up" />
			<p id="page"><a href="#">Create a Page </a> for a celebrity, band or business.</p>
			</div>
	</div>
	<div class="bottom">
		<a href="#"><div id="lang" class="bottom">
			English(UK) &nbsp&nbsp&nbsp&nbspहिन्दी&nbsp&nbsp&nbsp&nbsp اردو&nbsp&nbsp&nbsp&nbsp ਪੰਜਾਬੀ &nbsp&nbsp&nbsp&nbspবাংলা&nbsp&nbsp&nbsp&nbsp ગુજરાતી&nbsp&nbsp&nbsp&nbsp मराठी &nbsp&nbsp&nbsp&nbspதமிழ் &nbsp&nbsp&nbsp&nbspతెలుగు&nbsp&nbsp&nbsp&nbsp മലയാളം &nbsp&nbsp&nbsp&nbspಕನ್ನಡ <img src="plus.png"><br><hr id="line"></div><div id="link" class="bottom">
			<br>    Sign Up &nbsp&nbsp&nbsp&nbspLog In &nbsp&nbsp&nbsp&nbspMessenger &nbsp&nbsp&nbsp&nbspFacebook Lite&nbsp&nbsp&nbsp&nbsp Watch&nbsp&nbsp&nbsp&nbsp People&nbsp&nbsp&nbsp&nbspPage  categories&nbsp&nbsp&nbsp&nbspPlaces&nbsp&nbsp&nbsp&nbspGames&nbsp&nbsp&nbsp&nbspLocations&nbsp&nbsp&nbsp&nbspMarketplace&nbsp&nbsp&nbsp&nbspGroups&nbsp&nbsp&nbsp&nbspInstagram&nbsp&nbsp&nbsp&nbspLocal&nbsp&nbsp&nbsp&nbspFundraisers&nbsp&nbsp&nbsp&nbspServices&nbsp&nbsp&nbsp&nbspAbout&nbsp&nbsp&nbsp&nbspCreate ad&nbsp&nbsp&nbsp&nbspCreate Page&nbsp&nbsp&nbsp&nbspDevelopers&nbsp&nbsp&nbsp&nbspCareers&nbsp&nbsp&nbsp&nbspPrivacy&nbsp&nbsp&nbsp&nbspCookies&nbsp&nbsp&nbsp&nbspAdChoices&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTermsHelp&nbsp&nbsp&nbsp&nbsp Settings&nbsp&nbsp&nbsp&nbsp Activity log</div>
		</a>

	</div>
</body>
</html>
<?php
print getenv('b') . "\n";


?>

