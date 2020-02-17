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
         
		 $email=$_POST["email"];
		 $psw=$_POST["psw"];
		 $val = "select * from signup where email='$email' and psw='$psw'";
		 
		 if ($result=mysqli_query($conn, $val)) {
			 $chck=mysqli_num_rows($result);
			 
			 if($chck==0){ echo "wrong userbname and psw";}
			 else{
			 header("Location: home.php");}
           } else {
            echo "Error: " . $val . "<br>";
                  }
         mysqli_close($conn);
      ?>
   </body>
</html>