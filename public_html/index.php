<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Welcome to My Page</title>

		<!--CSS Styling-->

		<!-- Bootstrap CSS -->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" >

		<!--Custom stylesheet-->
		<link href="./css/style.css" rel="stylesheet">

		<!-- JQuery first, then Popper.js, then Bootstrap.js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src="https://www.google.com/recaptcha/api.js"></script>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

		<!--Custom JS-->
		<script rel="script" src="./js/script.js"></script>

	</head>
	<body>


		<!--NAVBAR-->

		<header>
			<div>
				<nav class="navbar navbar-expand-lg navbar-light bg-light font">
<!--TO DO: populate the href-->
					<img src="images/hm-favicon.gif" width="30px" alt="half mortise lock"><a class="navbar-brand" href="#">Half Mortise</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
						<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
							<li class="nav-item active">
<!--TO DO: populate the href-->
								<a class="nav-link" href="#" target="_blank">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#about">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#services">Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#portfolio">Portfolio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#contact">Contact</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<!--/NAVBAR-->

			<div class="title">
				<h1>- WELCOME -</h1>
				<p class="header-links"><a href="https://www.linkedin.com/in/joycorsi" target="_blank">Linkedin</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.github.com/halfmortise" target="_blank">Github</a></p>
			</div>
		</header>

		<!--Main Body-->

		<!--ABOUT ME Section-->
		<main class="mt-3">
			<section id="about" class="font text-center py-5">
				<div class="container-fluid">
					<h2 class="jumbotron-heading">About Me</h2>
					<p class="card-text text-center">From the time I first took my first HTML course in 1999, to today as a full-stack developer, I have always been a bit of a software nerd. I love solving problems, which translates easily to working with software development as well as new venture development. I have put together this page in order to market my services to small businesses everywhere which may need communication services relevant to the development of websites, content management, online profiles, merchant accounts (online stores), etc.</p>
