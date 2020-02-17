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
         
         $title=$_POST["title"];
		 $name=$_POST["name"];
		 $dept=$_POST["dept"];
		 $area=$_POST["area"];
		 
		 $val="select * from project where title='$title' and name='$name' and dept='$dept' and area='$area'";
		 $result = mysqli_query($conn, $val);
		 $row = mysqli_fetch_assoc($result);
		 
		 $id=$row["id"];
		 echo $id;
		 $del_val="DELETE FROM `project` WHERE id='$id'";
		 
			 
         if (mysqli_query($conn, $del_val)) {
          header("Location: staffproject.php");
                  }
		 
		
         
			
         
                 
         mysqli_close($conn);
      ?>
   </body>
</html>