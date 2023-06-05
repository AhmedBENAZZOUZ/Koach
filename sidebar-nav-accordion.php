<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="htmlcss bootstrap aside menu, vertical, sidebar nav menu CSS examples" />
	<meta name="description" content="Bootstrap 5 sidebar navigation menu example" />

	<title>Demo - Bootstrap 5 sidebar vertical menu sample. html code example </title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
		crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
		crossorigin="anonymous"></script>

	<!-- ======= Icons used for dropdown (you can use your own) ======== -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

	<style type="text/css">
		.sidebar li .submenu {
			list-style: none;
			margin: 0;
			padding: 0;
			padding-left: 1rem;
			padding-right: 1rem;
		}

		.sidebar .nav-link {
			font-weight: 500;
			color: var(--bs-dark);
		}

		.sidebar .nav-link:hover {
			color: var(--bs-primary);
		}
	</style>


</head>

<body class="bg-light">

	<header class="section-header py-3">
		<div class="container">
			<h2>Demo page </h2>
		</div>
	</header> <!-- section-header.// -->

	<div class="container">

		<section class="section-content py-3">
			<div class="row">
				<aside class="col-lg-3">
					<!-- ============= COMPONENT ============== -->
					<nav class="sidebar card py-2 mb-4">
						<ul class="nav flex-column" id="nav_accordion">
							<li class="nav-item">
								<a class="nav-link" href="#"> Link name </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item1" href="#">
									Submenu links <i class="bi small bi-caret-down-fill"></i> </a>
								<ul id="menu_item1" class="submenu collapse" data-bs-parent="#nav_accordion">
									<li><a class="nav-link" href="#">Submenu item 1 </a></li>
									<li><a class="nav-link" href="#">Submenu item 2 </a></li>
									<li><a class="nav-link" href="#">Submenu item 3 </a> </li>
								</ul>

							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item2" href="#">
									More menus <i class="bi small bi-caret-down-fill"></i> </a>
								<ul id="menu_item2" class="submenu collapse" data-bs-parent="#nav_accordion">
									<li><a class="nav-link" href="#">Submenu item 4 </a></li>
									<li><a class="nav-link" href="#">Submenu item 5 </a></li>
									<li><a class="nav-link" href="#">Submenu item 6 </a></li>
									<li><a class="nav-link" href="#">Submenu item 6 </a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"> Another page </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"> Demo link </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"> Menu item </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"> Something </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"> Other link </a>
							</li>
						</ul>
					</nav>
					<!-- ============= COMPONENT END// ============== -->
				</aside>
				<main class="col-lg-9">

					<h6>Demo for sidebar nav menu links. <br> Based on Bootstrap 5 CSS framework. </h6>
					<p>For this demo page you should connect to the internet to receive files from CDN like Bootstrap5
						CSS, Bootstrap5 JS</p>

					<p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit
						amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

					<a href="https://bootstrap-menu.com/detail-sidebar-nav-collapse.html" class="btn btn-success">
						&laquo Back to tutorial or Download code</a>

				</main>
			</div>
		</section>

	</div><!-- container //  -->

</body>

</html>