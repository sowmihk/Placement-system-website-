<html>
   <head>
      <title>Home</title>
	  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
h4{
  color:DodgerBlue;
  font-family: "Times New Roman", Times, serif;
  font-size: 20px;
}
u{
	color: green;
}
h5{
  color:DodgerBlue;
  font-family: "Times New Roman", Times, serif;
  font-size: 20px;

}

div {
  background-color: white;
  width: 1175px;
 border: 2px solid black;
  outline: black solid 9px;
  padding: 50px;
  margin: 25px;
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
			 
             <li><a href="/cip/staffhome.php">Job</a></li>
			 <li><a class="active" href="/cip/staffproject.php">Project</a></li>
			 <li><a href="/cip/Add.php">Add</a></li>
              <li><a href="/cip/profile.php">Profile</a></li>
              <li><a href="/cip/about.php">About</a></li>
			  <li><a href="/cip/login.php">Sign out</a></li>
              </ul>
			  
              <?php
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
		        $db ='test';
                $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
        
		        $val = "select * from project";
                $result = mysqli_query($conn, $val);

                if (mysqli_num_rows($result) > 0) 
				{
					while($row = mysqli_fetch_assoc($result)) 
				    {
						?><h4><div>
					    <?php echo "<b><u>Project title</u></b><br><i>" . $row["title"]. "</i><br><b><u>Staff name</u></b><br><i>" . $row["name"]. 
						"</i><br><b><u>Department</u></b><br><i>" . $row["dept"]. "</i><br><b><u>Area of the project</u></b><br><i>" . $row["area"]. 
                        "</i><br><b><u>Contact Number</u></b><br><i>" . $row["contact"]. "	</i><br><b><u>Mail id</u></b><br><i>" 
						. $row["mail"]. "</i>";
				         ?> </h4></div><hr><?php
				         
				         
					}
				}
				else 
				{
					?><h4><div><center>
					    <?php 
                    echo "No Projects available";?>
					</h4></div></center><hr><?php
				}
				mysqli_close($conn);
				?>

 

			 
   </body>
</html>