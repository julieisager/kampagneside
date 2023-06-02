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


<nav class="navbar navbar-expand-lg navbar-light bg-white">
	<div class="container-fluid">




		<a class="navbar-brand" href="#">
			<img src="image/veteranhaven_logo_farver.png" alt="logo" id="logo">
		</a>
		<button style="border: none" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0 col justify-content-end">

				<li class="nav-item dropdown">
					<a class="nav-link text-black mx-3" href="#" id="navbarDropdownHvemErVi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Hvem er vi
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Action</a></li>
						<li><a class="dropdown-item" href="#">Another action</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
					</ul>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link text-black mx-3" href="#" id="navbarDropdownRSV" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						RSV
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Action</a></li>
						<li><a class="dropdown-item" href="#">Another action</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
					</ul>
				</li>

                <li>
                    <div class="col mx-3 bg-lilla p-2 d-flex" id="kasse2"></div>
                </li>


				<li class="nav-item mx-3" id="stot">
					<a class="nav-link active" aria-current="page" href="#">Støt</a>
                </li>



				<li class="nav-item mx-3">
					<a class="nav-link active" aria-current="page" href="#">Kontakt</a>
				</li>

			</ul>

			<form class="d-flex">
				<div class="row">
					<div class="col">
						<div class="collapse multi-collapse mx-2" id="multiCollapseExample1">
								<input class="form-control me-2" type="search" placeholder="Søg" aria-label="Search">
						</div>
					</div>
				</div>
				<p>
					<a class="btn" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
						<span><i class="fa-solid fa-magnifying-glass"></i></span>
					</a>
				</p>
			</form>

		</div>
	</div>
</nav>


<div class="container-fluid bg-gron p-3" id="arrow">
    <div>
        <div class="col d-flex" id="kasse"></div>
    </div>


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
				<div class="card-body">
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

<div class="container-fluid bg-baggrund p-3">
	<div class="row">
		<div class="col-12 col-md-4 line mb-3 text-center">
			<h5>Vores oplysninger</h5>
			VeteranHaven <br>
			Brovej 13b - Slots Bjergby <br>
			4200 Slagelse <br>
			<p></p>
			Tlf: 52 40 04 55 <br>
			adminstration@veteranhaven.dk <br>
			CVR-nr: 34746567 <br>
		</div>

		<div class="col-12 col-md-4 line mb-3 text-center">
			<h5>Genveje</h5>
		</div>

		<div class="col-12 col-md-4 mb-3 mt-4 text-center">
			<img src="image/RSV.png" alt="RSV" id="RSV">
		</div>
	</div>
</div>



<div class="container-fluid bg-gron p-3">
	<div class="row">
		<div class="col-7 d-flex align-items-center">
			Copyright 2023 VeteranHaven
		</div>
		<div class="col text-end d-flex align-items-center" id="find">
			Find os her
		</div>

		<div class="col text-end icons d-flex align-items-center">
			<a href="https://www.facebook.com/VeteranHaven" style="color: #4d5154">
				<i class="fa-brands fa-square-facebook"></i>
			</a>

			<i class="fa-brands fa-linkedin mx-5"></i>

            <i class="fa-brands fa-instagram"></i>
		</div>

	</div>
</div>







<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
