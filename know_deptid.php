<!DOCTYPE html>
<html lang="en">
<head>
  <title>Know Department information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style type="text/css">
  body,html{
  	background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
  	object-fit: cover;
  	background-repeat: no-repeat;
    background-size: cover;
    height:45em;
    width:95.9em;
  	}
  .container{
    position: absolute;
    top:15%;
    left:12%;
    text-align: center;
  }
  .disp{
    position: absolute;
    top:5%;
    left:35%;
  }
    .back{
      position: absolute;
      top:92%;
      left:45%;
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
</head>

<body>
	<header>
	<div class="disp">
  	<h2>Department information</h2>
  </div>
  <div class="container">  
  <table cellspacing="25" class="table" style="text-align:center;">  
    <thead>
      <tr>
        <th>Department ID </th>
        <th>Department name</th>
       </tr>
    </thead>
    <br>
    <tbody>
      <?php
      $file=fopen("department.txt","r");
      while(!feof($file)){
        $line=fgets($file);
        $pos1=strpos($line, "|");
        $ext1=substr($line,0,$pos1);
        $rem_str=substr($line,$pos1+1);
        $pos1=strpos($rem_str,"#");
        $ext2=substr($rem_str,0,$pos1);
        echo "<td>$ext1</td>";
        echo "<td>$ext2</td>";
        echo"</tbody>";
      }

      fclose($file);
      ?>
  </tr>
    </tbody>
</table>
</div>
</header>
<div class="back">
        <a  href="http://localhost/Project/register.html"><button type="button" class="but"><b>Back to Register</b></button></a>
</div>
</body>
</html>