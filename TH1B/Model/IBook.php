<?php

interface IBook
{
    public function getTitle();
    public function setTitle($title);
    public function getAuthor();
    public function setAuthor($author);
    public function getPublisher();
    public function setPublisher($publisher);
    public function getYear();
    public function setYear($year);
    public function getISBN();
    public function setISBN($isbn);
    public function getChapters();
    public function setChapters($chapters);
}