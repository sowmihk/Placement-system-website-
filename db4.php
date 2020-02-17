<html>
   <head>
      <title>Signup</title>
   </head>
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
		 $db ='test';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
         
         $coll=$_POST["college"];
		 $dept=$_POST["department"];
		 $yr=$_POST["year"];
		 $sem=$_POST["semester"];
		 $cgpa=$_POST["cgpa"];
         
		 $val = "insert into details values ('$coll', '$dept', '$yr', '$sem', '$cgpa')";
		
         if (mysqli_query($conn, $val)) {
          header("Location: home.php");
                  }
         mysqli_close($conn);
      ?>
   </body>
</html>