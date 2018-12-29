<?php
include('connetion.php');
if(isset($_POST['done']))
{
	$Firstname=$_POST['Firstname'];
	$lastname=$_POST['lastname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	


	$q="INSERT INTO `student`(`Firstname`, `lastname`, `username`, `password`)  VALUES ('$Firstname','$lastname','$username','$password')";
	$query=mysqli_query($con, $q);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body background=https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwjJ6uTQspnfAhWKqY8KHRszDJIQjRx6BAgBEAU&url=%2Furl%3Fsa%3Di%26source%3Dimages%26cd%3D%26cad%3Drja%26uact%3D8%26ved%3D%26url%3Dhttps%253A%252F%252Fwww.youtube.com%252Fwatch%253Fv%253DvaEY0RL8Fs4%26psig%3DAOvVaw1YLNi42KhAUGl9JnxlOBSN%26ust%3D1544673307921277&psig=AOvVaw1YLNi42KhAUGl9JnxlOBSN&ust=1544673307921277>
	<form method="POST">
		<label>First Name:</label><br>
		<input type="text" name="Firstname" placeholder="fname"><br> 
		<label>Last Name:</label><br>
		<input type="text" name="lastname" placeholder="Lastname"><br>
		<label>Username:</label><br>
		<input type="text" name="username" placeholder="username"><br>
		<label>Password:</label><br>
		<input type="text" name="password" placeholder="Password"><br><br>
		<button type="submit"  name="done" class="btn-danger">Submit</button><br>

	</form>
	<td>Id</td>
				<td>Name</td>
				<td>Address</td>
				<td>Phone</td><br>
        <?php
		               include 'connection.php';
		            
	                    $q="select * from profile";
		                $query=mysqli_query($con,$q);
		                while ($res=mysqli_fetch_array($query)) { 


		              
		            

        ?>
		 
				
					       <tr class="text-center">
							<td><?php echo $res['id']; ?></td>
							<td> <?php echo $res['name']; ?></td>
							<td> <?php echo $res['add']; ?></td>
						
							<td> <?php echo $res['phone'];?></td>
						
				         </tr></br>
		         <?php // </br> breaks the table row.
			} 
			?>

</body>
</html>