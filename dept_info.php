<!DOCTYPE html>

<html>
<head>
	<title>DEPARTMENT INFO</title>
	<link rel="stylesheet" type="text/css" href="styledept.css">
    <style>
      table,
      td,
      th {
        padding: 15px;
        border: 1.5px solid #000;
        border-radius: 5px;
        background-color: transparent;
        text-align: center;
      }
      table.center {
        margin-left: auto; 
        margin-right: auto;
      }
      *{
          margin: 0;
          padding: 0;
          font-family:'Dancing Script',cursive;
          text-align: center;
      }

      header{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) ,url('image1.jpg');
        width:95em;
        height: 80em;
        background-position: center;
        background-size: cover;
      }

      .container{
          position: absolute;
          font-size: 1.3em;
          top:30%;
          left:35%;
        }
      .disp{
          position: absolute;
          top:9%;
          left:40%;
        }

      h2{
          display: inline-block;
          text-align: center;
          padding :25px;
          left: 80%;
        }
    </style>
</head>
<body>
	<header>
	<div class="disp">
  	<h2>Department information</h2>
  </div>
  <div class="container">  
  <table cellspacing="25">  
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
</body>
</html>