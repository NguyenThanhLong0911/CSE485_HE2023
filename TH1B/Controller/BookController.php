<?php
class BookController {
    private $books;

    public function __construct() {
        $this->books = array();
    }

    public function addBook($book) {
        array_push($this->books, $book);
    }

    public function removeBook($book) {
        $index = array_search($book, $this->books);
        if ($index !== false) {
            array_splice($this->books, $index, 1);
        }
    }

    public function updateBook($oldBook, $newBook) {
        $index = array_search($oldBook, $this->books);
        if ($index !== false) {
            $this->books[$index] = $newBook;
        }
    }

    public function getBooks() {
        return $this->books;
    }

    public function sortBooksByAuthor() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getAuthor(), $b->getAuthor());
        });
    }

    public function sortBooksByTitle() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getTitle(), $b->getTitle());
        });
    }

    public function sortBooksByYear() {
        usort($this->books, function($a, $b) {
            return $a->getYear() - $b->getYear();
        });
    }
}