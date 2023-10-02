<html>
<head><title>MainPage-1</title>
<style>
body{ 
overflow-y: hidden; 
overflow-x: hidden; 
} 
.button:hover { 
background-color:#fdfeff; 
} 
</style>
</head>
<body style="background-color: rgb(224, 224, 234);">
<div style="border-radius:30px;
width:100%;height:30px;background-color: rgb(5, 5, 5);"></div>
<div width="100%">
<br>
<div style="padding:10px;width:40%;height:530px;background-color:rgb(224, 
224, 234);
color:rgb(8, 8, 8);float:left;">
<br><br>
<h4 style="font-size: 80px;font-weight: 900;">
Voting.<br>
Is Our Right.<br>
</h4>
</div>
xxxiii
<div style="width:50%;height:300px;background-color: rgb(224, 224, 
234);float:
left;padding: 10px;">
<form action="<?php echo $_SERVER['PHP_SELF'];?>"
style="width:350px;height:auto;border:2px none rgb(0, 0, 0);borderradius:10px;padding: 10px 20px
20px;background-color:rgb(5, 5, 5);margin: 120px 0px 0px 150px;"
name="name1" method="post"
align="center">
<tt align="center" style="color:rgb(255, 255, 255);fontsize:26px;">LOGIN</tt>
<table style="padding:20px;" cellpadding="5">
<tr>
<td><label><tt class="wt" style="color:rgb(255, 255, 255);">VOTE FOR 
</tt></label></td>
<td style="color:rgb(255, 255, 255);">: 
<select name="opt" size=1 style="color:rgb(0, 0, 0);border-radius:4px;"
single>
<option value="TDP">TDP</option>
<option value="JSP">JSP</option>
<option value="CNG">CNG</option>
<option value="BJP">BJP</option>
<option value="YSRCP">YSRCP</option>
</select>
</td>
</tr>
<tr>
<td><label><tt class="wt" style="color:rgb(255, 255, 255);">username* 
</tt></label></td>
<td style="color:rgb(255, 255, 255);">:<input id="i1" type="text"
placeholder="Enter your username*"
name="tb1" style="color:rgb(3, 3, 3);border-radius:4px;
border:1px solid black"></td>
</tr>
<tr>
<td><label><tt class="wt" style="color:rgb(255, 255, 255);">Password* 
</tt></label></td>
<td style="color:rgb(255, 255, 255);">:<input id="i2" type="text"
placeholder="Enter your password"
name="tb2" style="color:rgb(0, 0, 0);border-radius:4px;
border:1px solid black"></td>
</tr>
</table>
<div align="center">
<br>
<input type="submit" value="Submit" class="button" name="b1"
xxxiv
style="padding:10px;width:80px;color:rgb(255, 255, 255);
background:rgb(1, 1, 1);border-radius:10px;border: 1px solid rgb(123, 121, 
198);">
</div>
</form>
</div>
<div style="border-radius:30px;
width:100%;height:30px;background-color: rgb(10, 10, 10);float: 
left;"></div>
</div>
<br>
<?php
$con=mysqli_connect("localhost","root",""); 
session_start(); 
if (!$con) 
{ 
die('Could not connect: ' . mysqli_error()); 
} 
mysqli_select_db($con,"softproject"); 
$result = mysqli_query($con,"SELECT * FROM voter"); 
if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
$a1=($_POST["tb1"]); 
$a2=($_POST["tb2"]); 
$a3=($_POST["opt"]); 
$result1 = mysqli_query($con,"UPDATE `voter` SET `voted` = '$a3' WHERE
`voter`.`username` = '$a1';"); 
} 
?>
</body>
</html>
