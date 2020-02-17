<html>
   <head>
      <title>Add info</title>
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






.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}


input[type=text], input[type=password] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
form {border: 3px solid #f1f1f1;}
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
.container {
  padding: 16px;
  
}





</style>
   </head>
   <body>
      
			 
			 <ul>
			 <center><h1><font color="white"> <i><b> Placement System</b></i></font></h1></center>
			 
            <li><a href="/cip/staffhome.php">Job</a></li>
			 <li><a href="/cip/staffproject.php">Project</a></li>
			 
			 <li><a class="active" href="/cip/add.php">Add</a></li>
              <li><a href="/cip/staffprofile.php">Profile</a></li>
              <li><a href="/cip/staffabout.php">About</a></li>
			  <li><a href="/cip/login.php">Sign out</a></li>
              </ul>

             <div class="dropdown">
  <button class="dropbtn">=</button>
  <div class="dropdown-content">
    <a href="/cip/job.php">Job</a>
    <a href="/cip/Add.php">Project</a>
    
    
  </div>
</div>
<center>

<form action="/cip/db6.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
  
    <h1><font color="blue">Internship</font></h1>
    
    <hr>
	<b>Name</b>
	</br>
	<input type="text" placeholder="Enter Name" name="c_name" required>
    </br>
   
       <b>Company location</b>
	</br>
	<input type="text" placeholder="Company Location" name="c_location" required>
    </br>
        
        <b>Company Description</b>
	</br>
	<input type="text" placeholder="Company Description" name="c_description" required>
    </br>

        <b>Job Description</b>
	</br>
	<input type="text" placeholder="Job Description" name="job_description" required>
    </br>

<b>Time Duration</b>
	</br><table>
	<tr><td><input type="radio" name="job_type" value="full-time"> Full-time<br></tr></td>
	<tr><td><input type="radio" name="job_type" value="intern"> Intern<br></table></tr></td>
    </br>


        <b>Stipend</b>
	</br>
	<input type="text" placeholder="Stipend" name="stipend" required>
    </br>

         <b>Criteria</b>
	</br>
	<input type="text" placeholder="Eligibility Criteria" name="eligibility" required>
    </br>

        <b>Branches</b>
	</br>
	<input type="text" placeholder="Branches" name="branches" required>
    </br>

       <b>Selection process</b>
	</br>
	<input type="text" placeholder="Selection Process" name="selection_process" required>
    </br>

        
	
        <b>Last Date</b>
	</br>
	<input type="text" placeholder="Last Date" name="lastdate" required>
    </br>

        <b>Confirmed date</b>
	</br>
	<input type="text" placeholder="Confirmed Date" name="confirmeddate" required>
    </br>

         <b>Link</b>
	</br>
	<input type="text" placeholder="Link" name="link" required>
    </br>
   </form>
</center>   

			 
   </body>
</html>