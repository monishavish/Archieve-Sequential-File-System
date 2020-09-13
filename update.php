<?php
  $id=$_POST['id'];
  $name=$_POST['name'];
  $deptno=$_POST['deptno'];
  $part=$_POST['part'];
  $achcat=$_POST['achcat'];
  $ach=$_POST['ach'];

  $iii=$_POST['idscr'];
  $string=strval($id)."|".strval($name)."|".strval($deptno)."|".strval($part)."|".strval($achcat)."|".strval($ach)."#";
  $ii=strval($id);
  $file1=fopen("insert_achievement.txt","r");
  while(!feof($file1)){
    $line1=fgets($file1);
    
    if(preg_match("/". preg_quote($ii,NULL) . "/",$line1)){
            $pos1=strpos($line1,"|");
            $ext1=substr($line1,0,$pos1);

            $rem_str=substr($line1,$pos1+1);
            $pos1=strpos($rem_str,"|");
            $ext2=substr($rem_str,0,$pos1);

            $rem_str=substr($rem_str,$pos1+1);
            $pos1=strpos($rem_str,"|");
            $ext3=substr($rem_str,0,$pos1);

            $rem_str=substr($rem_str,$pos1+1);
            $pos1=strpos($rem_str,"|");
            $ext4=substr($rem_str,0,$pos1);

            $rem_str=substr($rem_str,$pos1+1);
            $pos1=strpos($rem_str,"|");
            $ext5=substr($rem_str,0,$pos1);

            $rem_str=substr($rem_str,$pos1+1);
            $pos1=strpos($rem_str,"#");
            $ext7=substr($rem_str,0,$pos1);
            $i=strval($ext1)."|".strval($ext2)."|".strval($ext3)."|".strval($ext4)."|".strval($ext5)."|".strval($ext7)."#";
          }
        }
      fclose($file1);

  $b=file_get_contents("insert_achievement.txt");
  $c=preg_replace("/".preg_quote($i)."/",$string,$b);
  file_put_contents("insert_achievement.txt",$c);

  header("Location:http://localhost/Project/modify.html");
?>
  