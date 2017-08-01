<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>HTML5 boilerplate – all you really need…</title>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
    <header class="row">
		<div class="col-4 text-center">
			<h1>Duncan Seif</h1>	
		</div>
		<div class="col-8">
			<nav>
				<a href="#slide1">Experience</a>
				<a href="#slide2">Education</a>
				<a href="#slide3">Clients</a>
				<a href="#slide4">Skills</a>
				<a href="#slide5">Expertise</a>
				<a href="#slide6">Contact</a> 
			</nav>
		</div>
	</header>
	<main>
		<div id="slide1" class="row d-flex justify-content-center">
			<div id="businessCard" class="col-8">
				<div class="side">
					<img src="img/duncan-seif-headshot-470-470.jpg" />
				</div>
				<div class="side">
					<h2>Duncan Seif</h2>
					<p>Web Developer / Marketing Specialist<br />Chicago, Illinios</p>
					<p>Donec quis consectetur odio, eget condimentum sapien. Praesent facilisis porta mi quis luctus. Curabitur sed ullamcorper tortor. Donec et sapien orci. Aenean laoreet ante id nibh convallis dapibus. Vestibulum vitae efficitur est. Suspendisse laoreet, ipsum non commodo fermentum, nibh eros laoreet tellus, ut suscipit massa dolor non nulla.</p>
				</div>
			</div>
		</div>
		<?php include('slides/slide3.php'); ?>
		<?php include('slides/slide4.php'); ?>
		<div id="slide5">
			<h2 class="text-center" >Freelance Clients</h2>
			<div class="row">
				<div class="col-3 text-center">X</div>
				<div class="col-3 text-center">X</div>
				<div class="col-3 text-center">X</div>
				<div class="col-3 text-center">X</div>
			</div>
		</div>
		<div id="slide6">
			<h2 class="text-center" >Skills</h2>
			<p>Donec quis consectetur odio, eget condimentum sapien. Praesent facilisis porta mi quis luctus. Curabitur sed ullamcorper tortor. Donec et sapien orci. Aenean laoreet ante id nibh convallis dapibus. Vestibulum vitae efficitur est. Suspendisse laoreet, ipsum non commodo fermentum, nibh eros laoreet tellus, ut suscipit massa dolor non nulla. Phasellus lacus lacus, rutrum id blandit ullamcorper, pulvinar nec arcu. Donec eu orci faucibus, imperdiet tortor vitae, vulputate augue. Ut aliquam nulla eu lacus maximus sagittis. Vivamus vestibulum ultricies fermentum. Nunc maximus justo vel laoreet facilisis.</p>
		</div>
		<div id="slide7">
			<h2 class="text-center" >Expertise</h2>
			<div class="row"> 
				<div class="col-4">Donec quis consectetur odio, eget condimentum sapien. Praesent facilisis porta mi quis luctus. Curabitur sed ullamcorper tortor. Donec et sapien orci. Aenean laoreet ante id nibh convallis dapibus.</div>
				<div class="col-4">Donec quis consectetur odio, eget condimentum sapien. Praesent facilisis porta mi quis luctus. Curabitur sed ullamcorper tortor. Donec et sapien orci. Aenean laoreet ante id nibh convallis dapibus.</div>
				<div class="col-4">Donec quis consectetur odio, eget condimentum sapien. Praesent facilisis porta mi quis luctus. Curabitur sed ullamcorper tortor. Donec et sapien orci. Aenean laoreet ante id nibh convallis dapibus.</div>
			</div>
		</div>
		<div id="slide8">
			<h2 class="text-center" >Contact Me</h2>
			<div class="row"> 
				<div class="col-6">Donec quis consectetur odio, eget condimentum sapien. Praesent facilisis porta mi quis luctus. Curabitur sed ullamcorper tortor. Donec et sapien orci. Aenean laoreet ante id nibh convallis dapibus.</div>
				<div class="col-6">Donec quis consectetur odio, eget condimentum sapien. Praesent facilisis porta mi quis luctus. Curabitur sed ullamcorper tortor. Donec et sapien orci. Aenean laoreet ante id nibh convallis dapibus.</div>
			</div>
		</div>
	</main>
	<footer class="row">
		<div class="col-12 text-center">
			&copy; <?php echo date('Y'); ?> by Duncan Seif 
		</div>
	</footer>
	<script type="text/javascript" src="./js/main.js"></script>
	<script type="text/javascript">
	//for slick slider
$(document).ready(function(){

$('.slider').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});


});
</script>
</body>
</html>