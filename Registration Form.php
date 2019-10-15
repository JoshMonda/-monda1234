<!DOCTYPE html>
<html>
<head>
	<title>My First Web</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
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
  Name: <input type="text" name="username">
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
	<fieldset>
    <table>
	<form action="connection.php" method="POST">
	<legend><img src="img/wp1857499.jpg"class="picture"></legend>
	<marquee scrollamount="20" scrolldelay="300">
	<p>Personal information</p> 
</marquee>
	<tr>
	<td>Username:</td>
	<td><input type="text" name="uname1" placeholder="Enter Username" required=""></td>
       </tr>
	<br>
	<tr>
	<td>Email:</td>
	<td><input type="Email" name="Email"placeholder="Enter Email id" required=""></td>
    </tr>
	<br>
	<tr>
	<td>Password:</td>
	<td><input type="Password" name="pass1" placeholder="Enter Password" required=""></td>
    </tr>
	<br>
	<tr>
    <td>Re-type:</td>
	<td><input type="Password" name="pass2" placeholder="Re-enter Password" required=""></td>
    </tr>
    <br>
	<td><input type="button" name="Submit"value="Register"class="reg"></td>
	<br>
	</form>
	</table>
	<a href="Login.html"><button type="Login" class="main-login">existing user,login!?</a></button>
</fieldset>
</div>
</body>
</html>