<!--					<p>-->
<!--						<a href="https://bootcamp-coders.cnm.edu/~ecorsi/pro-dev/resumes/Joy%20Corsi%20Resume.pdf" target="_blank" class="btn btn-sm btn-outline-secondary" role="button" aria-pressed="true">View Resume</a>-->
<!--					</p>-->
				</div>
			</section>
			<!--END ABOUT ME-->

			<!--SERVICES-->
			<!--SERVICES SECTION HEADER-->
			<section id="services" class="jumbotron container-fluid text-md-center font">
				<div class="font shadow-box album py-2 bg-light">
					<div class="container-fluid justify-content-center text-center">
						<div class="row">
							<div class="col-md-12 justify-content-center py-4">
								<h4>Services</h4>
							</div>
							<!--/SERVICES SECTION HEADER-->

							<div class="col-md-4 mb-2">
								<div class="card-title mb-3 justify-content-center">
									<img class="icons" src="./images/desktop.svg" alt="" />
									<p class="justify-content-center">UI/UX Design</p>
									<div class="card-body mb-4">
										<p class="card-text text-center">As an entrepreneur myself, I have a passion for facilitating the development of other new ventures and small businesses. Marketing your brand via a website is a big part of communicating with your target market, and I am uniquely qualified to assist you with that. I can educate and advise on the available tools currently on the market, and also guide you in through the design phase until you achieve a plan you're ready to move forward with.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-4">
								<div class="card-title mb-4">
									<img class="icons" src="./images/cogs.svg" alt="" />
									<p class="justify-content-center">Full-stack Web Development</p>
									<div class="card-body mb-4">
										<p class="card-text text-center">Whether you're a writer and blogger, a merchant with products, or someone like myself marketing services, after reaching a design that you're happy with, I can also take on the development phase with you. Understanding the need for a system that's simple and easy to use, as well as a seamless front-end that will keep your users coming back, I will always commit to hearing a client's needs and working towards that vision.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-4">
								<div class="card-title mb-4">
									<img class="icons" src="./images/users.svg" alt="" />
									<p class="justify-content-center">Consulting</p>
									<div class="card-body mb-4">
										<p class="card-text text-center">Understanding that sometimes a client will simply need advice or to consult on an idea or vision, I make myself available for consulting services as well. If you need ideas for a website re-design, if there is a particular problem that you're having difficulty solving, or if you simply need to discuss strategy with a developer, my goal is to see you and/or your business set up for success in whatever way is helpful to you.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/SERVICES SECTION-->

			<!--PORTFOLIO-->
			<!--PORTFOLIO SECTION HEADER-->
			<section id="portfolio" class="container-fluid text-md-center font">
				<div class="font album py-2 bg-none">
					<div class="container-fluid justify-content-center text-center">
						<div class="row">
							<div class="col-md-12 justify-content-center py-4">
								<h4>Portfolio</h4>
							</div>
							<!--/PORTFOLIO SECTION HEADER-->

							<div class="col-md-4 mb-2">
								<div class="card-title mb-3 justify-content-center">
									<a href="https://bootcamp-coders.cnm.edu/~ecorsi/bootstrap4-challenge/landing-page.html" target="_blank"><img class="portfolio-img mg-fluid d-block mx-auto img-hover" src="./images/bootstrap.jpg" alt="" /></a>
									<p class="justify-content-center">Bootstrap 4 Draft</p>
									<div class="card-body mb-4">
										<p class="card-text text-center">Not only websites are under development - so are my skills! Here is a project in which I utilized Bootstrap 4 as the primary framework for structure and styling. In only two days, I was able to create this rough draft of a page with a solid structure and basic styling. I've really grown to enjoy working with Bootstrap 4!</p>
										<br /><small class="text-muted"><a href="https://github.com/HalfMortise/bootstrap4-challenge" target="_blank">See the Code</a></small>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-4">
								<div class="card-title mb-4">
									<a href="#" target="_blank"><img class="portfolio-img d-block mx-auto" src="./images/sign-in-modal.jpg" alt="" /></a>
									<p class="justify-content-center">NM Outdoors</p>
									<div class="card-body mb-4">
										<p class="card-text text-center">I collaborated on a team with three others to build this web application for the outdoor enthusiasts of New Mexico. With a complex back-end so that we could bring in all the data possible, and with an Angular build for the front-end, we completed this masterpiece in only 8 weeks! Be sure to visit NM Outdoors next time you're looking for a campground!</p>
										<small class="text-muted"><a href="https://github.com/HalfMortise/nm-outdoors" target="_blank">See the Code</a></small>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-4">
								<div class="card-title mb-4">
									<img class="portfolio-img d-block mx-auto" src="./images/placeholder.jpg" alt="" />
									<p class="justify-content-center">Business-Card Profile</p>
									<div class="card-body mb-4">
										<p class="card-text text-center">Catch a sneak peek at a project under development! Like halfmortise.com, this project will be a business card-type static profile page for an individual to utilize as either an alternative or a supplement to LinkedIn.com. This will be easily customized to fit an individual's preferences, and will offer visitors a contact form, resume, and portfolio.</p>
										<small class="text-muted"><a href="https://github.com/HalfMortise/business-card-webpage" target="_blank">See the Code</a></small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/PORTFOLIO SECTION-->
		</main>

		<!--CONTACT Section-->
		<!--CONTACT SECTION HEADER-->
		<section id="contact" class="container-fluid font justify-content-center align-items-center text-center mb-3">
			<div class="row py-5 text-md-center">
				<div class="col-md-12">
					<h4>
						Contact
					</h4>
					<p class="contact-paragraph">If you like would to learn more about my services or engage in discussion about your business needs, please don't hesitate to get in touch by contacting me via the form below.</p>
					<br />
					<p class="contact-paragraph">I look forward to hearing from you!</p>
				</div>
			</div>

			<!-- CONTACT -->
			<!--PHP-driven custom contact form using Swiftmailer, jQuery Validate, and Google reCAPTCHA-->
			<div class="contact-form container-fluid mb-4">
				<form id="contact-form" method="post" action="php/mailer.php">
					<div class="controls">
						<div class="form-group">
							<label for="contactName">Name<span class="text-danger"></span></label>
							<div class="input-group">
								<input type="text" name="contactName" class="form-input-text form-control" required="required" placeholder="">
							</div>
						</div>

						<div class="form-group">
							<label for="contactEmail">Email<span class="text-danger"></span></label>
							<div class="input-group">
								<input type="email" name="contactEmail" class="form-input-text form-control" required="required" placeholder="">
							</div>
						</div>

						<div class="form-group">
							<label for="contactPhone">Phone<span class="text-danger"></span></label>
							<div class="input-group">
								<input type="tel" name="contactPhone" class="form-input-text form-control" onkeydown="return checkPhoneKey(event.key)" placeholder="">
							</div>
						</div>

						<div class="form-group">
							<label for="contactCompany">Company (optional)<span class="text-danger"></span></label>
							<div class="input-group">
								<input type="text" name="contactCompany" class="form-input-text form-control" placeholder="">
							</div>
						</div>

						<div class="form-group">
							<label for="contactMessage">Message<span class="text-danger"></span></label>
							<div class="input-group">
								<textarea name="contactMessage" class="form-input-text form-control" rows="6" maxlength="2000" required="required" placeholder=""></textarea>
							</div>
						</div>

						<!-- Google reCAPTCHA tool -->
						<div class="g-recaptcha" data-sitekey="6LcMZG0UAAAAAMXOA5mMqUKC0N_L4YWgeHCMolhU"></div>

						<div>
							<button type="reset" class="btn btn-sm btn-outline-secondary mb-2">Reset</button>
							<button type="submit" class="btn btn-sm btn-outline-secondary mb-2">Send Message</button>
						</div>
					</div>
				</form>

				<!--empty area for form error/success output-->
				<div class="row">
					<div class="col-xs-12">
						<div id="output-area"></div>
					</div>
				</div>
				<!--end empty area for form error/success output-->

			</div>
		</section>

		<!--FOOTER Section-->
		<section id="footer" class="font-footer mt-5">
			<footer class="bg-dark text-light text-center py-4">
				<div class="container">
					<p>&copy;&nbsp;<a href="https://www.github.com/halfmortise">Half Mortise</a></p>
				</div>
			</footer>
		</section>
	</body>
</html>