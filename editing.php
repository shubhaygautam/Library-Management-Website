<?php
require("../config.php");
if(!empty($_POST))
{
	if($_POST['roll'] == NULL)
	{
		$roll = 0;
	}
	else
	{
		$roll = $_POST['roll'];
	}
	
	$sql = mysqli_query($al, "UPDATE students SET first_name = '".ucwords($_POST['fn'])."', middle_name = '".ucwords($_POST['mn'])."', last_name = '".ucwords($_POST['ln'])."', gender = '".$_POST['gender']."', date_of_birth = '".$_POST['dob']."', contact_no = '".$_POST['mob']."', parents_contact_no = '".$_POST['pmob']."', email = '".strtolower($_POST['email'])."', adhaar_no = '".$_POST['adhaar']."', permanent_address = '".ucwords($_POST['addP'])."', correspondence_address = '".ucwords($_POST['addC'])."', roll_no = '".$roll."', branch = '".$_POST['branch']."', academic_year = '".$_POST['ac_year']."', year = '".$_POST['year']."', section = '".$_POST['section']."', category = '".$_POST['cat']."', caste = '".ucwords($_POST['caste'])."', sub_caste = '".ucwords($_POST['scaste'])."', ssc_roll = '".ucwords($_POST['ssc_roll'])."', ssc_marks_obtained = '".$_POST['ssc_mo']."', ssc_total_marks = '".$_POST['ssc_to']."', ssc_percentage = '".$_POST['ssc_per']."', hssc_roll = '".ucwords($_POST['hssc_roll'])."', hssc_marks_obtained = '".$_POST['hssc_mo']."', hssc_total_marks = '".$_POST['hssc_to']."', hssc_percentage = '".$_POST['hssc_per']."', mh_cet_marks = '".$_POST['cet_mo']."', jee_marks = '".$_POST['jee_mo']."' WHERE id = '".$_POST['id']."'");
	
	if(!$sql)
	{ 
		header("location:home.php?ashish=".sha1('error')); 
	} 
	else 
	{  
		header("location:home.php?ashish=".sha1('success'));
	}
}

if($_GET['ashish'] == sha1('error'))
{
	$flag = 0;
}

?>
