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
				<a href="VIEWDATA.html">View Data</a>
			</li>
		
		</ul>
	</div>
	<div id="body">
		<div class="content">
			<img src="images/nanoImage.jpg" style= "width:677px; height:218px" alt="">
			<h2>Add New Experiment Data</h2>
			<h3>You may input one or more sub-fields</h3>
			<form  method= "get">
			
				<h3><b>Ion Data</b></h3>
				<label for="ionmin"> <span>Min</span>
					<input type="text" name="ionmin" id="ionmin">
				</label>
				<label for="ionflowrate"> <span>Flow Rate</span>
					<input type="text" name="ionflowrate" id="ionflowrate">
				</label>
				<label for="iontotalflow"> <span>Total Flow</span>
					<input type="text" name="iontotalflow" id="iontotalflow">
				</label>
				<label for="ionfilamentcurrent"> <span>Filament Current</span>
					<input type="text" name="ionfilamentcurrent" id="ionfilamentcurrent">
				</label>
				<label for="iondischargecurrent"> <span>Discharge Current</span>
					<input type="text" name="iondischargecurrent" id="iondischargecurrent">
				</label>
				<label for="iondischargevoltage"> <span>Discharge Voltage</span>
					<input type="text" name="iondischargevoltage" id="iondischargevoltage">
				</label>
				<label for="ionbeamcurrent"> <span>Beam Current</span>
					<input type="text" name="ionbeamcurrent" id="ionbeamcurrent">
				</label>
				<label for="ionbeamvoltage"> <span>Beam Voltage</span>
					<input type="text" name="ionbeamvoltage" id="ionbeamvoltage">
				</label>
				<label for="ionemissioncurrent_lower"> <span>Emission Current Lower</span>
					<input type="text" name="ionemissioncurrent_lower" id="ionemissioncurrent_lower">
				</label>
				<label for="ionemissioncurrent_upper"> <span>Emission Current Upper</span>
					<input type="text" name="ionemissioncurrent_upper" id="ionemissioncurrent_upper">
				</label>
			
				
				<br><br>
				<input type="button" onClick="location.href='ADDION.php'" value="Add more Ion Data" >
				<input type="button" onClick="location.href='ADDEBEAM.php'" value="Add Ebeam Data" id="button">

				
				
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