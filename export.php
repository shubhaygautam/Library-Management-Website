<?php
	error_reporting(0);
	$al = mysql_connect("localhost","root","");
	mysql_select_db("student_info",$al);
	$SQL = "SELECT first_name,middle_name,last_name,gender,date_of_birth,contact_no,email,adhaar_no,permanent_address,correspondence_address,roll_no,branch,academic_year,year,section,category,caste,sub_caste,ssc_roll,ssc_marks_obtained,ssc_total_marks,ssc_percentage,hssc_roll,hssc_marks_obtained,hssc_total_marks,hssc_percentage,mh_cet_marks,jee_marks FROM students WHERE branch = '".$_POST['branch']."' ORDER BY roll_no ASC";
    $header = '';
    $result ='';
    $exportData = mysql_query ($SQL) or die ( "Sql error : " . mysql_error( ) );
     
    $fields = mysql_num_fields ( $exportData );
     
    for ( $i = 0; $i < $fields; $i++ )
    {
        $header .= mysql_field_name( $exportData , $i ) . "\t";
    }
     
    while( $row = mysql_fetch_row( $exportData ) )
    {
        $line = '';
        foreach( $row as $value )
        {                                            
            if ( ( !isset( $value ) ) || ( $value == "" ) )
            {
                $value = "\t";
            }
            else
            {
                $value = str_replace( '"' , '""' , $value );
                $value = '"' . $value . '"' . "\t";
            }
            $line .= $value;
        }
        $result .= trim( $line ) . "\n";
    }
    $result = str_replace( "\r" , "" , $result );
     
    if ( $result == "" )
    {
        $result = "\nNo Record(s) Found!\n";                        
    }
     
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=export.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    print "$header\n$result";

?>