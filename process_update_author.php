<?php
$conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');

settype($_POST['id'], 'integer');
$filtered = array(
	'id'=>mysqli_real_escape_string($conn, $_POST['id']),
	'name'=>mysqli_real_escape_string($conn, $_POST['name']),
	'profile'=>mysqli_real_escape_string($conn, $_POST['profile'])
);

$sql = "
	update author
		set
			name = '{$filtered['name']}',
			profile = '{$filtered['profile']}'
		where 
			id = {$filtered['id']}
";
mysqli_query($conn, $sql);
header('Location: author.php?id='.$filtered['id']);
?>