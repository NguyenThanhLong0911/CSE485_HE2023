<?php
class Book implements IBook {
    private $title;
    private $author;
    private $publisher;
    private $year;
    private $isbn;
    private $chapters;

    public function __construct($title, $author, $publisher, $year, $isbn, $chapters) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->year = $year;
        $this->isbn = $isbn;
        $this->chapters = $chapters;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getPublisher() {
        return $this->publisher;
    }

    public function setPublisher($publisher) {
        $this->publisher = $publisher;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getISBN() {
        return $this->isbn;
    }

    public function setISBN($isbn) {
        $this->isbn = $isbn;
    }

    public function getChapters() {
        return $this->chapters;
    }

    public function setChapters($chapters) {
        $this->chapters = $chapters;
    }
}