<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="30">
	<link rel="stylesheet" type="text/css" href="home1.css">
	<link rel="stylesheet" type="text/css" href="bootstraps/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/popper.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
	<style type="text/css">
		mark
		{
			background-color:orange;
			padding:10px 0px 0px 0px;
			border:1px solid green;
			border-radius:12px;

		}
		dt
		{
			margin-bottom:15px;

		}
		dd
		{
			margin-top:10px;

		}
		#nam
		{
			font-weight:bolder;
			color:#7781ff;

			padding:0px 10px;

			font-weight:bolder;
			
			padding:0px 0px;
			
			text-decoration: none;
			color:black;
			background-color: orange;
			padding: 10px;
			border-radius: 5px;
			display: inline-block;
			border: none;
			transition: all 0.4s ease 0s;
			-webkit-box-shadow: 6px 5px 5px 0px rgba(215,215,224,1);
			-moz-box-shadow: 6px 5px 5px 0px rgba(215,215,224,1);
			box-shadow: 6px 5px 5px 0px rgba(215,215,224,1);
		}
		#msg
		{
			background-color:grey;
			padding-left: 20px;
			padding-right: 20px;
			font-weight: bolder;

			color:#1a1a1a !important;
			text-decoration: none;
			background: #eff0ff;
			padding: 10px;
			border-radius: 5px;
			display: inline-block;
			border: none;
			transition: all 0.4s ease 0s;


			-webkit-box-shadow: 6px 5px 5px 0px rgba(215,215,224,1);
			-moz-box-shadow: 6px 5px 5px 0px rgba(215,215,224,1);
			box-shadow: 6px 5px 5px 0px rgba(215,215,224,1);

		}
		#date{
			background-color:lightgrey;
			font-size:12px;
			position:relative;
			margin-bottom:10px;

			color: #1a1a1a !important;
			text-decoration: none;
			background:lightgrey;
			padding: 10px;
			border-radius: 5px;
			display: inline-block;
			border: none;

		}
		#snam
		{
			font-weight:bolder;
			color:black;
			background-color: pink;
			padding:0px 0px;
			margin-left:70%;
			
			color: #fff !important;
			text-decoration: none;
			background: #7781ff;
			padding: 10px;
			border-radius: 5px;
			display: inline-block;
			border: none;
			transition: all 0.4s ease 0s;
			-webkit-box-shadow: 6px 5px 5px 0px rgba(215,215,224,1);
			-moz-box-shadow: 6px 5px 5px 0px rgba(215,215,224,1);
			box-shadow: 6px 5px 5px 0px rgba(215,215,224,1);


		}
		#smsg
		{
			background-color:skyblue;
			padding-left: 20px;
			color: white;
			padding-right: 20px;
			font-weight: bolder;
			padding-left: 30px;
			margin-left:50%;
			border-top-right-radius: 0px;
			position:static;

			color: #1a1a1a !important;
			text-decoration: none;
			background: #eff0ff;
			padding: 10px;
			border-radius: 5px;
			display: inline-block;
			border: none;
			transition: all 0.4s ease 0s;


			-webkit-box-shadow: 6px 5px 5px 0px rgba(215,215,224,1);
			-moz-box-shadow: 6px 5px 5px 0px rgba(215,215,224,1);
			box-shadow: 6px 5px 5px 0px rgba(215,215,224,1);


		}
		#sdate{
			background-color:lightgrey;
			font-size:12px;
			padding-left: 30px;
			margin-left:50%;
			background-color:skyblue;
			padding-left: 20px;

			color: #1a1a1a !important;
			text-decoration: none;
			background:lightgrey;
			padding: 10px;
			border-radius: 5px;
			display: inline-block;
			border: none;


			-webkit-box-shadow: 0px 0px 0px 0px rgba(215,215,224,1);
			-moz-box-shadow: 0px 0px 0px 0px rgba(215,215,224,1);
			box-shadow: 0px 0px 0px 0px  rgba(215,215,224,1);

		}
	</style>
	<!--<div id="main" style="margin-top:15px;background-color:#f4f5ff;padding-bottom:10px;" class="container">
		<div>
			<h1 style="background-color:#6495ed;color:black;margin-top:15px;padding-top:20px;">
				<?php 
					if(isset($_SESSION['name'])){
						echo $_SESSION['name'];
					}
					else{
							echo "Please Sign Up";
					}
				?>
			</h1>
		</div>
		<div  class="output">
			<?php
			include 'dbh.php';

			$sql="SELECT *FROM posts";
			$result=$conn->query($sql);
			if($result->num_rows>0){
				echo "<h1 style='margin-left:50%;'><a href='#last'>&#9888;</a></h1>";
				while($row = $result->fetch_assoc())
				{
					
					if($_SESSION['name']==$row['name'])
					{
						if ($row['name']==''){
							echo "<dt><mark id='nam' style='background-color:black;color:white;float:right;'>Stranger</mark></dt>";
							echo "<dd><mark id='smsg'style='float:right;'>".$row["msg"]."</mark></dd>";
							echo "<dd><mark id='sdate'>".$row["date"]."</mark></dd>";
						}
						else{
							echo "<dt><mark id='snam'>".$row['name']."</mark></dt>";
							echo "<dd><mark id='smsg'>".$row["msg"]."</mark></dd>";
							echo "<dd><mark id='sdate'>".$row["date"]."</mark></dd>";
							}
					}
					
					else{
						if ($row['name']=='') {
							echo "<dt><mark id='nam' style='background-color:black;color:white'>Stranger</mark></dt>";
							echo "<dd><mark id='msg' >".$row["msg"]."</mark></dd>";
							echo "<dd><mark id='date'>".$row["date"]."</mark></dd>";
						}
						else{
							echo "<dt><mark id='nam'>".$row['name']."</mark></dt>";
							echo "<dd><mark id='msg'>".$row["msg"]."</mark></dd>";
							echo "<dd><mark id='date'>".$row["date"]."</mark></dd>";
						}
					}
				};
			}else{
				echo "Say Hi!!";
			}
			
			$conn->close();

			echo "<div id='last'></div>";
			?>
		</div>
		<div class="bottom">
			<div id="textarea" style="margin:0px 0px 50px 0px;height:30px;position:relative;">
				<form method="post" action="send.php#last">
				<textarea name="msg" cols="40" rows="1" placeholder="Enter message" class="form-control" required="please enter meesage"></textarea>
				<button type="submit" id="sending"><img src="send.png" alt="send" width="30px" height="30px"></button>
				</form>
			</div>
			<div>
				<form action="logout.php">
					<br>
					<br>
					<button style="width:100%;height:50px;background-color:#6495ed;color:white;" type=" submit" value="Logout" class="btn">Logout</button>
				</form>
			</div>
		</div>
	</div>-->
