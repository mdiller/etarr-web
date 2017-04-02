<?php
include "templates/header.php";

$page_url = "";
if(isset($_GET['page'])) {
	$page_url = $_GET['page'];
}

$page_info = null;
foreach($page_infos as $page) {
	if($page_url == $page['url']) {
		$page_info = $page;
	}
}
if($page_info == null) {
	echo "Page not found";
	header("HTTP/1.0 404 Not Found");
	die();
}

echo "<img src=\"images/" . $page_info['image'] . "\">";

include "pages/" . $page_info['content'];

include "templates/footer.php";
?>