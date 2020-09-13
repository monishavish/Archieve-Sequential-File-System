<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delete</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  .container{
    position: absolute;
    top:30%;
    left:12%;
  }
  .disp{
    position: absolute;
    top:5%;
    left:30%;
  }
  .inp{
    position: absolute;
    left:29%;
  }
  button{
      background: transparent;
      border-style: solid;
      border-color:white;
      border-radius: 10px;
      color: black;
      padding: 6px 26px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
  }
</style>
<body>
<div class="disp">
  <h4>Enter the student identification number or type "all" to display all details:</h3>
    <form action="delete.php" method="post">
  <input type="text" class="inp" placeholder="Enter ID" name="idsrc" size=30 required/>
  <input type="submit" value="Delete" style="position: absolute;top:240%;left:40%;"/>
  <a  href="modify.html"><button type="button" class="but"style="position: absolute;top:340%;left:34%;"><b>Back to Home</b></button></a>
</form>
</div>
<div class="container">
  <h2>Student  achievement details after deletion</h2>
              
  <table class="table">
    <thead>
      <tr>
        <th>Student ID</th>
        <th>Student name</th>
        <th>Department name</th>
        <th>Participation level</th>
        <th>Achievement category</th>
        <th>Achievement</th>
      </tr>
    </thead>
  <?php
  ini_set('error_reporting',E_ALL & ~E_NOTICE );
  $file1=fopen("insert_achievement.txt","r");

  while(!feof($file1)){
          $line1=fgets($file1);
            if(feof($file1)){
              break;
            }
          $ii="*";
          if(preg_match("/". preg_quote($ii,NULL) . "/",$line1)){
            continue;
          }
          else{  
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
          $pos1=strpos($rem_str,"|");
          $ext6=substr($rem_str,0,$pos1);

          $rem_str=substr($rem_str,$pos1+1);
          $pos1=strpos($rem_str,"#");
          $ext7=substr($rem_str,0,$pos1);
          echo "<tbody>";
              echo"<td>$ext1</td>";
              echo"<td>$ext2</td>";
              echo"<td>$ext3</td>";
              echo"<td>$ext4</td>";
              echo"<td>$ext5</td>";
              echo"<td>$ext7</td>";
            echo"</tbody>";
        }
        }
        fclose($file1);

?>
</table>
</div>
<div class="img">
  <img src="http://localhost/Project/border.png">
</div>
</body>
</html>
