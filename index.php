<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Forside</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">

    <link rel="stylesheet" href="https://use.typekit.net/who0qtq.css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/4c1c4ae382.js" crossorigin="anonymous"></script>



	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div id="top"></div>
<a href="#top" id="pil"><i style="color: #907CB0;" class="fa-solid fa-circle-arrow-up"></i></a>

<?php include "includes/menu.php";?>


<div class="container-fluid bg-baggrund" >

	<div class="row">
		<div class="col-md-4 p-3 textforside bg-gron d-flex align-items-center justify-content-center">
                VeteranHaven ligger i Slagelse kommune. De er et tilbud til folk med besvær i hverdagen, veteraner og alt derimellem.
                <br><br>
                Her på siden vil du finde alt nødvendig information omkring haven. Men inden du når så langt, har vi her en video som fortæller meget mere.
		</div>
        <div class="  col-md-2 d-flex align-items-center justify-content-center"
             style="
            height: auto;
            right: 0;
            border-radius: 0 20rem 20rem 0;
            background-color: rgb(168,227,113);"
        ></div>

		<div class="col-md-6 bg-baggrund mt-4 mb-5 d-flex align-items-center justify-content-center" style="position: relative">

                <div class="ratio ratio-16x9" id="over">
                <iframe src="https://www.youtube.com/embed/HeAW3uTwXYg" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

		</div>
	</div>
</div>

<div class="container-fluid bg-white p-3">
	<div class="row">
		<div class="col-12 col-md-6 d-flex justify-content-center align-items-center ratio-16x9">
            <img src="image/veteranhaven/veteranhaveforside.png" alt="billed">
		</div>
		<div class="col-12 col-md-6 mb-3 mt-3 d-flex align-items-center justify-content-center" style="position: relative">
			<div class="card" id="overtekst">
				<div class="card-body textforside">
					VeteranHaven er en socialøkonomisk virksom hed.<br>
                    Det betyder blandt andet at:<br><br>
                    <p class="lh-lg">
                    <i class="fa-solid fa-arrow-right h4"></i> &nbsp; Vi skal være uafhængige af det offentligt. <br>
                    <i class="fa-solid fa-arrow-right h4"></i> &nbsp; Vi har et socialt formål, som gavner samfundet.<br>
                    <i class="fa-solid fa-arrow-right h4"></i> &nbsp; Vi skal være erhvervsdrivende ved at tilbyde ydelser og/eller sælge varer, og heraf tjene den primære indkomst.
                    </p>
                </div>
			</div>
		</div>
	</div>
</div>




<?php include "includes/footer.php";?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
