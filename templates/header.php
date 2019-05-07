<?php
$page_infos = json_decode(file_get_contents("pages_info.json"), true);
define("SITE_URL", "http://" . $_SERVER['SERVER_NAME']);

?>

<!DOCTYPE html>

<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
	<title>Elizabeth Tarr</title>

	<!-- Custom CSS -->
	<link href="base.css" rel="stylesheet">
</head>

<body>
	<!-- Navigation -->
	<nav class="navbar" role="navigation">
		<div>
			<div class="navdiv">
				<ul>
					<?php
					$first = true;
					foreach($page_infos as $page){
						if (!$first) {
							echo "<li>&#8226;</li>";
						}
						$first = false;
						echo "<li><a href=\"#" . $page['url'] . "\">" . $page['title'] . "</a></li>";

					}
					?>
					<li>
						<a href="./contactinfo.html"></a>
					</li>
				</ul>
			</div>
		</div>
		<!-- /.navbar-collapse -->
	</nav>

	<!-- Page Content -->
	<div id="content">
