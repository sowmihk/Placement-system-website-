<html>
   <head>
      <title>Profile</title>
	  <style>
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
div {
  background-color: white;
  width: 1175px;
 border: 2px solid black;
  outline: black solid 9px;
  padding: 50px;
  margin: 25px;
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
			
             <li><a href="/cip/home.php">Job</a></li>
			 <li><a href="/cip/project.php">Project</a></li>
			 <li><a class="active" href="/cip/add.php">Add</a></li>
              <li><a href="/cip/profile.php">Profile</a></li>
              <li><a href="/cip/about.php">About</a></li>
			  <li><a href="/cip/login.php">Sign out</a></li>
              </ul>
				
			  <br />
              <div><center>
					    <?php 
                    echo "Successfully added";?>
					</h4></div></center>

   </body>
</html>