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
				<a href="ADDDATA.html">Add Data</a>
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
		<div class="content">
			<img src="images/nanoImage.jpg" style= "width:677px; height:218px" alt="">
			<h2>Add New Experiment Data</h2>
			<h3>You may input one or more sub-fields</h3>
			<form  method= "get">
				<h3><b>Sputter Data</b></h3>
				
				<label for="sputtermaterial"> <span>Material</span>
					<input type="text" name="sputtermaterial" id="sputtermaterial">
				</label>
				
				<label for="sputterpremin"> <span>Pre Min</span>
					<input type="text" name="sputterpremin" id="sputterpremin">
				</label>
				
				<label for="sputtermin"> <span>Min</span>
					<input type="text" name="sputtermin" id="sputtermin">
				</label>
				
				
			<label for="sputterthickness"> <span>Thickness</span>
					<input type="text" name="sputterthickness" id="sputterthickness">
				</label>
				
				<label for="ig2pressure"> <span>Ig2 Pressure</span>
					<input type="text" name="ig2pressure" id="ig2pressure">
				</label>
				
				<label for="sputterairflow"> <span>Airflow</span>
					<input type="text" name="sputterairflow" id="sputterairflow">
				</label>
				
				<label for="sputterpressure_mtorr"> <span>Sputter Pressure Mtorr</span>
					<input type="text" name="sputterpressure_mtorr" id="sputterpressure_mtorr">
				</label>
				
				<label for="sputterpower"> <span>Sputter Power</span>
					<input type="text" name="sputterpower" id="sputterpower">
				</label>
				
				<label for="sputtervoltage"> <span>Voltage</span>
					<input type="text" name="sputtervoltage" id="sputtervoltage">
				</label>
				
				<label for="sputtercurrent"> <span>Current</span>
					<input type="text" name="sputtercurrent" id="sputtercurrent">
				</label>
			
				<br><br>
				<input type="button" onClick="location.href='ADDSPUTTER.php'" value="Add more Sputter Data" >
				<input type="button" onClick="location.href='index.html'" value="Submit" >
				
			</form>
		</div>
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