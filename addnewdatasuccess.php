<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Search Laboratory Website</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<a href="index.html" class="logo"><img src="images/auburn.png" align ="left" style= "width:200px;left: 30px; height:80px;" alt=""></a>
		<ul>
			<li class="selected">
				<a href="index.html">Home</a>
			</li>
			<li>
				<a href="ABOUT.html">About Us</a>
			</li>
			<li>
				<a href="LOGINPAGE.html">Add Data</a>
			</li>
			<li>
				<a href="SEARCHDATA.html">Search Data</a>
			</li>
			<li>
				<a href="VIEWDATA.php">View Data</a>
			</li>
		
		</ul>
	</div>
	
	
	<div id="body">
		<?php
					echo "<p align='left'><b>Welcome Admin,</p>";
					$dbhost = "";
					$dbuser = "";
					$dbpass = "";
					$dbname = "";
					$tables = array('db_main','db_ion', 'db_ebeam', 'db_sputter');
					
					$itemID = $_GET['itemID'];
					$owner = $_GET['owner'];
					$sampleID = $_GET['sampleID'];
					$rundata = $_GET['rundata'];
					$measurement = $_GET['measurement'];

					 
					$con=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
					// Check connection
					if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					else{
						
						if($comments!=''){	
							$result1 = mysqli_query($con,"INSERT into db_main(itemdate, owner, sampleID, rundata, measurement) values ('2016-08-09 00:00:00','ankit','java','rundata12','measurement123')");
							

							echo "<br/><br/><span>Data Inserted successfully...!!</span>";
						}
						else{
							echo "<p>Insertion Failed <br/> Some Fields are blank...!!</b></p>";
						}
					}	

						mysqli_close($con);
				?> 
	
		<div class="content">
		<img src="images/nanoImage.jpg" style= "width:677px; height:218px" alt="">
		<div class="sidebar">
			<h3>contact</h3>
			<ul>
				<li>
					<span class="address">address</span>
					<ul>
						<li>
							Auburn Micro Nano Technology Center
						</li>
					
						<li>
							345 West Magnolia Ave.
						</li>
						<li>
							Auburn, AL 36849
						</li>
					</ul>
				</li>
				<li>
					<span class="phone">telephone</span>
					<ul>
						<li>
							334-844-4444
						</li>
					</ul>
				</li>
				<li>
					<span class="email">email</span>
					<ul>
						<li>
							<a href="http://www.auburn.edu">nano@auburn.edu</a>
						</li>
					</ul>
				</li>
				<li>
					<span class="twitter">twitter</span>
					<ul>
						<li>
							<a href="https://twitter.com/AuburnU">@AuburnU</a>
						</li>
					</ul>
				</li>
				<li>
					<span class="facebook">facebook</span>
					<ul>
						<li>
							<a href="https://www.facebook.com/auburnu/">www.facebook/auburnu</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		
		</div>
	</div>
	<div id="footer">
		<div>
			<p>
				<span>2017 &copy; Auburn Micro Nano Technology Center.</span><a href="#" >Terms of Service</a> | <a href="#" >Privacy Policy</a>
			</p>
			<ul>
				<li id="facebook">
					<a href="https://www.facebook.com/auburnu/">facebook</a>
				</li>
				<li id="twitter">
					<a href="https://twitter.com/AuburnU">twitter</a>
				</li>
				<li id="googleplus">
					<a href="https://plus.google.com/+AuburnUniversity">googleplus</a>
				</li>
				<li id="rss">
					<a href="#" >rss</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>