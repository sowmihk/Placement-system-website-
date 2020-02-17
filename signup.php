<!DOCTYPE html>
<html>
<head>
<title> Sign up </title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 25%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
 .signupbtn {
  
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 10px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .signupbtn {
     width: 50%;
  }
}
</style></head>
<body>
<center>
<form action="/cip/db.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
  
    <h1>Sign Up</h1>
    
    <hr>
	<b>Name</b>
	</br>
	<input type="text" placeholder="Enter Name" name="name" required>
    </br>
    <b>Email</b>
    </br>
	<input type="text" placeholder="Enter Email" name="email" required>
     </br>
    <b>Password</b>
    </br>
	<input type="password" placeholder="Enter Password" name="psw" required>
     </br>
    <b>Repeat Password</b>
    </br>
	<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    </br>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
	</br>
	<h4>Already a <a href="login.php">member</a>? / I am a <a href="staffsignup.php">Staff</a></h4>
	
    
      <button type="submit" class="signupbtn">Sign Up</button>
    </center>
  </div>
</form>

</body>
</html>
