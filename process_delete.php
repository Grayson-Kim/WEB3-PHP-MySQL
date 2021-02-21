<?php
$conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');

settype($_POST['id'], 'integer');
$filtered = array(
	'id'=>mysqli_real_escape_string($conn, $_POST['id'])
);

$sql = "
	delete
		from topic
		where id = {$filtered['id']}
";
mysqli_query($conn, $sql);
?>
<a href="index.php">go to index page</a>