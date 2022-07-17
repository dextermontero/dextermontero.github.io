<?php
require_once("include/initialize.php");
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Port Folio</title>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="" name="description">
		<meta content="" name="keywords">
		<?php include('./include/assets/header.php'); ?>
	</head>

	<body>
		<header id="header">
			<div class="d-flex flex-column">
				<div class="profile-details">
					<img src="<?php echo web_root; ?>img/profile/profile-img.jpg" alt="Display Profile" class="img-fluid rounded-circle">
					<h2 class="text-light"><a href="">Dexter Montero</a></h2>
				</div>
				<hr>
				<div id="navbar" class="nav-menu navbar">
					<ul>
						<li><a href="#home" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
						<li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
						<li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
						<li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
					</ul>				
				</div>
			</div>
		</header>
		<section id="home" class="home d-flex flex-column justify-content-center align-items-center">
			<div class="hero-container" data-aos="fade-in">
				<h1></h1>
				<p><span class="typed" data-typed-items="Developer, Freelancer, Gamer"></span></p>
			</div>
		</section>
		<main id="main">		
			<section id="about" class="about">
				<div class="container">
					<div class="section-title-body">
						<h2>About</h2>
					</div>
					<div class="row">
						<div class="col-lg-12 col-12 pt-lg-0 content">
							<h3>Web Developer</h3>
							<div class="row">
								<div class="col-lg-6 col-12"  data-aos="fade-right">
									<ul>
										<li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>November 9, 19xx</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>2x</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+63 905 378x xxx</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Quezon City, Philippines</span></li>
									</ul>									
								</div>
								<div class="col-lg-6 col-12"  data-aos="fade-left">
									<ul>
										<li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>1 May 1995</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>dexter.montero09@gmail.com</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
									</ul>									
								</div>
							</div>
						</div>
					</div>
					
					<div class="section-title-body mt-5">
						<h2>Facts</h2>
					</div>
					<div class="row no-gutters">

						<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
							<div class="count-box">
								<i class="bi bi-emoji-smile"></i>
								<span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
								<p><strong>Happy Clients</strong> consequuntur quae</p>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
							<div class="count-box">
								<i class="bi bi-journal-richtext"></i>
								<span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
								<p><strong>Projects</strong> adipisci atque cum quia aut</p>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
							<div class="count-box">
								<i class="bi bi-headset"></i>
								<span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
								<p><strong>Hours Of Support</strong> aut commodi quaerat</p>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
							<div class="count-box">
								<i class="bi bi-people"></i>
								<span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
								<p><strong>Hard Workers</strong> rerum asperiores dolor</p>
							</div>
						</div>
					</div>
				</div>
			</section>	

			<section id="skills" class="skills section-bg">
				<div class="container">
					<div class="section-title">
						<h2>Skills</h2>
					</div>
					<div class="row skills-content">
						<div class="col-lg-6" data-aos="fade-up">
							<div class="progress">
								<span class="skill">HTML <i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

							<div class="progress">
								<span class="skill">CSS <i class="val">90%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

							<div class="progress">
								<span class="skill">JavaScript <i class="val">75%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
							<div class="progress">
								<span class="skill">PHP <i class="val">80%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="progress">
								<span class="skill">WordPress/CMS <i class="val">90%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="progress">
								<span class="skill">Photoshop <i class="val">55%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section id="resume" class="resume">
				<div class="container">
					<div class="section-title-body">
						<h2>Resume</h2>
					</div>
				</div>
			</section>		
			<section id="portfolio" class="portfolio">
				<div class="container">
					<div class="section-title-body">
						<h2>Portfolio</h2>
					</div>
				</div>
			</section>
		</main>
		<footer id="footer">
			asdas
		</footer>
		<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
		<?php include('./include/assets/footer.php'); ?>
		<script>
		window.addEventListener('load', () => {
			AOS.init({
				duration: 1000,
				easing: 'ease-in-out',
				once: false,
				mirror: false
			})
		});		
		</script>
	</body>
</html>

