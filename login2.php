<?php

$sel=$_POST['status1'];
$user=$_POST['EMAIL'];
$pass=$_POST['PASSWORD'];

$string=strval($sel);
$ustr=strval($user);
$pstr=strval($pass);


if(strcmp($string,"professor")==0){
	$file1=fopen("professor_credentials.txt","r");
	while(!feof($file1)){
		$line1=fgets($file1);
		$pos1=strpos($line1,"|");
        $ext1=substr($line1,0,$pos1);
        $euser=strval($ext1);
        $rem_str=substr($line1,$pos1+1);
        $pos1=strpos($rem_str,"#");
        $ext7=substr($rem_str,0,$pos1);
        $epass=strval($ext7);
        if((strcmp($ustr,$euser)==0)&&(strcmp($pstr,$epass)==0)){
        	header("Location:http://localhost/Project/mainpageprof.php");
        }
	}
}

if(strcmp($string,"student")==0){
	$file1=fopen("student_credentials.txt","r");
	while(!feof($file1)){
		$line1=fgets($file1);
		$pos1=strpos($line1,"|");
        $ext1=substr($line1,0,$pos1);
        $euser=strval($ext1);
        $rem_str=substr($line1,$pos1+1);
        $pos1=strpos($rem_str,"#");
        $ext7=substr($rem_str,0,$pos1);
        $epass=strval($ext7);
        if((strcmp($ustr,$euser)==0)&&(strcmp($pstr,$epass)==0)){
        	header("Location:http://localhost/Project/mainpagestu.php");
        }
	}
}
if(strcmp($string,"admin")==0){
	$file1=fopen("admin_credentials.txt","r");
	while(!feof($file1)){
		$line1=fgets($file1);
		$pos1=strpos($line1,"|");
        $ext1=substr($line1,0,$pos1);
        $euser=strval($ext1);
        $rem_str=substr($line1,$pos1+1);
        $pos1=strpos($rem_str,"#");
        $ext7=substr($rem_str,0,$pos1);
        $epass=strval($ext7);
        if((strcmp($ustr,$euser)==0)&&(strcmp($pstr,$epass)==0)){
        	header("Location:http://localhost/Project/modify.html");
        }
	}
}

?>


