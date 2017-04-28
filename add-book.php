<html>
<head>
   <meta charset="utf-8"/>
     <title>Add new book</title>
</head>
<body>
<h1>New entry</h1>
<?php

 $db = new SQLite3('Books.db');
 
 $title=$_POST['title'];
 $ISBN=$_POST['ISBN'];
 $author=$_POST['author'];
 $year=$_POST['year'];
 $publisher=$_POST['publisher'];
 $insert = 'INSERT INTO BOOKS ("ISBN", "Title", "Author", "Year-Of-Publication", "Publisher" ) '.
    'VALUES (\''. $ISBN .'\',\''. $title .'\',\''. $author .'\',\''. $year .'\',\''. $publisher .'\')';

 $db->exec($insert);
 echo "The book was successfully added";

?>
<a href="Homepage.php">
	<button>Return to Homepage</button>
</a>

<a href="add-book.html">
	<button>Add a new book</button>
</a>
</body>
</html>