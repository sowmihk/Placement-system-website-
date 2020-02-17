<html>
   <head>
      <title>project</title>
   </head>
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
		 $db ='test';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
         
         
		 $c_name=$_POST["c_name"];
		 $job_description=$_POST["job_description"];
		 $job_type=$_POST["job_type"];
		 $val="select * from company where c_name='$c_name' and job_description='$job_description' and job_type='$job_type'";
		 $result = mysqli_query($conn, $val);
		 $row = mysqli_fetch_assoc($result);
		 
		 $id=$row["id"];
		 echo $id;
		 $del_val="DELETE FROM `company` WHERE id='$id'";
		 
			 
         if (mysqli_query($conn, $del_val)) {
          header("Location: staffhome.php");
                  }
		 
		
         
			
         
                 
         mysqli_close($conn);
      ?>
   </body>
</html>