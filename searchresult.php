<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Search Laboratory Website</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href="HCIcss/bootstrap.min.css" rel="stylesheet">
	
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

	            <div class = "container">
                <table class="table">
                            
				<?php

					$dbhost = "";
					$dbuser = "";
					$dbpass = "";
					$dbname = "";
					$tables = array('db_main','db_ion', 'db_ebeam', 'db_sputter');
					
					
					$dropdowninput = $_GET['dropdowninput'];
					$searchtext = $_GET['searchtext'];
					if (!mysql_connect($dbhost, $dbuser, $dbpass))
        					die("Can't connect to database");

					if (!mysql_select_db($dbname))
        					die("Can't select database");
					
					
					
					
					if ($dropdowninput == 'itemID'){
						$result = mysql_query("SELECT * FROM $tables[0] where itemID = '$searchtext'");
						
					}
					
					else if ($dropdowninput == 'owner'){
						$result = mysql_query("SELECT * FROM $tables[0] where owner = '$searchtext'");
						
					}
					
					else if ($dropdowninput == 'sampleID'){
						$result = mysql_query("SELECT * FROM $tables[0] where sampleID = '$searchtext'");
						
					}
					
					else{
						$result = mysql_query("SELECT * FROM $tables[0] where rundata = '$searchtext'");
						
					}
					
					
 
				echo "<thead>";
				echo "<tr>";
				$heads = mysql_num_fields($result);
				for($i=0; $i<$heads; $i++)
					{
        					$field = mysql_fetch_field($result);
        					echo "<th>{$field->name}</th>";
					}

				echo "</tr>";
				echo "</thead>";
				while ($row = mysql_fetch_row($result))
					{
        					echo "<tr>";
        					foreach($row as $cell)
                				echo "<td>$cell</td>";
        					echo "</tr>";
					}
				mysql_free_result($result);
		    ?>
                               
                    </table>
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
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    <script src="bootstrap.js"></script>
	
</body>
</html>