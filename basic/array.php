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
     $books = ["book1","book2","book3","book4","book5"];

     ?>

     <ul>
         <?php foreach($books as $book) : ?>
             <li><?=  $book ?></li>
         <?php endforeach ; ?>
     </ul>

     </ul>
</body>
</html>