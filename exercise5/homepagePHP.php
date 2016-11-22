<html>
<head>
<title>First Activity</title>
<style>
body {
	background-color:#7C6958;
}
h1 {
	background-color:rgba(0,0,0,0.7);
	font-family:courier;
	font-size:260%;
	text-align:center;
	color:#7C6958;
}
table, th {
	border-collapse: collapse;
	border: 1px solid;
	padding: 5px;

}
th.serif {
	font-family: georgia, serif;
}
th.monospace {
	font-family: courier, monospace;
}
#points {
	text-align:center;
	border: 3px solid maroon;
}
.error {
	color:red;
}
#ho {
	font-weight: bold;
}
audio{
display: none;
}
</style>
<script>
function myFunction() {
    document.getElementById("yobab").innerHTML = "MY HOBBIES";
	document.getElementById("yobabs").innerHTML = "MY INTERESTS";
    document.getElementById("image1").src="Game.png";
	document.getElementById("image2").src="Music.png";
	document.getElementById("image3").src="TV.png";
	document.getElementById("image4").src="db.png";
	document.getElementById("image5").src="scc.png";
	document.getElementById("image6").src="bal.png";
	
}

function myFunction2() {
   document.getElementById("image1").src="SS.png";
   document.getElementById("image2").src="BS.png";
   document.getElementById("image3").src="P.png";
   document.getElementById("image4").src="Pizza.png";
   document.getElementById("image5").src="Fries.png";
   document.getElementById("image6").src="FC.png";
   document.getElementById("yobab").innerHTML = "MY FAVORITE MOVIES";
   document.getElementById("yobabs").innerHTML = "MY FAVORITE FOODS";
}

</script>
</head>
<body>

<h1>MY FIRST ACTIVITY</h1>


<div id='points'>
<table align="center" width="50%">
     <tr>
	<th class="serif">NAME:</th>
	<th class="monospace">Gene Carlo Alanza Bongat</th>
     </tr>
     <tr>
	<th class="serif">NICKNAME:</th>
	<th class="monospace">CARL</th>
     </tr>
     <tr>
	<th class="serif">AGE:</th>
	<th class="monospace">eighteen(18)</th>
     </tr>
     <tr>
	<th class="serif">BIRTHDATE:</th>
	<th class="monospace">August 16 1998</th>
     </tr>
	
<table align="center" width="50%">
     <tr>
	 <th><button type="button" onclick="myFunction()">Back</button></th>
	<th id="yobab" class="monospace">MY HOBBIES</th>
	<th><button type="button" onclick="myFunction2()">Next</button></th>
     </tr>
     <tr>
	<th><img id="image1" src="Game.png" width="200" height="150"></th>
	<th><img id="image2" src="Music.png" width="200" height="150"></th>
	<th><img id="image3" src="TV.png" width="200" height="150"></th>
     </tr>
	<th id="yobabs" colspan="3" class="monospace">MY INTERESTS</th>
     <tr>
	<th><img id="image4" src="db.png" width="200" height="150"></th>
	<th><img id="image5" src="scc.png" width="200" height="150"></th>
	<th><img id="image6"src="bal.png" width="200" height="150"></th>
     </tr>

	 <table align="center" width="50%">
	 <tr>
	<th><button type="button" onclick="document.getElementById('me').innerHTML = 'I sleep.'">Click Me!</button></th>
	<th id="me">What I do when I'm alone?</th>
	 </tr>
	 <tr>
	<th><button type="button" onclick="document.getElementById('me1').innerHTML = 'I dance.'">Click me!</button></th>
	<th id="me1">What is my talent?</th>
	 </tr>
	 <tr>
	<th><button type="button" onclick="document.getElementById('me2').innerHTML = 'So I can pass -,-'">Click me!</button></th>
	<th id="me2">Why I need to do this?</th>
	 </tr>
	 <tr>
	<th><button type="button" onclick="document.getElementById('me3').innerHTML = 'I want to graduate.'">Click me!</button></th>
	<th id="me3">What I want in my life?</th>
	 </tr>
	 <tr>
	<th><button type="button" onclick="document.getElementById('me4').innerHTML = 'I play online games.'">Click me!</button></th>
	<th id="me4">What I do when I'm bored?</th>
	 </tr>
</table>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $full_name = $_POST['full_name'];
 $nick_name = $_POST['nick_name'];
 $home_add = $_POST['home_add'];
 $cell_num = $_POST['cell_num'];
 $gender = $_POST['gender'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(full_name, nick_name,home_add, cell_num,gender) VALUES('$full_name','$nick_name','$home_add','$cell_num','$gender')";
 mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Sign up here and Join me!</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
   
    </tr>
    <tr>
    <td><input type="text" name="full_name" placeholder="Full Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nick_name" placeholder="Nick Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="home_add" placeholder="home add " required /></td>
    </tr>
	 <tr>
    <td><input type="text" name="cell_num" placeholder="cell number " required /></td>
    </tr>
	 <tr>
    <td><input type="text" name="gender" placeholder="Gender " required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save">SAVE<a/></button></td>
	<td align="center"><a href="index.php"> Edit data here -> </a></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
<audio controls autoplay>
<source src="Can't help falling in love.mp3" type="audio/mpeg">
</audio>
</div>
</body>
</html>