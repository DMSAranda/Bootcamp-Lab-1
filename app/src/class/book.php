<?php
require_once('article.php');

class Book extends Article {

    private $pages;

    public function __construct($title, $author, $editor, $year, $pages)
    {
        parent::__construct($title, $author, $editor, $year);
        $this->pages = $pages;
    }

    public function getPages() {
        return $this->pages;
    }
}