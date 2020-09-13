
<!DOCTYPE html>
<title>Insert</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body,html{
    background-image: linear-gradient(to top, #d299c2 0%, #fef9d7 100%);

    background-repeat: no-repeat;
    background-size: cover;
    height:51.5em;
    width:109.5em;
  }
    .ins{
      position: absolute;
      top:5%;
      left:32%;
      text-align: center;

    }
    .formm{
      position: absolute;
      top:40%;
      left:20%;
    }
    button{
      background: transparent;
      border-style: solid;
      border-color:white;
      border-radius: 10px;
      color: black;
      padding: 8px 28px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
  }
  .back{
      position: absolute;
      top:90%;
      left:45%;
  }
  .ssubmit{
      background: transparent;
      border:none;
      display: inline-block;
      font-size: 20px;
  }

  }

  </style>
<body>

<div class="ins1">
  <div class="ins">
    <h2>Insert professor achievement details</h2>
    <div class="line">
        <svg height="210" width="500">
          <line x1="0" y1="0" x2="500" y1="0" style="stroke:black;stroke-width:2;" />
      </svg>
    </div>
    <div class="formm">
    <form method="post" action="insert_prof.php">
      <input type="text" class="form-control" name="id" placeholder="Enter professor identification number" size="40" /><br>
      <input type="text" class="form-control" name="name" placeholder="Enter professor name" size="40" /><br>
      <input type="text" class="form-control" name="deptno" placeholder="Enter professor department identification number" size="40" /><br>
      <input type="text" class="form-control" name="achcat" placeholder="Enter recognitions" /><br>
      <input type="text" class="form-control" name="ach" placeholder="Enter achievement" /><br><br><br>
      <b><input type="submit" class="ssubmit" name="submit" value="Submit"></b>
    </form>
  </div>

  </div>

</div>
<div class="back">
        <a  href="modify.html"><button type="button" class="but"><b>Back to Home</b></button></a>
</div>
</body>