<hr>
<div class="container">
	<div class="row">
		<div class="col-md-9 well">
			<div id="main" style="margin-top:15px;background-color:#f4f5ff;padding-bottom:200px;" class="container">
				<div>
					<h1 style="background-color:#6495ed;color:black;margin-top:15px;padding-top:20px;">
						<?php 
							if(isset($_SESSION['name'])){
								echo $_SESSION['name']."<a href='#last' style='float:right;'><img src='notification.jpg' width='50px' height='50px'></a>";
							}
							else{
									echo "Please Sign Up";
							}
						?>
					</h1>
				</div>
				<div  class="output">
					<?php
					include 'dbh.php';

					$sql="SELECT *FROM posts";
					$result=$conn->query($sql);
					if($result->num_rows>0){
						echo "<h1 style='margin-left:50%;'><a href='#last'><img src='notification.jpg' width='50px' height='50px'></a></h1>";
						while($row = $result->fetch_assoc())
						{
							
							if($_SESSION['name']==$row['name'])
							{
								if ($row['name']==''){
									echo "<dt><mark id='nam' style='background-color:black;color:white;float:right;'>Stranger</mark></dt>";
									echo "<dd><mark id='smsg'style='float:right;'>".$row["msg"]."</mark></dd>";
									echo "<dd><mark id='sdate'>".$row["date"]."</mark></dd>";
								}
								else{
									echo "<dt><mark id='snam'>".$row['name']."</mark></dt>";
									echo "<dd><mark id='smsg'>".$row["msg"]."</mark></dd>";
									echo "<dd><mark id='sdate'>".$row["date"]."</mark></dd>";
									}
							}
							
							else{
								if ($row['name']=='') {
									echo "<dt><mark id='nam' style='background-color:black;color:white'>Stranger</mark></dt>";
									echo "<dd><mark id='msg' >".$row["msg"]."</mark></dd>";
									echo "<dd><mark id='date'>".$row["date"]."</mark></dd>";
								}
								else{
									echo "<dt><mark id='nam'>".$row['name']."</mark></dt>";
									echo "<dd><mark id='msg'>".$row["msg"]."</mark></dd>";
									echo "<dd><mark id='date'>".$row["date"]."</mark></dd>";
								}
							}
						};
					}else{
						echo "Say Hi!!";
					}
					
					$conn->close();

					echo "<div id='last'></div>";
					?>
				</div>
			<div class="bottom">
				<div id="textarea" style="margin:0px 0px 50px 0px;height:30px;position:relative;">
					<form method="post" action="send.php#last">
					<textarea name="msg" cols="40" rows="1" placeholder="Enter message" class="form-control" required="please enter meesage"></textarea>
					<button type="submit" id="sending"><img src="send.png" alt="send" width="30px" height="30px"></button>
					</form>
				</div>
				<div>
					<form action="logout.php">
						<br>
						<br>
						<button style="width:100%;height:50px;background-color:#6495ed;color:white;" type=" submit" value="Logout" class="btn">Logout</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3 well">
	<h5><kbd>Joined members</kbd></h5>
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "p26h8";
		$dbname = "mydatabase";
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
			if ($conn->connect_error) {
			    die("Connection failed:".$conn->connect_error);
			}

			$sql = "SELECT  username FROM signup";
			$result = $conn->query($sql);
			echo "<ol>";
			if ($result->num_rows>0) 
			{
			    // output data of each row
			    while($row = $result->fetch_assoc()) {

			    	echo "<li><b style='color:white;text-align:center;'>".$row["username"]."</b></li>";
			    	
			        
			    }
			$conn->close();
			}
			echo "</ol>";
			
		?>
		</div>
	</div>
</div>
</body>
</html>
