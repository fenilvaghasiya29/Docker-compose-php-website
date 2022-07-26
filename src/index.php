<!DOCTYPE html>
<html lang="en">
   <head>
      <title>User Data</title>
   </head>
   <body>
      <center>
         <h1>Storing Form data in Database</h1>
         <form action="insert.php" method="post">


	     <p>
               <label for="firstname">First Name:</label>
               <input type="text" name="firstname" id="firstname">
            </p>
            <p>
               <label for="lastname">Last Name:</label>
               <input type="text" name="lastname" id="lastname">
            </p>
 
 	     <p>
               <label for="email">Email Address:</label>
               <input type="text" name="email" id="email">
            </p>
 
 	     <p>
               <label for="phone">Phone Number:</label>
               <input type="text" name="phone" id="phone">
            </p>
 

            <input type="submit" value="Submit">
         </form>
      </center>
   </body>
</html>
