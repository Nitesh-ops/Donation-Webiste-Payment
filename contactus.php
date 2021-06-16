<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=C, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        $(function()
        {
            $("#header").load("navbar.html"); 
   
        });
      </script> 
      <style>
          body {font-family: Arial, Helvetica, sans-serif;}
          
            * {box-sizing: border-box;}

            input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
            }

            input[type=submit] {
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            input[type=submit]:hover {
            background-color: #45a049;
            }

            #con {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding:20px;
            margin-top: 80px;
            margin-bottom: 10px;
            
            }
</style>
</head>
<body>
  <?php 
  include 'config.php';
  if(isset($_POST['submit'])) 
  {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $description=$_POST['subject'];
    $sql="insert into contact(fname,lname,country,email,description) values('{$fname}','{$lname}','{$email}','{$country}','{$description}')";
    $result=mysqli_query($db,$sql);
    if($result)
    {
              $_SESSION['status']="Added Succesfully";
              $_SESSION['status_code']="success";
    }
  }
  ?>
<div id="header"></div>
<div class="container" id="con">
  <form method="post">
    <label for="fname">First Name</label>
    <input type="text"  name="fname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text"  name="lname" placeholder="Your last name..">

    <label for="email">E-mail</label>
    <input type="text"  name="email" placeholder="Enter your email..">

    <label for="country">Country</label>
    <input type="text"  name="country" placeholder="Please enter your country">

    <label for="subject">Subject</label>
    <textarea  name="subject" placeholder="Write something.." style="height:200px"></textarea>
   <center> <input class="btn btn-primary" type="submit" value="Submit" name="submit"></input></center>
  </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>