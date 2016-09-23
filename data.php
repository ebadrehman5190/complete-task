<?php include('session1.php'); ?>

<!doctype html>
<html>
<head>
	<title>data</title>
	<link rel="stylesheet" href="history.css">
</head>
<body>
<!------------- header bar ------------------>	
	<div class="header-bar">
		<div class="header-option">
			<div class="home">
				<a href="Entry.php">Home</a>	
			</div>	
		</div>
		<div class="logout">
				<input name="logout" type="button" id="logout" value="logout" onclick="window.location='logout1.php'" >
		</div>
	</div>	
<br>    
<form action='#' method="post">
<?php		
		$conn = mysqli_connect('localhost','root','mysql','mysql');
		mysqli_select_db($conn,"mysql");

		$query = "SELECT * FROM Lunch_system ";			
		$result = mysqli_query($conn,$query);
		
echo '<table border="2">';
	echo '<tr>';
		echo '<th>DELETE</th>';	
		echo '<th>S.No</th>';
		echo '<th>Date</th>';
		echo '<th>Members</th>';
		echo '<th>Items</th>';
        echo '<th>Paid</th>';
		echo '<th>Amount</th>';
		echo '<th>Per_head</th>';
		echo '<th>Unselected_member</th>';
		echo '<th>Unselected_amount</th>';
	echo '</tr>';
		while($row = mysqli_fetch_array($result)){
	echo '<tr>';
		?>
		<td><input name="checkbox[]" type="checkbox" value="<?php echo $row['id']; ?>" /></td>
		<?php
		echo '<th>' . $row['id'] . '</td>';
		echo '<td>' . $row['date'] . '</td>';
		echo '<td>' . $row['members'] . '</td>';
		echo '<td>' . $row['items'] . '</td>';
        echo '<td>' . $row['paid'] . '</td>';
		echo '<td>' . $row['amount'] . '</td>';
		echo '<td>' . $row['per_head'] . '</td>';
		echo '<td>' . $row['unselected_member'] . '</td>';
		echo '<td>' . $row['unselected_amount'] . '</td>';
 	echo '</tr>';
        }
echo '</table>';
?>        
<input name="delete" type="submit" id="delete" value="Delete">
</form>	

<?php		
	
	if(isset($_POST['delete'])){	
		foreach($_POST['checkbox'] as $key => $val){
			$del = "DELETE FROM lunch_system WHERE id = " . $val;
			$later = mysqli_query($conn,$del);
		} 
	}
		
	if($later){
		header('Location: data.php');
	}						
		$conn->close();		
?>	
</body>
</html>        