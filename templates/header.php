<?php
$page_infos = json_decode(file_get_contents("pages_info.json"), true);
define("SITE_URL", "http://" . $_SERVER['SERVER_NAME']);

function yearsSince($then) {
	$then = date('Ymd', strtotime($then));
	$diff = date('Ymd') - $then;
	return substr($diff, 0, -4);
}

?>

<!DOCTYPE html>

<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
	<title>Elizabeth Tarr</title>
</head>


<style>
<?php include "base.css"; ?>
</style>

<script>
<?php include "script.js"; ?>
</script>

<body>
	<!-- Navigation -->
	<nav id="navbar" class="navbar" role="navigation">
		<span class="navbutton" class="icon" onclick="navbutton()"></span>
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
						echo "<li><a onclick=\"navigated()\" href=\"#" . $page['url'] . "\"><span>" . $page['navbar'] . "</span></a></li>";
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
