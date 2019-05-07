<?php
include "templates/header.php";

// $page_url = "";
// if(isset($_GET['page'])) {
// 	$page_url = $_GET['page'];
// }

// echo "<img src=\"images/" . $page_info['image'] . "\">";

foreach($page_infos as $page) {
?>
	<div id="<?php echo $page['url']; ?>" class="section">
		<h2><?php echo $page['title']; ?></h2>
<?php
	include "pages/" . $page['content'];
	echo "</div>";
}


include "templates/footer.php";
?>