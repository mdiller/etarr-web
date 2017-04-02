<?php
$page_infos = json_decode(file_get_contents("pages_info.json"), true);
define("SITE_URL", "http://" . $_SERVER['SERVER_NAME']);

?>

<!DOCTYPE html>

<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
	<title>Elizabeth Tarr</title>


	<!-- Bootstrap Core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="base.css" rel="stylesheet">
	<!-- Bootstrap Core JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav">
					<?php
					foreach($page_infos as $page){
						echo "<li><a href=\"" . SITE_URL . "/" . $page['url'] . "\">" . $page['sidebar'] . "</a></li>";
					}
					?>
					<li>
						<a href="./contactinfo.html"></a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<!-- Page Content -->
	<div class="container">
