<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Forside</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">

	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/4c1c4ae382.js" crossorigin="anonymous"></script>



	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include "includes/menu.php";?>


<div class="container-fluid p-3 bg-baggrund" id="halvcirkel2">

	<div class="row mt-4">
		<div class="col-12 col-md-5 mb-3 bg-gron d-flex align-items-center justify-content-center" id="halvcirkel">
			<div class="text-center text-white">
				<h5>Lorem ipsum dolor sit amet</h5>
                <br>
                VeteranHaven ligger i Slagelse kommune. De er et tilbud til folk med besvær i hverdagen, veteraner og alt derimellem.
                <br><br>
                Her på siden vil du finde alt nødvendig information omkring haven. Men inden du når så langt, har vi her en video som fortæller meget mere.
			</div>
		</div>
		<div class="col-12 col-md-7 bg-baggrund">
			<div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/HeAW3uTwXYg" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bg-white p-3" >
	<div class="row">
		<div class="col-12 col-md-5 mb-3">
			<div class="card">
				<div class="ratio ratio-16x9">
					<img src="image/veteranhaven/veteranhaveforside.png" alt="VHforside">
				</div>
			</div>
		</div>
		<div class="col-12 col-md-7 mb-3 d-flex align-items-center justify-content-center">
			<div class="card ">
				<div class="card-body ">
					This is some text within a card body.
                    This is some text within a card body.
				</div>
			</div>
		</div>
	</div>
</div>





<?php include "includes/footer.php";?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
