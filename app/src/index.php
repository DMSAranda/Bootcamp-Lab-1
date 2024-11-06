<!DOCTYPE html>
<html>
   
<head>
    <title>Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/styles.css">
</head>
<body>  
<div class="row">
    <div class="col-sm-5 mt-3">
        <div class="card cent">
            <h5 class="card-header">LIBRARY</h5>
            <div class="card-body">
                <div class="container">
                    <form method="post" action="index.php" class="row g-3 mt-3"> 
                        <div class="col-12">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" ><br><br>
                        </div>
                        <div class="col-12">
                            <label for="author">Author:</label>
                            <input type="text" class="form-control" id="author" name="author" ><br><br>
                        </div>
                        <div class="col-12">
                            <label for="editor">Editor:</label>
                            <input type="text" class="form-control" id="editor" name="editor" ><br><br>
                        </div>
                        <div class="col-12">
                            <label for="year">Year:</label>
                            <input type="number" class="form-control" id="year" name="year" ><br><br>
                        </div>
                        <div class="col-12 mb-3">
                            <select class="form-select" name="menu" id="selector">
                                <option value="book">Book</option>
                                <option value="magazine">Magazine</option>
                            </select>
                        </div>
                        <div class="col-12" id="extra">    
                            
                        </div>
                        
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>    
  
</body>
<script src="js/functions.js"></script>
</html>


<?php

require_once('./class/book.php');
require_once('./class/magazine.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        $author = isset($_POST['author']) ? $_POST['author'] : '';
        $editor = isset($_POST['editor']) ? $_POST['editor'] : '';
        $year = isset($_POST['year']) ? $_POST['year'] : '';
        $pages = isset($_POST['pages']) ? $_POST['pages'] : '';
        $edition = isset($_POST['edition']) ? $_POST['edition'] : '';
        
        $articles = [];

        if($title != '' && $author != '' && $editor != '' && $year != '' && $pages != '') {
            $book = new Book($title, $author, $editor, $year, $pages);
            $articles []= $book;
        }

        if($title != '' && $author != '' && $editor != '' && $year != '' && $edition != '') {
            $magazine = new Magazine($title, $author, $editor, $year, $edition);
            $articles []= $magazine;
        }

        
       /*   foreach ($articles as $key => $article) {
          echo "Title: {$article->getTitle()} <br/>";
            echo "Author: {$article->getAuthor()} <br/>";
            echo "Editor: {$article->getEditor()} <br/>";
            echo "Year: {$article->getYear()} <br/>";

            if (is_a($article, 'Book')) {
                echo "Pages: {$article->getPages()}<br/>";
            }
            if (is_a($article, 'Magazine')) {
                echo "Edition: {$article->getEdition()}<br/>";
            }
        */
            $html = "<div class='col-sm-5 mt-3'>
                        <div class='card cent'>
                            <h5 class='card-header'>RESULT</h5>
                            <div class='card-body'>
                                <div class='container'>
                                    <div class='row g-3 mt-3'>
                                        <div class='col-12'>
                                            <label for='title'>Title: </label>
                                            <p>{$article->getTitle()}</p>
                                        </div>
                                        <div class='col-12'>
                                            <label for='author'>Author:</label>
                                            <p>{$article->getAuthor()}</p>
                                        </div>
                                        <div class='col-12'>
                                            <label for='editor'>Editor:</label>
                                            <p>{$article->getEditor()}</p>
                                        </div>
                                        <div class='col-12'>
                                            <label for='year'>Year:</label>
                                            <p>{$article->getYear()}</p>
                                        </div>
                                        <div class='col-12'>";
                                            if (is_a($article, 'Book')) {
                            $html.=             "<label for='pages'>Pages:</label>
                                                 <p>{$article->getPages()}</p>";
                                            }              
                                            if (is_a($article, 'Magazine')) {
                            $html.=             "<label for='edition'>Edition:</label>
                                                <p>{$article->getYear()}</p>";
                                            }         
                            $html.=     "</div>                       
                                    </div>           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";

            echo $html;
            

    }