<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="Login.css">
</head>
<body>
	<?php
// define variables and set to empty values
$name = $email = $gender = $comment ="" $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
<div class="box">	
<form action="Login.php" method="POST">
	<div class="main">
	<fieldset>
	<legend><img src="img/luminositylink-hacker-colton-grubbs-min.jpg" class="picture"></legend>
	<table>
	<marquee srollamount="5000">
	<h1>Login here</h1>
</marquee>
	<marquee srollamount="200">
	<p>please provide accurate<br>Information</p>
</marquee>
	<form action="Login.php" method="POST">
	<div class="user">
	<tr>
	<td>username:</td><br>
	<td><input type="text"id="username" name="username" placeholder="Enter Your Username"required="">
	</td>
   </tr>
	<br>
	<tr>
	<td>password:</td>
	<td><input type="Password" id="password" name="password" placeholder="Enter Your Password"required=""><td>
	</tr>
</div>
	<br>
	<td><a href="Website.html"><input type="button" name="Login" value="Login" class="sub"></td>
</fieldset>
	</table>
	<br>
	<a href="Login.html"><button type="Login" class="Lgin">Forget Password</a></button>
	<a href="Registration Form.html"><button type="Join us"class="Join">Create New</a></button>  
 </div>
	</form>
</div>
   

</body>
</html>