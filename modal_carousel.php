<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="modal_carousel.css">
  <script src="modal_carousel.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
</head>
<body>

	<div class="container">
	<!-- clip: rect(top, right, bottom, left) -->
		<div class="clip">
		
			<img src="img_chania.jpg" alt="Chania" id="myBtn0" class="slikax img-thumbnail img-responsive" data-toggle="modal" data-target="#myModal">
			<img src="img_chania2.jpg" alt="Chania" id="myBtn1" class="slikax img-thumbnail img-responsive" data-toggle="modal" data-target="#myModal">
			<img src="img_flower.jpg" alt="Flower" id="myBtn2" class="slikax img-thumbnail img-responsive" data-toggle="modal" data-target="#myModal">
			<img src="img_flower2.jpg" alt="Flower" id="myBtn3" class="slikax img-thumbnail img-responsive" data-toggle="modal" data-target="#myModal">
		
		</div>
	</div>
	
<div class="container">
	
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li id="x0" data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li id="x1" data-target="#myCarousel" data-slide-to="1"></li>
					<li id="x2" data-target="#myCarousel" data-slide-to="2"></li>
					<li id="x3" data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img_chania.jpg" class="img-responsive" alt="Chania">
					</div>

					<div class="item">
						<img src="img_chania2.jpg" class="img-responsive" alt="Chania">
					</div>

					<div class="item">
						<img src="img_flower.jpg" class="img-responsive" alt="Flower">
					</div>

					<div class="item">
						<img src="img_flower2.jpg" class="img-responsive" alt="Flower">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
        </div>
			<span class="glyphicon glyphicon-remove-circle close" data-dismiss="modal"></span>
          
        
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>

