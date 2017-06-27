<!DOCTYPE html>
<?php
	include 'db.php';
?>
<html>
<head>
	<title>
		Chat system
	</title>
	<link rel="stylesheet" href="style.css" media="all">
	<script>
		function ajax(){
			
			var req = new XMLHttpRequest();
			
			req.onreadystatechange function(){
				if(req.readyState == 4 && req.status == 200){
						
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			
			req.open('GET','chat.php',true);
			req.send();
		}
		
		setInterval(function(){
			ajax()
		},1000 );
	</script>
</head>
<body onload="ajax();">
	<div id="container">
			<div id="chat_box">
				<div id="chat"></div>
			</div>
			<form method="post" action="index.php">
				<input type="text" name="name" placeholder="enter name" />
				<textarea name="message" placeholder="enter message"></textarea>
				<input type="submit" name="submit" value="Send it"/>
			</form>
			<?php
			if(isset($_POST['submit'])){
				
				$name=$_POST['name'];
				$message=$_POST['message'];
				$query = "INSERT INTO chat(name,msg) values('$name','$message')";
				
				$result = $conn->($query);
				
				if($run){
					echo "<embed loop='false' src='chat.way'  hidden='true' autoplay='true' />";
				}
				
			}
			?>
	</div>
</body>
</html>