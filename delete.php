<?php
  $id=$_POST['idsrc'];
  $i=strval($id);
$file1=fopen("insert_achievement.txt","r");
while(!feof($file1)){
    $line1=fgets($file1);
    $ii=strval($id);
    if(preg_match("/". preg_quote($i,NULL) . "/",$line1)){
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
  $c=preg_replace("/".preg_quote($i)."/","*",$b);
  file_put_contents("insert_achievement.txt",$c);

  header("Location:http://localhost/Project/modal-delete-stu.php");
?>