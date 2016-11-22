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
 
       $sql_query = "INSERT INTO users(full_name, nick_name,home_add, cell_num,gender)  VALUES('$full_name','$nick_name','$home_add','$cell_num','$gender')";
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
    <label>My Website</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="mypage.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="full_name" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nick_name" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="home_add" placeholder="City" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="cell_num" placeholder="Cell number" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="gender" placeholder="Gender" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>