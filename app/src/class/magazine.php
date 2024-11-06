<?php
require_once('article.php');

class Magazine extends Article {

    private $edition;

    public function __construct($title, $author, $editor, $year, $edition)
    {
        parent::__construct($title, $author, $editor, $year);
        $this->edition = $edition;
    }

    public function getEdition() {
        return $this->edition;
    }
}