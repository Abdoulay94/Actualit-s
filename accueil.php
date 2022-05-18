<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
	$conn = new PDO("mysql:host=$servername;dbname=mglsi_news", $username, $password);
  // set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	

	$result = $conn->prepare("SELECT * FROM article,categorie WHERE article.categorie=categorie.id");

	$result->execute();

	$result = $result->fetchAll(); 




	//$result = $result->fetchAll(); 

	//var_dump($result);
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Klean - Cleaning Services Website Template</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Free HTML Templates" name="keywords">
	<meta content="Free HTML Templates" name="description">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="css/style.css" rel="stylesheet">
	<link type="text/css"
	href="style/accueil.css"
	rel="stylesheet">
	<title></title>
</head>
<body>

	<h1>Actualité bla bla bla
	</h1>

	<ul class="menu">
		<li><a href="#" class="active">Accueil</a></li>
		<li><a href="#">Sport</a></li>
		<li><a href="#">Santé</a></li>
		<li><a href="#">Education</a></li>
		<li><a href="#">Politique</a></li>
		<li class="slider"></li>
	</ul>






	<!-- Blog Start -->

	
	
	<div class="container-fluid pt-5">
		<div class="container pt-5">


			<div class="row">
				<?php for($i=1; $i <=sizeof($result); $i++) { 

					 if($i%4==0){ echo "</div></div></div><div class='container pt-5'><div class='container pt-5'><div class='row'> "; }?> 

				
				
                <div class="col-lg-4 col-md-6 mb-5">
                	<div class="position-relative mb-4">
                		<img class="img-fluid rounded w-100" src="img/blog-3.jpg" alt="">
                		<div class="blog-date">
                			<h4 class="font-weight-bold mb-n1">01</h4>
                			<small class="text-white text-uppercase">Jan</small>
                		</div>
                	</div>
               
                    <h5 class="font-weight-medium mb-2"><?php $result[$i]->titre ?></h5>
                    <p class="mb-4">Dolor justo sea kasd lorem clita justo no diam amet. Kasd magna dolor amet</p>

                </div>


               

<?php }?>


                </div></div></div>



       

    <!-- Blog End -->

</body>
</html>