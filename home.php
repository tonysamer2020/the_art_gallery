<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> The Art Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>
    <li data-target="#myCarousel" data-slide-to="9"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/image-1.jpeg" alt="image" style="width:100%; height:650px;">
    </div>

    <div class="item">
      <img src="images/image-2.jpeg" alt="image" style="width:100%; height:650px;">
    </div>

    <div class="item">
      <img src="images/image-3.jpg" alt="image" style="width:100%; height:650px;">
    </div>
    <div class="item">
      <img src="images/image-4.jpg" alt="image" style="width:100%; height:650px;">
    </div>
    <div class="item">
      <img src="images/image-5.jpg" alt="image" style="width:100%; height:650px;">
    </div>
    <div class="item">
      <img src="images/image-6.jpg" alt="image" style="width:100%; height:650px;">
    </div>
    <div class="item">
      <img src="images/image-7.jpg" alt="image" style="width:100%; height:650px;">
    </div>
    <div class="item">
      <img src="images/image-8.jpg" alt="image" style="width:100%; height:650px;">
    </div>
    <div class="item">
      <img src="images/image-9.jpg" alt="image" style="width:100%; height:650px;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>
</html>