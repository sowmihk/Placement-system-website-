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
		 $contact=$_POST["contact"];
		  $mail=$_POST["mail"];
         
		 $val = "insert into project values ('$title', '$name', '$dept', '$area', '$contact', '$mail')";
		
         if (mysqli_query($conn, $val)) {
          header("Location: ok.php");
                  }
         mysqli_close($conn);
      ?>
   </body>
</html>