<?php
    $books = [
        [
            "name" => "book1",
            "author" => "Author1",
            "year" => 2020,
            "genre" => "Genre1"
        ],
        [
            "name" => "book2",
            "author" => "Author2",
            "year" => 2020,
            "genre" => "Genre2"
        ],
        [
            "name" => "book3",
            "author" => "Author3",
            "year" => 2020,
            "genre" => "Genre3"
        ]
    ];


    function filterByAuthor($books, $author){
    return array_filter($books, function($book) use ($author) {
        return $book['author'] === $author;
    });
    }

    $filterBooks = filterByAuthor($books,'Author1'  );

  
    require 'index.view.php';
?>