<?php
$conn = mysqli_connect("localhost", "root", "111111", "opentutorials");
$spl = "
	INSERT INTO topic (
		title,
		description
		created
	) VALUE (
		'MySQL',
		'MySQL is ..',
		NOW()
		);";
$result = mysqli_query($conn, $sql);
if($result === false){
	echo mysql_error($conn);
}
?>