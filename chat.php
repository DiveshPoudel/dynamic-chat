<?php
	include 'db.php';
	
	$query = "SELECT * FROM chat ORDER BY id DESC";
	$result = $conn->query($query);
				
	while($row = $result->fetch_array()) :
?>
	
	<div id="chat_data">
		<span style="color:black"><?php echo $row['name']; ?></span>
		<span style="color:gray"><?php echo $row['message']; ?></span>
		<span style="float:right"><?php echo formatDate($row['date']); ?></span>
	</div>
<?php endwhile; ?>