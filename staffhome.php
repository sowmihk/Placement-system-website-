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

.signupbtn {
     width: 25%;
  }
  button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
 
  
  width: 25%;
  
}




</style>
   </head>
   <body>
      
			 
			 <ul>
			 <center><h1><font color="white"> <i><b> Placement System</b></i></font></h1></center>
			 
             <li><a class="active" href="/cip/staffhome.php">Job</a></li>
			  <li><a href="/cip/staffproject.php">Project</a></li>
			 <li><a href="/cip/Add.php">Add</a></li>
              <li><a href="/cip/staffprofile.php">Profile</a></li>
              <li><a href="/cip/staffabout.php">About</a></li>
			  <li><a href="/cip/login.php">Sign out</a></li>
              </ul>
               

              <?php
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
		        $db ='test';
                $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
        
		        $val = "select * from company";
                $result = mysqli_query($conn, $val);

                if (mysqli_num_rows($result) > 0) 
				{
					while($row = mysqli_fetch_assoc($result)) 
				    {
						?><h4><div>
					    <?php 
						$id=uniqid();
						
						echo "<b><u>Company Name</u></b><br><i>" . $row["c_name"]. "</i><br><b><u>Location</u></b><br><i>" . $row["c_location"]. 
						"</i><br><b><u>Company Description</u></b><br><i>" . $row["c_description"]. "</i><br><b><u>Job Description</u></b><br><i>" . $row["job_description"]. 
                        "</i><br><b><u>Job type</u></b><br><i>" . $row["job_type"]. "	</i><br><b><u>Stipend</u></b><br><i>" 
						. $row["stipend"]. "</i><br><b><u>Eligibility Criteria</u></b><br><i>" . $row["eligibility"]. "</i><br><b><u>Branches</u></b><br><i>" . $row["branches"]
						. "</i><br><b><u>Selection Process</u></b><br><i>" . $row["selection_process"]. "</i><br><b><u>Last date for registration</u></b><br><i>" . $row["lastdate"]
						. "</i><br><b><u>Confirmed dates</u></b><br><i>" . $row["confirmeddate"]. "</i><br><b><u>Link</u></b><br><i><a href='".$row['link']."'>".$row['link']."</a></i> ";
				         ?> <br/>
						     <br>
							 
                                    <center>
	                                   <form action="/cip/delete.php" method="POST" >
									       <input type="hidden" id="c_name" name="c_name" value="<?php echo $row['c_name']; ?>">
										   <input type="hidden" id="job_description" name="job_description" value="<?php echo $row['job_description']; ?>">
										   <input type="hidden" id="job_type" name="job_type" value="<?php echo $row['job_type']; ?>">
  
									       <button type="submit" class="signupbtn">Delete</button>
										   </form>
									   
									   
									   </h4><hr></div>
									   
									   </center>
									   
									   
									   <?php
				                   									 
				         
					}
				}
				else 
				{
                    ?><h4><div><center>
					    <?php 
                    echo "No jobs available";?>
					</h4></div></center><hr><?php
				}
				mysqli_close($conn);
				?>			   
			  


			 
   </body>
</html>