<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
      <style>
                body {
        font-family: Arial, Helvetica, sans-serif;
        }
        .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
        }
        .title {
        color: grey;
        }
          </style>
</head>
<body>
    <div class="bg"></div>
<div id="header"></div>
<div class="about-section">
  <h1>Spread Smiles <i class="fa fa-smile"></i></h1>
  <p>“We make a living by what we get, but we make a life by what we give.”<br/>
―Winston Churchill</p>
</div>

<h2 style="text-align:center">About Us</h2>
      <div class="container">
      <center>
      <img class="donate" src="images/donatelogo.png" alt="donatelogo" style="width:250px; align:right;">
    
      <br/><br/><br/>
      <img src="images/download.jpg" alt="profilepic" style="width:150px;">
        <h2>Nitesh Singh</h2>
        <p class="title">Developer</p>
        <p>Think Twice Code Once</p>
        <p>niteshsingh.ns44@gmail.com</p>
        <p><button class="btn btn-primary btn-lg btn-block">Contact</button></p>
        </center>
</div>
<div id="footer"></div>
</body>
</html>