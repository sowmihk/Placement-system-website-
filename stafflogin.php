<!DOCTYPE html>
<html>
<head>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}




.container {
  padding: 16px;
  
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<title> Login </title>
</head>
<body>
<center>
<h2>Placement System</h2>
<h2>Staff login</h2>
</center>
<form action="/cip/db3.php" method="post">
  
<center>
  <div class="container">
   <b> Username </b>
   </br>
    <input type="text" placeholder="Enter Email" name="email" required>
    </br>
    <b>Password</b>
	</br>
    <input type="password" placeholder="Enter Password" name="psw" required>
        </br>
    <button type="submit">Login</button>
    
	</br>
	<h4>I am a <a href="login.php">Student</a> / New <a href="staffsignup.php">member</a>?</h4>
	
  
</center>
  
</form>

</body>
</html>
