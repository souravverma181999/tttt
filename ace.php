<!DOCTYPE html>
<html>
	<head>
		<title>ace</title>
	</head>
	<body>
		<h2>XML with PHP</h2>
	</body>
		<?php
		$xml=simplexml_load_file("ace.xml") or die("Error: Cannot create object");
		foreach($xml->children() as $book) {
		echo "<b>" . $book->title . "</b>, ". "<br>";
		echo $book->author . ", ". "<br>";
		echo $book->year . ", ". "<br>";
		echo $book->price . "<br>";
		}
		?>
</html>