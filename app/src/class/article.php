<?php

require_once('./interfaces/actions.php');

class Article implements Actions {
    private $title;
    private $author;
    private $editor;
    private $year;

    public function __construct($title,  $author, $editor, $year)
    {
        $this->title = $title;
        $this->author = $author;
        $this->editor = $editor;
        $this->year = $year;
    }

    public function getTitle(){

        return $this->title;
    }


    public function getAuthor(){

        return $this->author;
    }

    public function getEditor(){

        return $this->editor;
    }
    public function getYear(){

        return $this->year;
    }


}
    
