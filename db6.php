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
		 $c_location=$_POST["c_location"];
		 $c_description=$_POST["c_description"];
		 $job_description=$_POST["job_description"];
		 $job_type=$_POST["job_type"];
		 $stipend=$_POST["stipend"];
         $eligibility=$_POST["eligibility"];
		 $branches=$_POST["branches"];
		 $selection_process=$_POST["selection_process"];
		 $lastdate=$_POST["lastdate"];
		 $confirmeddate=$_POST["confirmeddate"];
		 $link=$_POST["link"];
		 
		 $val = "insert into company values ('$c_name', '$c_location', '$c_description', '$job_description', '$job_type', '$stipend','$eligibility','$branches','$selection_process','$lastdate','$confirmeddate','$link')";
		
         if (mysqli_query($conn, $val)) {
          header("Location: ok.php");
                  }
         mysqli_close($conn);
      ?>
   </body>
</html>