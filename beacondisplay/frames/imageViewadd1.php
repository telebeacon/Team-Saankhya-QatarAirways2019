<?php
	$conn = mysql_connect("localhost", "root", "raghav33");
    mysql_select_db("ioneeds") or die(mysql_error());
    if(isset($_GET['image_id'])) {
        $sql = "SELECT imageType1,imageData1 FROM output_images WHERE imageId=" . $_GET['image_id'];
		$result = mysql_query("$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
		$row = mysql_fetch_array($result);
		header("Content-type: " . $row["imageType1"]);
        echo $row["imageData1"];
	}
	mysql_close($conn);
?>