<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Revision</title>
</head>

<body>
    <h1>
        Recommended books for PHP Developers

    </h1>

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

    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book["name"] ?>  : year <?= $book['year']?></li>
        <?php endforeach; ?>
    </ul>

    </ul>
</body>

</html>