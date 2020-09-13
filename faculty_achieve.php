<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<title>PROFESSOR ACHIEVEMENT</title>
  <style type="text/css">
    *{
      margin: 0;
      padding: 0;
      font-family: Raleway,"Helvetica Neue",Helvetica,Arial,sans-serif;
      text-align: center;
      background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)) ,url('images2.jpeg');
      height:auto;
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
      color: #fff;
}
  button{
      background: transparent;
      border:none;
      color: white;
      padding: 6px 26px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
  }
  .back{
      position: absolute;
      top:8px;
      left:85em;
  }
.container{
    position: absolute;
    font-size: 1.3em;
    margin: 25px 0;
    border-collapse: collapse;
    text-align: left;
    top:20%;
    left:10%;
    color: white
  }
  .disp{
    position: absolute;
    top:5%;
    left:30%;
  }

  h2{
    display: inline-block;
    font-family: Raleway,"Helvetica Neue",Helvetica,Arial,sans-serif;
  }


  </style>
</head>
<body>
	<header>
	<div class="disp">
  	<h2>Professor Achievement</h2>
    <p>-----------------------------------------------------------------------------------------</p>
  </div>
  <div class="container">  
  <table class="table">  
    <thead>
      <tr>
        <th style="color:white;">Professor details  <i style='font-size:24px' class='fas'>&#xf51c;</i></th>
        <th style="color:white;">Recognitions received  <i style='font-size:24px' class='far'>&#xf24d;</i></th>
        <th style="color:white;">Achievement <i style='font-size:24px' class='fas'>&#xf559;</i></th>
       </tr>
    </thead>
    <br>
    <tbody style="color:white;">
      <?php
        $file1=fopen("insert_achievement_prof.txt","r");
        while(!feof($file1)){
              $line1=fgets($file1);
              if(feof($file1)){
                  break;
                }
              $l=strval($line1);
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
              $rem_str=substr($rem_str,$pos1+1);
              $pos1=strpos($rem_str,"#");
              $ext7=substr($rem_str,0,$pos1);
              echo "<tbody>";
                  echo"<td style=\"color:white;\"><b>$ext1 <br>$ext2 <br>$ext3<b></td>";
                  echo"<td style=\"color:white;\">$ext4</td>";
                  echo"<td style=\"color:white;\"><b>$ext7<b></td>";
                echo"</tbody>";
              }
            }
            fclose($file1);
      ?>
</table>
</div>
</header>
<div class="back">
        <a  href="http://localhost/Project/mainpageprof.php"><button type="button" class="but"><b>Back Home!</b></button></a>
</div>
</body>
</html>