<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Welcome to My Page</title>
      <!--CSS Styling-->
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" >
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link href="./css/style.css" rel="stylesheet">

	</head>
	<body>


		<!--NAVBAR-->

	<header>
		<div>
			<nav class="navbar navbar-expand-lg navbar-light bg-light font">
				<a class="navbar-brand" href="#">HalfMortise</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="https://www.halfmortise.com/" target="_blank">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!--/NAVBAR-->

<!--TO DO-->
<!--Images needed: header bg (laptop/code/porch/coffee), resume icon, svcs icon, consulting icon, wireframe icon, gears icon -->
<!--add padding between cards for responsive version, too close together (py)-->
<!--centering also not working on responsive version-->


      <!--Main Body-->


		<!--JUMBOTRON Section-->
		<main role="main">
			<section id="jumbotron" class="jumbotron font text-center">
				<div class="container-fluid">
					<h1 class="jumbotron-heading">WELCOME</h1>
					<p class="lead text-muted">Maybe put a background image here?</p>
					<p>
						<a href="#" class="btn btn-sm btn-outline-secondary">Go there</a>
					</p>
				</div>
			</section>
<!--END JUMBOTRON-->

<!--SERVICES SECTION-->
			<div class="album py-5 bg-light">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 mb-4">
							<div class="card mb-4 shadow-sm justify-content-center">
								<img src="./images/desktop.svg" width="25px" alt="" />
								<div class="card-body mb-4">
									<p class="card-text text-center">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="btn-group">
											<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
											<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-4">
							<div class="card mb-4 shadow-sm">
								<img class="card-img-top mb-4" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
								<div class="card-body mb-4">
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="btn-group">
											<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
											<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
										</div>
										<small class="text-muted">9 mins</small>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-4">
							<div class="card mb-4 shadow-sm">
								<img class="card-img-top mb-4" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
								<div class="card-body mb-4">
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="btn-group">
											<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
											<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
										</div>
										<small class="text-muted">9 mins</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<!--END SERVICES SECTION-->

			</div>
		</main>

		<!--ABOUT SECTION HEADER-->
		<section class="container-fluid text-md-center font">
			<div class="row text-md-center">
				<div class="col-md-12 justify-content-center">
					<h4 class="px-5">
					About Me
					</h4>
				</div>
			</div>
		</section>

		<!--ABOUT Section-->
		<section class="px-5 font">
			<div>
				<div>
					<p>
						This is where <a href="https://www.google.com/" target="_blank">About Me</a> will go.
					</p>
				</div>
			</div>
		</section>

		<!--SERVICES SECTION HEADER-->
		<section class="py-5 font text-center">
			<div class="container-fluid text-center">
				<div class="jumbotron text-center">
					<h4 class="display-5 px-5 text-center">Services</h4>
					<div class="card col-sm-4 col-md-4 col-lg-4 my-5 p-5 ml-0 mx-auto">
						<div class="text-center border-light"></div>
					</div>
					<div class="card col-sm-4 col-md-4 col-lg-4 my-5 p-5 ml-0 mx-auto">
						<div class="text-center border-light"></div>
					</div>
					<div class="card col-sm-4 col-md-4 col-lg-4 my-5 p-5 ml-0 mx-auto">
						<div class="text-center border-light"></div>
					</div>
				</div>
			</div>
		</section>


		<!--SERVICES Section-->
	<section class="container-fluid text-md-center font">
		<div class="row">
			<div class="col-sm-4">
				<div class="card border-light">
					<div class="card-body justify-content-center">
						<img class="img-opacity" src="images/desktop.svg" width="25px" alt="" />
						<h6 class="card-title">UI/UX Design</h6>
						<p class="card-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card border-light">
					<div class="card-body justify-content-center">
						<img class="img-opacity" src="images/cogs.svg" width="30px" alt="" />
						<h6 class="card-title">Full-stack Web Development</h6>
						<p class="card-text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card border-light">
					<div class="card-body justify-content-center">
						<img class="img-opacity" src="images/users.svg" width="30px" alt="" />
						<h6 class="card-title">Consulting</h6>
						<p class="card-text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
					</div>
				</div>
			</div>
		</div>
	</section>


		<!--PORTFOLIO SECTION HEADER-->
		<section class="container-fluid text-md-center font">
			<div class="row text-md-center">
				<div class="col-md-12 justify-content-center">
					<h4>
					Portfolio
					</h4>
					<div class="col-md-12 justify-content-center">
				</div>
		</section>




		<!--PORTFOLIO Section-->
		<section class="py-5 font">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<img class="img-fluid d-block mx-auto mb-4" src="./images/placeholder.jpg" alt="">
						<div class="card mb-4">
							<div class="card-body">
								<h5 class="card-title">Portfolio Item 1</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<img class="img-fluid d-block mx-auto mb-4" src="./images/placeholder.jpg" alt="">
						<div class="card mb-4">
							<div class="card-body">
								<h5 class="card-title">Portfolio Item 2</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<img class="img-fluid d-block mx-auto mb-4" src="./images/placeholder.jpg" alt="">
						<div class="card mb-4">
							<div class="card-body">
								<h5 class="card-title">Portfolio Item 3</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>




		<!--CONTACT Section-->


		<!--CONTACT SECTION HEADER-->
		<section class="container-fluid text-md-center font">
			<div class="row text-md-center">
				<div class="col-md-12 justify-content-center">
					<h4>
					Contact
					</h4>
					<p>
						<a href="#" class="btn btn-secondary my-2">Contact</a>
					</p>
				</div>
			</div>
		</section>











		<!--FOOTER Section-->
		<section class="font-footer">
			<footer class="bg-dark text-light text-center py-4">
				<div class="container">
					<p>&copy;&nbsp;<a href="https://www.github.com/halfmortise">HalfMortise</a></p>
				</div>
			</footer>
		</section>















   </body>
</html>