<!DOCTYPE html>
<html>

<head>
        <title>Insert Page page</title>
</head>

<body>
        <center>
                <?php

                // servername => localhost
                // username => root
                // password => empty
                // database name => test
                $conn = mysqli_connect("mysql", "root", "helloworld", "test");

                // Check connection
                if($conn === false){
                        die("ERROR: Could not connect. "
                                . mysqli_connect_error());
                }

		$firstname=$_REQUEST['firstname'];
		$lastname=$_REQUEST['lastname'];
                $email = $_REQUEST['email'];
                $phone = $_REQUEST['phone']
                
                $sql = "INSERT INTO example VALUES ('$firstname','$lastname','$email', '$phone')";

                if(mysqli_query($conn, $sql)){
                        echo "<h3>data stored in a database successfully."
                                . " Please browse your localhost php my admin"
                                . " to view the updated data</h3>";
			echo $firstname;
			echo "\n";
 			echo $lastname;
 			echo "\n";
                       echo $email;
                       echo "\n";
                        echo $phone;
                        
                } else{
                        echo "ERROR: Hush! Sorry $sql. "
                                . mysqli_error($conn);
                }

                // Close connection
                mysqli_close($conn);
                ?>
        </center>
</body>

</html>

