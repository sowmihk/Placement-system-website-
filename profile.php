<html>
   <head>
      <title>Profile</title>
	  <style>


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




	  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
</style>
   </head>
   <body>		 
			 <ul>
			 <center><h1><font color="white"> <i><b> Placement System</b></i></font></h1></center>
			
             <li><a chref="/cip/home.php">Job</a></li>
			 <li><a href="/cip/project.php">Project</a></li>
              <li><a class="active" href="/cip/profile.php">Profile</a></li>
              <li><a href="/cip/about.php">About</a></li>
			  <li><a href="/cip/login.php">Sign out</a></li>
              </ul>
				<center><h1><b>Profile</b></h1></center>
			  <br />
							
						<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}

?>

<?php 
	$sql = "select * from signup  ";
	$rs = mysqli_query($conn, $sql);
	//get row
	$fetchRow = mysqli_fetch_assoc($rs);
?> 


	
	<center>
	<div class="container">
	<form action="" method="post">
	<b>Name</b>
	<br />
	<input type="text" name="title" value="<?php echo $fetchRow['name']?>" required>
	<br />
    <b>Email</b>
	<br/>
	<input type="text" name="title" value="<?php echo $fetchRow['email']?>" required>

		<br />
	<button type="edit" name="edit">Edit</button>
	</form>
	</div> 

</center>
</body>
</html>
			  


