<!DOCTYPE html>
<title>Update</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body,html{
    background-image: linear-gradient(to top, #d299c2 0%, #fef9d7 100%);
    background-repeat: no-repeat;
    background-size: cover;
    height:71em;
    width:108.5em;
   }
    .ins{
      position: absolute;
      top:5%;
      left:32%;
      text-align: center;

    }
    .formm{
      position: absolute;
      top:35%;
      left:37.5%;
      text-align:center;
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
  .back{
      position: absolute;
      top:123%;
      left:43.5%;
  }
  .ssubmit{
      background: transparent;
      border:none;
      display: inline-block;
      font-size: 20px;
  }
  .form1{
    position: absolute;
    top:30%;
    left:17%;
  }
}

</style>
<body>

<div class="ins1">
  <div class="ins">
    <h2>Update student achievement details</h2>
    <div class="line">
        <svg height="210" width="500">
          <line x1="0" y1="0" x2="800" y1="0" style="stroke:black;stroke-width:2;" />
      </svg>
    </div>
    <div class="form1">
    <form method="post" action="modal-update-stu.php">
      <input type="text" class="form-control" name="idscr" size="40" placeholder="Enter the student identification number to update details" required/><br>
      <input type="submit" class="ssubmit" name="submit" value="Search">
    </form>

    <?php
  ini_set('error_reporting',E_ALL & ~E_NOTICE );
  $id=$_POST["idscr"];
  $file1=fopen("insert_achievement.txt","r") or die("cannot open");
  $i=strval($id);
  while(!feof($file1)){
    $line1=fgets($file1);
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
    }
  }
  fclose($file1);
?>
</table>
</div>
  </div>
        
    <div class="formm">
    <form method="post"action="update.php">
      <lable style="font-size: 20px;">Student identification number</lable>
      <input type="text" class="form-control" name="id" size="40"  value="<?php echo "$ext1";?>"/><br>
      <lable style="font-size: 20px;">Student name</lable>
      <input type="text" class="form-control" name="name" value="<?php echo "$ext2";?>" /><br>
      <lable style="font-size: 20px;">Student department</lable>
      <input type="text" class="form-control" name="deptno" value="<?php echo "$ext3";?>" /><br>
      <lable style="font-size: 20px;">Student participation level</lable>
      <input type="text" class="form-control" name="part" value="<?php echo "$ext4";?>"/><br>
      <lable style="font-size: 20px;">Student achievement category</lable>
      <input type="text" class="form-control" name="achcat" value="<?php echo "$ext5";?>" /><br>
      <lable style="font-size: 20px;">Student achievement</lable>
      <input type="text" class="form-control" name="ach" value="<?php echo "$ext7";?>" /><br><br>
      <b><input type="submit" class="ssubmit" name="submit" value="Update"><br><br><br></b>
    </form>
  </div>

  </div>

</div>
<div class="back">
        <a  href="modify.html"><button type="button" class="but"><b>Back to Home</b></button></a>
</div>
</body>

