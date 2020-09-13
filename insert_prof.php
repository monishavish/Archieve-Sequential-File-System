<?php
$id=$_POST['id'];
$name=$_POST['name'];
$deptno=$_POST['deptno'];
$achcat=$_POST['achcat'];
$ach=$_POST['ach'];


if(file_exists("insert_achievement_prof.txt")){
$file1=fopen("insert_achievement_prof.txt","a+");
$file2=fopen("department.txt","r");
while(!feof($file2)){
    $line1=fgets($file2);
    $ii=strval($deptno);
    if(preg_match("/". preg_quote($ii,NULL) . "/",$line1)){
            $pos1=strpos($line1,"|");
            $rem_str=substr($line1,$pos1+1);
            $pos1=strpos($rem_str,"#");
            $ext1=substr($rem_str,0,$pos1);
          }

      }
          fwrite($file1,$id);
          fwrite($file1,"|");
          fwrite($file1,$name);
          fwrite($file1,"|");
          fwrite($file1,$ext1);
          fwrite($file1,"|");
          fwrite($file1,$achcat);
          fwrite($file1,"|");
          fwrite($file1,$ach);
          fwrite($file1,"#\n");
fclose($file1);
fclose($file2);
}
else{
$file1=fopen("insert_achievement_prof.txt","w");
$file2=fopen("department.txt","r");
while(!feof($file2)){

    $line1=fgets($file2);
    $ii=strval($deptno);
    if(preg_match("/". preg_quote($ii,NULL) . "/",$line1)){
            $pos1=strpos($line1,"|");
            $rem_str=substr($line1,$pos1+1);
            $pos1=strpos($rem_str,"#");
            $ext1=substr($rem_str,0,$pos1);
          }
      }
          fwrite($file1,$id);
          fwrite($file1,"|");
          fwrite($file1,$name);
          fwrite($file1,"|");
          fwrite($file1,$ext1);
          fwrite($file1,"|");
          fwrite($file1,$achcat);
          fwrite($file1,"|");
          fwrite($file1,$ach);
          fwrite($file1,"#\n");
fclose($file1);
fclose($file2);
}
header("Location:http://localhost/Project/modal-insert-prof.php");
?>

