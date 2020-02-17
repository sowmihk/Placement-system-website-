<html>
   <head>
      <title>Home</title>
   </head>
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
		 $db ='test';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
         
         $name=$_POST["name"];
		 $email=$_POST["email"];
		 $psw=$_POST["psw"];
		 $pswrepeat=$_POST["psw-repeat"];
         
		 $val = "insert into staffsignup values ('$name', '$email', '$psw', '$pswrepeat')";
		
         if (mysqli_query($conn, $val)) {
           header("Location: staffhome.php");
           }
         mysqli_close($conn);
      ?>
   </body>
</html>