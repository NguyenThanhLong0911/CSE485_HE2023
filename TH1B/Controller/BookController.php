<?php
require_once 'model/Book.php';
require_once 'model/BookList.php';

class BookController {
    private $bookList;

    public function __construct() {
        $this->bookList = new BookList();
    }

    public function index() {
        $books = $this->bookList->getAllBooks();
        require 'view/book-list.php';
    }

    public function addBook() {
        $book1 = new Book("PHP 7 Programming", "David Powers", "Peachpit Press", 2016, "9780134291253", array("Introduction to PHP", "Working with Variables"));
        $book2 = new Book("Learning PHP, MySQL & JavaScript", "Robin Nixon", "O'Reilly Media, Inc.", 2018, "9781491978917", array("The PHP Language", "PHP & MySQL"));
        $book3 = new Book("JavaScript: The Definitive Guide", "David Flanagan", "O'Reilly Media, Inc.", 2011, "9780596805531", array("Introduction to JavaScript", "Working with Objects"));

        $this->bookList->addBook($book1);
        $this->bookList->addBook($book2);
        $this->bookList->addBook($book3);

       $this->index();
    }

    public function sortBooks() {
        $sortType = isset($_GET['sort']) ? $_GET['sort'] : 'author';
        $book1 = new Book("PHP 7 Programming", "David Powers", "Peachpit Press", 2016, "9780134291253", array("Introduction to PHP", "Working with Variables"));
        $book2 = new Book("Learning PHP, MySQL & JavaScript", "Robin Nixon", "O'Reilly Media, Inc.", 2018, "9781491978917", array("The PHP Language", "PHP & MySQL"));
        $book3 = new Book("JavaScript: The Definitive Guide", "David Flanagan", "O'Reilly Media, Inc.", 2011, "9780596805531", array("Introduction to JavaScript", "Working with Objects"));

        $this->bookList->addBook($book1);
        $this->bookList->addBook($book2);
        $this->bookList->addBook($book3);

        switch ($sortType) {
            case 'author':
                $this->bookList->sortBooksByAuthor();
                break;
            case 'title':
                $this->bookList->sortBooksByTitle();
                break;
            case 'year':
                $this->bookList->sortBooksByPublicationYear();
                break;
            default:
                break;
        }

        $this->index();
    }
}
?>
