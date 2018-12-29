
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
			</table>
		
			
		</div>
	</div>
</body>
</html>