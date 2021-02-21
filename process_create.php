<?php
$conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');

$filtered = array(
	'title'=>mysqli_real_escape_string($conn, $_POST['title']),
	'description'=>mysqli_real_escape_string($conn, $_POST['description']),
	'author_id'=>mysqli_real_escape_string($conn, $_POST['author_id'])
);

$sql = "
	insert into topic
		(title, description, created, author_id)
		values(
			'{$filtered['title']}',
			'{$filtered['description']}',
			now(),
			{$filtered['author_id']}
		)
";
mysqli_query($conn, $sql);
?>
<a href="index.php">go to index page</a>