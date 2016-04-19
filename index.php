<?php
	require('include/header.php');
?>

<body>
<div id="wrapper">

		<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<h3>Portfolio</h3>
				</li>
				<li>
					<a href="#">Featured</a>
				</li>
				<li>
					<a href="#">Projects</a>
				</li>
				<li>
					<a href="#">Profile</a>
				</li>
				<li>
					<a href="#">Writing</a>
				</li>
				<li>
					<a href="#">Contact</a>
				</li>
			</ul>
		</div>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">

			<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>

			<div class="container-fluid">


				<div class="row full-images">
					<div class="col-lg-12">
						<a href="#"><img class="img-fluid" src="http://placehold.it/1200x876" alt="logo"></a>
						<a href="#"><img class="img-fluid" src="http://placehold.it/1200x876" alt="logo"></a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="jumbotron">
							<h1>Bootstrap Tutorial</h1>
							<p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
						</div>
					</div>
				</div>

				<div class="row">

					<div class="col-lg-12 textrow">

						<div class="page-header">
							<h1>Example Page Header</h1>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						<div class="jumbotron">
							<h1>Bootstrap Tutorial</h1>
							<p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
						</div>

						<h1>Blockquotes</h1>
						<p>The blockquote element is used to present content from another source:</p>
						<blockquote>
							<p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
						<footer>From WWF's website</footer>
						</blockquote>

						<a href="#"><img class="img-fluid" src="http://placehold.it/700x400" alt="logo"></a>

					</div>

				<hr>

				<footer class="site-footer">
					<p class="pull-right">
						<a href="#">top</a>
					</p>
					<p class="pull-left">
    					<small>
							<a href="#">link</a> <bR>
							<a href="#">link</a><bR>
							<a  href="#">link</a>
						</small>
					</p>
        
					<center><p>Designed and developted by me</p></center>

				</footer>

					
				</div>
			</div>
		</div>
		<!-- /#page-content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

	<script>
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});
	</script>

</body>
</html>
