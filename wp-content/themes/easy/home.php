<?php /* Template Name: hompe page */ ?>
<?php get_header() ?>

<!-- main -->
	<div id="main">
		<!-- header -->
		<div id="header" style="background: url(images/1920x1080.jpg) no-repeat center; background-size: cover; background-position: center;">
		<!-- particles -->
		<div id="particles" class="particles"></div>

			<div class="container">
				<div class="row">

					<div class="header-wrapper">
						<div class="header-content">

							<div class="hmb-wrapper">
								<span>
									<span id="menu">
									  <a id="nav-open" class="nav-button">
									    <span class="nav-button-part nav-button-part-1"></span>
									    <span class="nav-button-part nav-button-part-2"></span>
									    <span class="nav-button-part nav-button-part-3"></span>
									  </a>
									</span>
								</span>
							</div>

							<div class="header-main">
								<div class="header-name">I'm James Vincent</div>

								<div class="hello color-white">Hello</div>

								<div class="header-text">Website developer with more than <br><span>six years </span>of experience in <span>Html5/Css3</span><br> and <span>Wordpress/PHP</span></div>

							</div>

							<div class="rotate-text rotate-2"><a href="#gallery" class="scroll-sub">over 6 years experience</a></div>

							<a href="#gallery" id="action" class="scroll-sub"></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- gallery -->
		<div class="gallery" id="gallery">
			<div class="container">
				<div class="row center-block">

					<div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
						<h2>Work hard. Dream big.</h2>
						<p class="title-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Iste ratione molestias magni.</p>
						<p class="text-spacing">It’s not a job, It’s a life.</p>
					</div>

					<div class="gallery-wrapper	col-sm-12 col-xs-12">
						<!-- portfolio-row-1 -->
						<div class="portfolio-block">
							<ul class="work-list">
								<li><a href="project.html">
									<img src="images/380x380.jpg" alt="">
									<div class="gallery-content">
										<div class="project-title">Project Title</div>
										<div class="project-client">Client</div>
									</div>
								</a></li>
								<li><a href="project.html">
									<img src="images/380x380.jpg" alt="">
									<div class="gallery-content">
										<div class="project-title">Project Title</div>
										<div class="project-client">Client</div>
									</div>
								</a></li>
								<li><a href="project.html">
									<img src="images/380x380.jpg" alt="">
									<div class="gallery-content">
										<div class="project-title">Project Title</div>
										<div class="project-client">Client</div>
									</div>
								</a></li>
							</ul>
						</div>

						<!-- portfolio-row-2 -->
						<div class="portfolio-block ">
							<ul class="work-list">
								<li><a href="project.html">
									<img src="images/380x380.jpg" alt="">
									<div class="gallery-content">
										<div class="project-title">Project Title</div>
										<div class="project-client">Client</div>
									</div>
								</a></li>
								<li><a href="project.html">
									<img src="images/380x380.jpg" alt="">
									<div class="gallery-content">
										<div class="project-title">Project Title</div>
										<div class="project-client">Client</div>
									</div>
								</a></li>
								<li><a href="project.html">
									<img src="images/380x380.jpg" alt="">
									<div class="gallery-content">
										<div class="project-title">Project Title</div>
										<div class="project-client">Client</div>
									</div>
								</a></li>
							</ul>
						</div>
					</div>

					<div class="col-sm-12">
						<a href="portfolio-lightbox-3.html" class="see-more">See more <i class="fa fa-long-arrow-right"></i></a>
					</div>

				</div>
			</div>
		</div>

		<!-- counters -->
		<div class="counters">
			<div class="container">
				<div class="row">

	                <div class="counter col-md-3 col-sm-6 col-xs-6">
	                    <span class="counter-value" data-to="182" data-speed="7000"></span>
	                    <span class="counter-text">Happy Clients</span>
	                </div>

	                <div class="counter col-md-3 col-sm-6 col-xs-6">
	                    <span class="counter-value" data-to="234" data-speed="7000"></span>
	                    <span class="counter-text">Project Completed</span>
	                </div>

	                <div class="counter col-md-3 col-sm-6 col-xs-6">
	                    <span class="counter-value" data-to="156" data-speed="7000"></span>
	                    <span class="counter-text">Award Winning</span>
	                </div>

	                <div class="counter col-md-3 col-sm-6 col-xs-6">
	                    <span class="counter-value" data-to="353" data-speed="7000"></span>
	                    <span class="counter-text">Cups of Coffee</span>
	                </div>

				</div>
			</div>
		</div>

		<!-- contact form -->
		<div class="contact-form demo-2 padded-top-middle padded-bottom-middle" id="contactform">
			<div class="container">
				<div class="row center-block">

					<div class="col-sm-12 col-md-6 col-md-offset-3">
						<h2>contacts</h2>
						<p class="title-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</p>
					</div>

				</div>

				<div class="row">
					<div class="col-sm-12 col-md-7">
						<form id="contact-form" name="contact" action="javascript:void(0)" method="post" novalidate="novalidate">
							<fieldset class="title-font">

								<div class="row">
									<div class="col-sm-12">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>

									<div class="col-sm-12">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
								</div>

								<label for="message">Message</label>
								<textarea name="message" id="message"></textarea>
								<input id="contact-submit" type="submit" name="submit" value="Send Email" class="title-font">
							</fieldset>
							<div id="success-alert"></div>
						</form>
					</div>
					<div class="form-text col-sm-12 col-md-5">
						<h4>Let's get to work!</h4>
						<h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</h3>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>

						<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>

						<ul class="form-info">
							<li><a href="mailto:work@jamesvincent.me" class="white-link">work@jamesvincent.me</a></li>
							<li><a href="tel:+9145632973" class="white-link">+9145632973</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
<?php get_footer() ?>
