<?php
require("../config.php");
if(isset($_SESSION['lid']))
{
	header("location:home.php?ashish".sha1('ashishlabde'));
}
$flag = 1;
if(!empty($_POST))
{
	$sql = mysqli_query($al, "SELECT * FROM admin WHERE loginid = '".mysqli_real_escape_string($al, $_POST['lid'])."' AND password = '".mysqli_real_escape_string($al, sha1($_POST['password']))."'");
	if(mysqli_num_rows($sql) == 1)
	{
		$_SESSION['lid'] = $_POST['lid'];
		header("location:home.php?ashish=".sha1('ashishlabde'));
	}
	else
	{
		$flag = 0;
	}
}
?>
<!doctype html>
<!-- Designed & Developed by Tech Vegan https://bit.ly/2MFT35Q 
		NOT FOR SELLING PURPOSE

        CAN USE FOR COLLEGE/SCHOOL PROJECT SUBMISSION
       
        For More Subscribe YouTube Channel "Tech Vegan" https://bit.ly/2MFT35Q
        
        DESIGNED WITH LOVE FOR ALL
-->
<!-- Designed & Developed by Tech Vegan https://bit.ly/2MFT35Q 
		NOT FOR SELLING PURPOSE

        CAN USE FOR COLLEGE/SCHOOL PROJECT SUBMISSION
       
        For More Subscribe YouTube Channel "Tech Vegan" https://bit.ly/2MFT35Q
        
        DESIGNED WITH LOVE FOR ALL
-->
<html>
<head>
<meta charset="utf-8">
<title>First Year Information Portal</title>
<link href="../ashishlabde.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header" align="center">
<span class="heading">TECH VEGAN (COLLEGE NAME)</span>
</div>
<br>
<br>

<div align="center">

<br>
<br>
<br>
<br>
<br>

<div id="content">
<br>

<span class="subHead">FIRST YEAR STUDENT INFORMATION REGISTRATION PANEL</span>
<br>
<br>
<hr />
<span class="Text">Admin Login</span>
<hr />
<br>

<form method="post" action="">
<?php if($flag == 0)
{
	?>
	<span class="flashFalse">Incorrect Login Information</span>
<?php } ?>
<br>
<br>
<input type="text" placeholder="Login ID" required size="40" name="lid" title="Enter Login ID" value="<?php echo $_SESSION['lid'];?>"  />
<br>
<br>
<input type="password" placeholder="Password" required size="40" name="password" title="Enter Password" value="<?php echo $_SESSION['password'];?>" />
<br>
<br>
<input type="submit" value="Login"  /> 
</span>

</form>
<br>
<br>

</div>
<br>
<br>
<br>
<br>
<br>
<?php require("footer.php");?>
</body>
<!-- Designed & Developed by Tech Vegan https://bit.ly/2MFT35Q 
		NOT FOR SELLING PURPOSE

        CAN USE FOR COLLEGE/SCHOOL PROJECT SUBMISSION
       
        For More Subscribe YouTube Channel "Tech Vegan" https://bit.ly/2MFT35Q
        
        DESIGNED WITH LOVE FOR ALL
--> </html>

