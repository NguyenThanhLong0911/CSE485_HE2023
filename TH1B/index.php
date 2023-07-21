<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="index.php">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title"><br>

    <label for="author">Author:</label>
    <input type="text" id="author" name="author"><br>

    <label for="publisher">Publisher:</label>
    <input type="text" id="publisher" name="publisher"><br>

    <label for="year">Year:</label>
    <input type="text" id="year" name="year"><br>

    <label for="isbn">ISBN:</label>
    <input type="text" id="isbn" name="isbn"><br>

    <label for="chapters">Chapters:</label>
    <textarea id="chapters" name="chapters"></textarea><br>

    <input type="submit" value="Add Book">
</form>

</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $year = $_POST['year'];
    $isbn = $_POST['isbn'];
    $chapters = explode("\n", $_POST['chapters']);

    $book = new Book($title, $author, $publisher, $year, $isbn, $chapters);
    $bookController->addBook($book);

    // Redirect to homepage or display success message
}
foreach ($bookController->getBooks() as $book) {
    echo "<p>Title: " . $book->getTitle() . "</p>";
    echo "<p>Author: " . $book->getAuthor() . "</p>";
    echo "<p>Publisher: " . $book->getPublisher() . "</p>";
    echo "<p>Year: " . $book->getYear() . "</p>";
    echo "<p>ISBN: " . $book->getISBN() . "</p>";
    echo "<p>Chapters:</p>";
    echo "<ul>";
    foreach ($book->getChapters() as $chapter) {
        echo "<li>" . $chapter . "</li>";
    }
    echo "</ul>";
}

if (isset($_GET['sort'])) {
    $sort = $_GET['sort'];
    if ($sort == 'author') {
        $bookList->sortBooksByAuthor();
    } else if ($sort == 'title') {
        $bookList->sortBooksByTitle();
    } else if ($sort == 'year') {
        $bookList->sortBooksByYear();
    }
}

// Display sorted list of books
foreach ($bookController->getBooks() as $book) {
    // Display book information
}
?>