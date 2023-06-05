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



<div class="container-fluid bg-gron p-3">



	<div class="row mt-5">
		<div class="col-5">
			<div class="card">
				<div class="card-body">
					This is some text within a card body.
				</div>
			</div>
		</div>
		<div class="col-7">
			<div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/HeAW3uTwXYg" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bg-white p-3" >
	<div class="row">
		<div class="col-5">
			<div class="card">
				<div class="card-img-overlay">
					This is some text within a card body.
					This is some text within a card body.
				</div>
			</div>
		</div>
		<div class="col-7">
			<div class="card ">
				<div class="card-body ">
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
