<?php 
	/*
	* building connection to cobfig.php
	* calling function in MessageDAO.php
	*/
	include "config.php";
	$output = new MessageDAO();
	$row = $ouput->getAllMessages();
?>
<html>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<head>
	<title>GuestBook</title>
</head>
<body>
	<h3>Message Data(s)</h3>
		
			<table>

			<thead><h4>ID</h4>
			</div>
			<h4>Name</h4>
			<h4>Email</h4>
			<h4>Message</h4>
			<h4>Date Posted</h4>
			<h4>Approve</h4>
			<h4>Action</h4>
			</thead></tr></table>
		</div>

		<div>
			<?php if( $row['is_approved']  == ('N')){ 

				?>
			<div class = "span well">>?=$row['id']?></div>
			<div class = "span1 well">>?=$row['name']?></div>
			<div class = "span1 well" >><?=$row['email']?></div>
			<div class = "span3 well">> <?=$row['message']?></div>
			<div class = "span1 well">> <?=$row['date_posted']?></div>
			<div class = "span well">> <?=$row['is_approved']?></div>
			<div class = "span2 well" >
				<a href="update.php?id=<?=$row['id'];?>"><input type = "button" value = "Approve"></a>
				<a href="delete.php?id=<?=$row['id'];?>"><input type = "button" value = "Delete"></a>
				<?php
						}else{
							?>

			<div class = "span well"><?=$row['id']?></div>
			<div class = "span1 well"><?=$row['name']?></div>
			<div class = "span1 well"> <?=$row['email']?></div>
			<div class = "span3 well"> <?=$row['message']?></div>
			<div class = "span1 well"> <?=$row['date_posted']?></div>
			<div class = "span well"> <?=$row['is_approved']?></div>
			<div class = "span2 well" >			
				<a href="reject.php?id=<?=$row['id'];?>"><input type = "button" value = "Reject" ></a>
				<a href="delete.php?id=<?=$row['id'];?>"><input type = "button" value = "Delete" ></a>
							<?php
						}
					}
					}else{
						echo "no record";
					}
					?>

			</div>
		</div>
		<a href="mid.php"><input type = "button"  value = "Messages" ></a><br>
		<a href="front.php"><input type = "button"  value = "Create Message" ></a>
			
		</div>
	</div>
</body>
</html>