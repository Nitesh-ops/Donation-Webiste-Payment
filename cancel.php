<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Succesfull</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
    $(function()
    {
        $("#header").load("navbar.html"); 
       $("#footer").load("footer.php"); 
    });
  </script> 
  </head>
  <body>
  <div id="header"></div>
  <div class="container">
      <br>
      <center><h3> Oops Your Payment is not Succesfull and it is cancelled!! </h3>
    <h4>Do you Still Want to Donate?</h4>
    <br>
    <a href="form.php"><button type="button" class="btn btn-primary" >Yes</button></a>
    <a  href="index.html"><button type="button" class="btn btn-primary">No</button></a>
    </center>
    <br/>
    <br/>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
   
</div>
  <div id="footer"></div>
</body>
</html>